@extends('layouts.main')
@section('content')
    <h1 class="title">Todo List</h1>
    <a href="/add-form" class="btn">Tambah</a>
    <hr>
    <div class="todo-list">
        
        @foreach ($todos as $todoItem)
        <div class="todo-item">
            <h3>{{ $todoItem->todo }}</h3>
            <h4>{{ $todoItem->status }}</h4>
            <p>{{ $todoItem->tanggal }}</p>
            <p>{{ $todoItem->jam }}</p>
            <div class="action">
                <a href="/update-form/{{$todoItem->id}}" class="btn">Ubah</a>
                <a href="/delete/{{$todoItem->id}}" class="btn">Hapus</a>
            </div>
        </div>
        @endforeach
    </div>
@endsection