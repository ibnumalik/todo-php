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
            'completed' => 0
        ]);

        return redirect('tasks');
    }

    public function delete()
    {
        QB::table('tasks')->where('id', '=', $_POST['id'])->delete();

        return redirect('tasks');
    }
}