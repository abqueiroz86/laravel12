@extends('layouts.master')

@section('page_name','Index')

@section('content')
    @foreach ( $users as $user )
        <div class='user_name'> {{ $user->name . ' - ' . $user->email }} </div>
    @endforeach
@endsection