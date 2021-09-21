<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Todo;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    public function index()
    {
        $items = Todo::all();
        return view('index', ['items' => $items]);
    }
    public function add()
    {
        return view('add');
    }

}