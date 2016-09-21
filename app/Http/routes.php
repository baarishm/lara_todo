<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

/**
 * To define the model route
 * Task and Project models
 */
 
Route::model('tasks', 'Task');
Route::model('projects', 'Project');


/** 
 * Use slugs rather than IDs in URLs
 * projects/my-first-project/tasks/buy-milk   instead of   /projects/1/tasks/2
 */
 
Route::bind('tasks', function($value, $route) {
	return App\Task::whereSlug($value)->first();
});
Route::bind('projects', function($value, $route) {
	return App\Project::whereSlug($value)->first();
});


/**
 * To define the controller route
 * Task and Project controllers
 */
 
Route::resource('projects', 'ProjectsController');
// Route::resource('tasks', 'TasksController');
Route::resource('projects.tasks', 'TasksController');
