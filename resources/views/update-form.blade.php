@extends('layouts.main')
@section('content')
    <h1>Ubah</h1>
    <hr>
    <ul>
        @foreach ($errors->all() as $error)
            <li class="error">{{ $error }}</li>
        @endforeach
    </ul>
    <form action="/update/{{$todo->id}}" method="POST">
        @csrf
        <div class="input">
            <label for="todo">Todo</label>
            <input id="todo" name="todo" type="text" value="{{ $todo->todo }}">
        </div>
        <div class="input">
            <label for="tanggal">Tanggal</label>
            <input id="tanggal" name="tanggal" type="date" value="{{ $todo->tanggal }}">
        </div>
        <div class="input">
            <label for="jam">Jam</label>
            <input id="jam" name="jam" type="time" value="{{ $todo->jam }}">
        </div>
        <div class="input">
            <label for="jam">Jam</label>
            <select name="status" id="status">
                <option value="belum">belum</option>
                <option value="sedang">sedang</option>
                <option value="sudah">sudah</option>
            </select>
        </div>
        <button class="btn">Simpan</button>
    </form>
@endsection