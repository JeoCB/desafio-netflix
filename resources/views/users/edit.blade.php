@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <form action="{{route('users.update', ['id'=>$user->id])}}" method="post">
            @csrf
            <input name="name" type="text" value="{{$user->name}}">
            <input name="email" type="email" value="{{$user->email}}">
            <input name="password" type="password">
            <button type="submit">Atualizar</button>
            </form>
        </div>
    </div>
@endsection
