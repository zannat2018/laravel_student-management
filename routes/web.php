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

Route::get('/',['as'=>'/','uses'=>'LoginController@getLogin']);
Route::post('login',['as'=>'login', 'uses'=> 'LoginController@postLogin']);

Route::get('/noPermission',function(){
	return view('permission.noPermission');
});



Route::group(['middleware'=>['authen']],function(){
	Route::get('/logout',['as'=>'logout', 'uses'=>'LoginController@getLogout']);
	Route::get('/dashboard',['as'=>'dashboard','uses'=>'DashboardController@dashboard']);

});
Route::group(['middleware'=>['authen','roles'], 'roles'=>['admin']],function(){

     Route::get('/manage/course',['as' =>'manageCourse', 'uses'=>'CourseController@getManageCourse']);

	Route::post('/manage/course/insert',['as'=> 'postInsertAcademic', 'uses' => 'CourseController@postInsertAcademic']);

	Route::post('/manage/course/Insert-program',['as'=>'postInsertProgram','uses'=>'CourseController@postInsertProgram']);
		Route::post('/manage/course/Insert-level',['as'=>'postInsertLevel','uses'=>'CourseController@postInsertLevel']);
		Route::get('/manage/course/showLevel',['as'=>'showLevel','uses'=>'CourseController@showLevel']);
		Route::post('/manage/course/shift',['as'=>'createShift','uses'=>"CourseController@createShift"]);
		Route::post('/manage/course/time',['as'=>'createTime','uses'=>"CourseController@createTime"]);
		Route::post('/manage/course/batch',['as'=>'createBatch','uses'=>"CourseController@createBatch"]);
		Route::post('/manage/course/group',['as'=>'createGroup','uses'=>"CourseController@createGroup"]);
		Route::post('/manage/course/class',['as'=>'createClass','uses'=>"CourseController@createClass"]);
		Route::get('/manage/course/classInfo',['as'=>'showClassInformation','uses'=>"CourseController@showClassInformation"]);
		Route::post('/manage/create/class/delete',['as'=>'deleteClass','uses'=>'CourseController@deleteClass']);
		Route::get('/manage/create/class/edit',['as'=>'editClass','uses'=>'CourseController@editClass']);
		Route::post('/manage/create/class/update',['as'=>'updateClassInfo','uses'=>'CourseController@updateClassInfo']);
});




//or

/*Route::get('/student/{name?}/{email?}', function( $name="zannat", $email="zannat@gmail.com"){
	echo "student's name is $name and his email is $email";
}); */
