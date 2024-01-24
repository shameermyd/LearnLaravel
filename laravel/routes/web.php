<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/',function(){
    return view('list',[
        'heading' => 'List For Learn',
        'listing' => [
            'id' => '1',
            'title'=>'List ONE',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ]
    ]);
});

Route::get('/hello',function (){
    return response("<h1>Hello World</h1>")
    ->header('Content-Type','text/plain')   //in the browser console, we can check it Header
    ;
});

Route::get('/posts/{id}',function ($id){
    // ddd($id);                               //die dumb and debug
    return response('Post '. $id );         //get('{id}',function ($id){ return $id })->where('id','condition');
})->where('id','[0-9]+');

Route::get('/search',function (Request $request){
    // dd($request);
    return response('Name: '.$request->name.' , City: '.$request->city); // url=search?name=sha&city=kollam
});

