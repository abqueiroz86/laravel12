@extends('layouts.master')

@section('page_name','Show')

@section('content')
    {{ $user->name . ' - ' . $user->email }}
@endsection