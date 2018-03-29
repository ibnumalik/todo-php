<?php

namespace App\Controller;

use App\Core\App;
use QB;

class TasksController
{
    public function index()
    {
        $tasks = QB::table('tasks')->select('*')->get();
        return view('tasks', compact('tasks'));
    }

    // TasksController@create
    public function create()
    {
        QB::table('tasks')->insert([
            'description' => $_POST['name'],
            'completed' => 'false'
        ]);

        return redirect('tasks');
    }
}