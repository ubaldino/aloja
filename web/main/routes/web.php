<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post( '/' , function () {


    file_put_contents( "../../code.c" , $_POST['source_code'] );

    return Redirect::back();
});

Route::get('/test', function () {
    return 'test';
});

Route::get('/upload', function () {
    return view( 'upload' );
});

Route::post( '/upload', function () {
    return $_POST;
});

Route::resource( 'problems', 'ProblemController' );

Route::get( 'answer/{id}', 'AnswerController@index' )->middleware( 'auth' );
Route::post( 'answer/store', 'AnswerController@store' )->middleware( 'auth' );

/* AUTH::Controllers */

Auth::routes();

Route::get('/home', 'HomeController@index');


/*

function sanitizeVariables( &$item, $key ) {
        if ( !is_array( $item ) ) {
            // undoing 'magic_quotes_gpc = On' directive
            if (get_magic_quotes_gpc())
                $item = stripcslashes($item);
            $item = sanitizeText($item);
        }
    }

    array_walk_recursive( $_FILES , 'sanitizeVariables' );

 */