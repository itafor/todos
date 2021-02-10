<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use App\Todo;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TodoController extends Controller
{
 
 public $todo;

	public function __construct(Todo $todo)
    {
        $this->middleware(['auth'])->except('myTodos');
        $this->todo = $todo;
    }

    public function createTodo(Request $request){

    	return view('todos.create_todo');
    }

    public function storeTodo(TodoRequest $request) {

      $addTodo = $this->todo->createNew($request->all());

	if($addTodo){
    return back()->with('success', 'New todo created successfully');
	}
    return back()->with('error', 'ooops!! something went wrong!!');

    }

   public function myTodos(){

   	$data['todos'] = $this->todo->paginate(6);

   	return view('todos.my_todos', $data);
   }

   public function showTodo($id){

   	$data['todo'] = $this->todo::find($id);

    	return view('todos.show',$data);
   }

    public function editTodo($id){

   	$data['todo'] = $this->todo::find($id);

    	return view('todos.edit',$data);
   }

      public function updateTodo(TodoRequest $request) {

      $updateTodo = $this->todo->manage($request->all());

    return back()->with('success', 'Todo updated successfully');

    }

   public function deleteTodo($id){

   	$todo = $this->todo::find($id);

   	if($todo){
   		$todo->delete();
   	}
   	
    	return redirect()->route('todo.list')->with('success','Deleted successfully');
   }

   public function activities($id){

   	    $today = Carbon::now();
        $curr_week = Carbon::now('w');
        $curr_momth = Carbon::now('m');

    switch ($id) {
        case 1:
           $data['todos'] = $this->todo->paginate(6);

      	return view('todos.my_todos', $data);

       break;
       case 2:
             $data['todos'] = $this->todo->whereDate('todo_date', $today)->paginate(6);
          	return view('todos.activities.daily', $data);
        break;

        case 3:
            $data['todos']  = Todo::whereBetween('todo_date', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->paginate(6);
           return view('todos.activities.weekly', $data);
       break;

       case 4:
             $data['todos'] = $this->todo->whereMonth('todo_date', $curr_momth)->paginate(6);
         	return view('todos.activities.monthly', $data);
       break;
                 
        default:
                     # code...
                     break;
    }
   }

}
