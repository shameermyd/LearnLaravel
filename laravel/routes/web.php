<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Listing;

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
        'listing' => Listing::all()  
    ]);
});

Route::get('/lists/{id}',function($id){
    return view('list_sep',[
        'heading'=>'find list',
        'lists' => Listing::find($id)
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

