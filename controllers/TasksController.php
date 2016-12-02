<?php 

namespace App\Controller;

use App\Core\App;

class TasksController
{
    public function index()
    {
        $tasks = App::get('database')->selectAll('tasks');
        return view('tasks', compact('tasks'));
    }

    // TasksController@create
    public function create()
    {
        App::get('database')->insert('tasks', [
            'description' => $_POST['name'],
            'completed' => false
        ]);

        return redirect('tasks');
    }
}