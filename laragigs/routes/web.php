<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' =>[ 
        [
            'id' => 1,
            'title' => 'Listing One',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis nisi commodo, aliquet nisl in, venenatis turpis.'
        ],
        [
            'id' => 2,
            'title' => 'Listing Two',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis nisi commodo, aliquet nisl in, venenatis turpis.'
        ]
       
        ]
    ]);
});














/*
Route::get('/hello', function(){
    return response('<h1>Hello World</h1>');
});

Route::get('/posts/{id}', function($id){
    //ddd($id);
    return response('Post ' . $id);
})->where('id', '[0-9]+');

Route::get('/search', function(Request $request){
return($request->name . ' ' . $request->city);
    
});*/