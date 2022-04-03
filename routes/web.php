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

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('courses', 'CourseController');
Route::resource('users', 'UserController');
Route::resource('students', 'StudentController');
Route::get('/enroll/{id}', 'EnrollController@enroll');
Route::get('/mycourses', 'EnrollController@create');
Route::get("/unenroll/{id}", 'EnrollController@unenroll');
//Route::get("/user/articles/{user}", "UserController@getArticles")->name("user.articles");
Route::get('availablecourses', 'CourseController@courses');
Route::resource('enrolls', 'EnrollController');
Route::resource("/comments", 'CommentController');
Route::get('availablecourses', 'CourseController@courses');
Route::get('/', 'CourseController@display');
