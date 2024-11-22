<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index(){
        $todos = Todo::all();

        return view('home', [
            "todos" => $todos
        ]);
    }

    public function addForm(){
        return view('add-form');
    }

    public function updateForm($id){
        $todo = Todo::find($id);

        return view('update-form',[
            "todo" => $todo
        ]);
    }

    public function add(Request $request){
        $request->validate([
            "todo" => "required|max:30",
            "tanggal" => "required|date",
            "jam" => "required",
        ]);

        Todo::create([
            "todo" => $request->todo,
            "tanggal" => $request->tanggal,
            "jam" => $request->jam,
            "status" => "belum",
        ]);

        return redirect('/');
    }

    public function update(Request $request, $id){
        $request->validate([
            "todo" => "required|max:30",
            "tanggal" => "required|date",
            "jam" => "required",
            "status" => "required",
        ]);

        $todo = Todo::find($id);

        if(!$todo){
            return redirect('/')->with('message', 'Data tidak ditemukan');
        }

        $todo->update([
            "todo" => $request->todo,
            "tanggal" => $request->tanggal,
            "jam" => $request->jam,
            "status" => $request->status,
        ]);

        return redirect('/');
    }

    public function delete(Request $request, $id){
        $todo = Todo::find($id);

        if(!$todo){
            return redirect('/')->with('message', 'Data tidak ditemukan');
        }

        $todo->delete();

        return redirect('/');
    }
}
