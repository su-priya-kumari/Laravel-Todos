<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    
    public function index()
    {
       return view('home',["items" => Todo::all()]);
    }

    public function create()
    {
        return view('insert');
    }

    public function store(Request $request)
    { 
        Todo::create([
            'title'=> $request->title,
            'decription'=> $request->decription,
            'location'=> $request->location,
            'time'=> $request->time,
            'start_time'=> $request->start_time,
            'end_time'=> $request->end_time,
        ]);
        return redirect()->route("todo.index");
    }

  
    public function show(Todo $todo)
    {

    }

    public function edit(Todo $todo)
    {
        return view('edit',['record'=>$todo]);
    }

    public function update(Request $request, Todo $todo)
    {
        Todo::find($todo->id)->update([
            'title'=> $request->title,
            'decription'=> $request->decription,
            'location'=> $request->location,
            'time'=> $request->time,
            'start_time'=> $request->start_time,
            'end_time'=> $request->end_time,
        ]);
        return redirect()->route("todo.index");  
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect()->back(); 
        
    }
}
