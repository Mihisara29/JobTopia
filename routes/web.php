<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Route as RoutingRoute;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs',function(){
    return view('jobs.index');
})->name('jobs');

Route::get('/jobs/create',function(){
    return view('jobs.create');
})->name('jobs.create');

Route::get('/test',function(){
    return response()->json(['name'=>'John Doe'])->cookie('name','John Doe');
});

Route::get('/download',function(){
    return response()->download(public_path('favicon.ico'));
});

Route::get('/read-cookie',function(Request $request){
    $cookieValue = $request->cookie('name');
    return response()->json(['cookie' => $cookieValue]);
});