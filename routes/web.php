<?php



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

use App\Employee;

use App\Example;

use App\Services\Twitter;

app()->singleton('Employee', function () {
    return new Employee(new Example());
});


//dd(app('App\Services\Twitter'));



Route::get('/', function (Twitter $twitter) {

  //  dd($twitter);

    return view('welcome');
});


Route::resource('/projects', 'ProjectsController')->middleware('can:update,project');

/*
+--------+-----------+-------------------------+------------------+-------------------------------------------------+--------------+
| Domain | Method    | URI                     | Name             | Action                                          | Middleware   |
+--------+-----------+-------------------------+------------------+-------------------------------------------------+--------------+
|        | GET|HEAD  | /                       |                  | Closure                                         | web          |
|        | GET|HEAD  | api/user                |                  | Closure                                         | api,auth:api |
|        | GET|HEAD  | projects                | projects.index   | App\Http\Controllers\ProjectsController@index   | web          |
|        | POST      | projects                | projects.store   | App\Http\Controllers\ProjectsController@store   | web          |
|        | GET|HEAD  | projects/create         | projects.create  | App\Http\Controllers\ProjectsController@create  | web          |
|        | GET|HEAD  | projects/{project}      | projects.show    | App\Http\Controllers\ProjectsController@show    | web          |
|        | PUT|PATCH | projects/{project}      | projects.update  | App\Http\Controllers\ProjectsController@update  | web          |
|        | DELETE    | projects/{project}      | projects.destroy | App\Http\Controllers\ProjectsController@destroy | web          |
|        | GET|HEAD  | projects/{project}/edit | projects.edit    | App\Http\Controllers\ProjectsController@edit    | web          |
+--------+-----------+-------------------------+------------------+-------------------------------------------------+--------------+
*/


Route::post('/projects/{project}/Task', 'TasksController@store');

Route::patch('/tasks/{task}', 'TasksController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
