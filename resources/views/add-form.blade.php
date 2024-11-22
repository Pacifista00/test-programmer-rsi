@extends('layouts.main')
@section('content')
    <h1>Tambah</h1>
    <hr>
    <ul>
        @foreach ($errors->all() as $error)
            <li class="error">{{ $error }}</li>
        @endforeach
    </ul>
    <form action="/add" method="POST">
        @csrf
        <div class="input">
            <label for="todo">Todo</label>
            <input id="todo" name="todo" type="text">
        </div>
        <div class="input">
            <label for="tanggal">Tanggal</label>
            <input id="tanggal" name="tanggal" type="date">
        </div>
        <div class="input">
            <label for="jam">Jam</label>
            <input id="jam" name="jam" type="time">
        </div>
        <button class="btn">Simpan</button>
    </form>
@endsection