<?php

Route::get('/', function () {
    return view('pages.index');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/contact', function () {
    return view('pages.contact');
});

Route::post('/contact', function () {

    $data= request()->all();
    echo "Email :" .$data['email'],'<br>';
    echo  "Body  :" .$data['body'] ;



});
