<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Todo;



class TodoController extends Controller
{
    public function index()
    {
        $items = Todo::all();
        return view('index', ['items' => $items]);
    }
    public function create(Request $request)
    {
        $this->validate($request, Todo::$rules);
        $form = $request->all();
        Todo::create($form);
        return redirect('/');

    }
    public function edit(Request $request)
    {
        $item = DB::table('todos')->where('id', $request->id)->first();
        return view('edit', ['form' =>$item]);
    }
    public function update(Request $request)
    {
        $param = [
            'content' => $request->content,
        ];
        DB::table('todos')->where('id', $request->id)->update($param);
        return redirect('/');
    }
    public function delete(Request $request)
    {
        $item = DB::table('todos')->where('id', $request->id)->first();
        return view('delete', ['form' => $item]);
    }
    public function remove(Request $request)
    {
        $param = ['id' => $request->id];
        DB::table('todos')->where('id', $request->id)->delete();
        return redirect('/');
    }
}