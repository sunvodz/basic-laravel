<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('users', function () {
    return 'Sunvodz !';
});
Route::get('showname', function () {
    return 'Hello Sunvodz !';
});
