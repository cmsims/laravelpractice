<?php namespace App\Http\Controllers;
use App\Project;
use App\Todo;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class TodoController extends Controller
{

    protected $rules = [
        'name' => ['required', 'min:3'],
        'slug' => ['required'],
        'description' => ['required'],
    ];


    /**
 * Display a listing of the resource.
 *
 * @param  \App\Project $project
 * @return Response
 */
    public function index(Project $project)
    {
        return view('pages.todos.index', compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Project $project
     * @return Response
     */
    public function create(Project $project)
    {
        return view('pages.todos.create', compact('project'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Project $project
     * @return Response
     */
    public function store(Project $project, Request $request)
    {
        $this->validate($request, $this->rules);

        $input = Input::all();
        $input['project_id'] = $project->id;
        Todo::create( $input );

        return Redirect::route('pages.projects.show', $project->slug)->with('Todo created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project $project
     * @return Response
     */
    public function show(Project $projects, Todo $todos)
    {
        return view('pages.todos.show', compact('projects', 'todos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project $project

     * @return Response
     */
    public function edit(Project $project, Todo $todo)
    {
        return view('pages.todos.edit', compact('project', 'todo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Project $project
     * @return Response
     */
    public function update(Project $project, Todo $todo, Request $request)
    {
        $this->validate($request, $this->rules);

        $input = array_except(Input::all(), '_method');
        $todo->update($input);

        return Redirect::route('projects.todos.show', [$project->slug, $todo->slug])->with('message', 'Todo updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project $project
     * @param  \App\Todo    $todo
     * @return Response
     */
    public function destroy(Project $project, Todo $todo)
    {
        $todo->delete();
        return Redirect::route('projects.show', $project->slug)->with('message', 'Todo deleted.');
    }

}