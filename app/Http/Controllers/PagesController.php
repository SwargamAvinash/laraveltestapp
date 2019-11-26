<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $tasks = [
        "Go to the Market",
        "Go to the Shop",
        "Go to the Side Shop"
        ];

        # There are many ways of doing this
        return view('welcome')->withTasks($tasks)->withSwargam('Swargam');
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }
}
