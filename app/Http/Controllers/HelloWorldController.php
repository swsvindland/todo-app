<?php

namespace App\Http\Controllers;

class HelloWorldController extends Controller
{
    public function index()
    {
        return response()->json(['value' => 'Hello World']);
    }
}
