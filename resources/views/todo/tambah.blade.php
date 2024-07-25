@extends('layout')

@section('content')
    <h1>Tambah Todo</h1>
    
    <form action="{{ route('todo.store') }}" method="post">
        @csrf
        <div>
            <label for="todo">Todo</label>
            <input type="text" name="todo" id="todo" placeholder="skin" required>
        </div>
        <br>
        <div>
            <label for="keteranan">keterangan</label>
            <textarea name="keterangan" id="keterangan" placeholder="keterangan skin" required></textarea>
        </div>
        <br>
        <button type="submit">Simpan</button>
    </form>
@endsection