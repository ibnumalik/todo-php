<?php

use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::setDefaultNamespace('\App\Controller');

SimpleRouter::get('/', 'PagesController@home');
SimpleRouter::get('about', 'PagesController@about');
SimpleRouter::get('contact', 'PagesController@contact');
SimpleRouter::get('tasks', 'TasksController@index');
SimpleRouter::post('tasks', 'TasksController@create');
SimpleRouter::delete('tasks', 'TasksController@delete');