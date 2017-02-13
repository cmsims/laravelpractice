<?php
/**
 * Created by PhpStorm.
 * User: mitchsims
 * Date: 2/3/17
 * Time: 4:03 PM
 */

namespace App\Http\Controllers;
use App\Project;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class ProjectController extends Controller
{

    protected $rules = [
        'name' => ['required', 'min:3'],
        'slug' => ['required'],
    ];



    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('pages.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('pages.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, $this->rules);

        $input = Input::all();
        Project::create( $input );

        Session::flash('message', 'Project updated.');

        return redirect('projects');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project $project
     * @return Response
     */
    public function show(Project $project)
    {
        return view('pages.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project $project
     * @return Response
     */
    public function edit(Project $project)
    {
        return view('pages.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Project $project
     * @return Response
     */
    public function update(Project $project, Request $request)
    {
        $this->validate($request, $this->rules);

        $input = array_except(Input::all(), '_method');
        $project->update($input);
        Session::flash('message', 'Project updated.');

        return redirect('projects');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project $project
     * @return Response
     */
    public function destroy(Project $project)
    {
        $project->delete();

        Session::flash('message', 'Project deleted.');

        return redirect('projects');
    }
}