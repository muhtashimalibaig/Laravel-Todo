<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    // show TODOS
    public function index(Request $request)
{
    $query = Todo::query();

    if ($request->has('search') && $request->search != '') {
        $query->where('title', 'like', '%' . $request->search . '%');
    }

    $todos = $query->get();

    return view('view-all', compact('todos'));
}

    public function store(Request $request){
        Todo::create([
            'title' => $request->title,
            'description' => $request->description,
            'category' => $request->category,
            'due_date' => $request->due_date,
            'bestOption' => $request->bestOption,
        ]);

        return redirect('/view-all');
    }

    public function delete($id){
        $todo = Todo::find($id);

        if($todo){
            $todo->delete($id);
        }
        
        return redirect('/view-all');
    }


    public function edit($id){
        $todo = Todo::find($id);
        return view('edit-to-do', compact('todo'));
    }

    public function Update(Request $request, $id){
        $todo = Todo::find($id);
        if($todo){
            $todo->update([
            'title' => $request->title,
            'description' => $request->description,
            'category' => $request->category,
            'due_date' => $request->due_date,
            'bestOption' => $request->bestOption,
            ]);
        };
        return redirect('/view-all');
    }

}
