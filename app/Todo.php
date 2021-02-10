<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{

	protected $fillable = ['title', 'description', 'todo_date', 'status'];

    public function createNew($data){

    	$new_to = self::create([
    		'title' => $data['title'],
    		'description' => $data['description'],
    		'todo_date' =>  Carbon::parse(formatDate($data['todo_date'], 'd/m/Y', 'Y-m-d')),
    		'status' => 'Pending',
    	]);

    return $new_to;
    }

    public function manage($data){
   return  self::where('id', $data['id'])->update([
        'title' => $data['title'],
        'description' => $data['description'],
        'todo_date' =>  Carbon::parse(formatDate($data['todo_date'], 'd/m/Y', 'Y-m-d')),
        'status' => isset($data['status']) ? $data['status'] : null,
        ]); 
    }
}
