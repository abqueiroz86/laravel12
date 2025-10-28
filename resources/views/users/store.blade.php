@extends('layouts.master')

@section('page_name','Cadastrar Usuário')

@section('content')
    <a href="{{ route('usuarios.index') }}">Listar Usuários</a>
    <form action="{{ route('usuarios.store') }}" method="POST">
        @csrf

        @if ($errors->any())
            @foreach ( $errors->all() as $error )
                <div style="color: red;">{{ $error }}</div>
            @endforeach
        @endif
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
        </div>
        <button type="submit">Save User</button>
@endsection