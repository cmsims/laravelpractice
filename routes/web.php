<?php


use App\Todo;
use Illuminate\Support\Str;
use App\Http\Controllers\TodoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'ProjectController@index');

// Provide controller methods with object instead of ID
Route::model('todos', 'Todo');
Route::model('projects', 'Project');

// Use slugs rather than IDs in URLs
Route::bind('todo', function($value, $route) {
    return App\Todo::whereSlug($value)->first();
});
Route::bind('project', function($value, $route) {
    return App\Project::whereSlug($value)->first();
});

Route::resource('projects', 'ProjectController');
Route::resource('projects.todos', 'TodoController');