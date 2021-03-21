<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisualController extends Controller
{
    public function index(){

        return view("layouts.visual.index");


    }


}
