<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //ShowHelloController
    function showHello(){
        return '<h1>Hello Controller : SunvoDz </h1>';
    }
    function showHelloName($name){
        return '<h1>Hello Controller : '.$name.'</h1>';
    }
}
