<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class ToDoController extends Controller
{
    protected $task;

    public function __construct(){
        $this->task = new Todo();
    }

    public function index(){
        $response['tasks'] = $this->task->all();
        return view('pages.todo.index')->with($response);
    }

    public function store(Request $request){
        //dd($request);
        $this->task->create($request->all());

        return redirect()->back();
        //return redirect->route('home');
    }

    public function delete($id) {
        $task = $this->task->find($id);
        $task->delete();

        return redirect()->back();
    }

    public function update($id) {
        $task = $this->task->find($id);
        $task->done = 1;
        $task->update();

        return redirect()->back();
    }
}
