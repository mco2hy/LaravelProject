<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Index(){

        /*$data = Department::get();
        dd($data);
        return view('home',compact('data'));*/
        return view('home');
    }
}
