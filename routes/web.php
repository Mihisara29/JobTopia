<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Route as RoutingRoute;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs',function(){
    return '<h1>Available Jobs</h1>';
})->name('jobs');

Route::get('/posts/{id}/comments/{commentId}',function(string $id,string $commentId){
    return 'Post ' .$id . 'Comment' . $commentId;
});