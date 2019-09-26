<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function create()
    {
        return view('layouts.create');
    }
    public function store(Request $request)
    {
        dd(($request));
    }
}
