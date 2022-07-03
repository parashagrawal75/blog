<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index($value='')
    {
        $a = array('test');


        array_push($a, 'test2')     ;


    }
}
