<?php
Route::get('/panel', ['as' => 'dashboard', 'uses' => 'RoleController@dashboard']);

//modulo de cursos
Route::get('cursos',['as'=>'courses.index','uses'=>'CourseController@index']);
Route::get('cursos/crear',['as'=>'courses.create','uses'=>'CourseController@create']);
Route::post('cursos/crear',['as'=>'courses.store','uses'=>'CourseController@store']);

Route::post('getSearchCourses',['as'=>'getSearchCourses','uses'=>'CourseController@getSearchCourses']);


//modulo de periodos
Route::get('periodos',['as'=>'academic.index','uses'=>'AcademicController@index']);
Route::get('periodos/crear',['as'=>'academic.create','uses'=>'AcademicController@create']);
Route::post('periodos/crear',['as'=>'academic.store','uses'=>'AcademicController@store']);

//modulo de clases
Route::get('clases',['as'=>'program.index','uses'=>'ProgramController@index']);
Route::get('clases/crear',['as'=>'program.create','uses'=>'ProgramController@create']);
Route::post('clases/crear',['as'=>'program.store','uses'=>'ProgramController@store']);
Route::post('getProgramLevels',['as'=>'getProgramLevels','uses'=>'ProgramController@getProgramLevels']);

//modulo de niveles
Route::get('niveles',['as'=>'level.index','uses'=>'LevelController@index']);
Route::get('niveles/crear',['as'=>'level.create','uses'=>'LevelController@create']);
Route::post('niveles/crear',['as'=>'level.store','uses'=>'LevelController@store']);

//modulo de turnos
Route::get('turnos',['as'=>'shift.index','uses'=>'ShiftController@index']);
Route::get('turnos/crear',['as'=>'shift.create','uses'=>'ShiftController@create']);
Route::post('turnos/crear',['as'=>'shift.store','uses'=>'ShiftController@store']);

//modulo de horario
Route::get('Horarios',['as'=>'time.index','uses'=>'TimeController@index']);
Route::get('Horarios/crear',['as'=>'time.create','uses'=>'TimeController@create']);
Route::post('Horarios/crear',['as'=>'time.store','uses'=>'TimeController@store']);

//modulo de numero de grupo
Route::post('numerogrupo/crear',['as'=>'batch.store','uses'=>'BatchController@store']);

//modulo de grupo
Route::post('Grupo/crear',['as'=>'group.store','uses'=>'GroupController@store']);

Route::get('estudiantes',['as'=>'students.index','uses'=>'StudentController@index']);
Route::get('estudiantes/crear',['as'=>'students.create','uses'=>'StudentController@create']);
Route::post('estudiantes/crear',['as'=>'students.store','uses'=>'StudentController@store']);