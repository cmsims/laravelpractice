<?php


namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Todo;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\Validator;
use Illuminate\Http\Request;



class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $todos=Todo::all();
        return view('pages.todos.index', compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     * @param Todo $todo
     */
    public function show(Todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Todo $todo
     */
    public function edit(Todo $todo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Todo $todo
     */
    public function update(Todo $todo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Todo $todo
     */
    public function destroy(Todo $todo)
    {
        //
    }


//    public function index(){
//        $todos=Todo::orderBy('created_at', 'asc')->get();
//        $data = [ 'todos' => $todos ];
//        return view('pages.todos', $data);
//    }
//
//    public function create(Request $request)
//    {
//        $validator=Validator::make($request->all(),[
//            'name'=>'required|max:255',
//        ]);
//
//        if ($validator->fails()){
//            return redirect('/')->withInput()->withErrors($validator);
//        }
//
//        $todo=new Todo;
//        $todo->name=$request->name;
//        $todo->save();
//
//
//        return redirect('/');
//    }
//
//    public function delete(Todo $todo)
//    {
//        $todo->delete();
//        return redirect('/');
//    }
}

//Route::delete('/todo/{todo}', function (){
//
//})
