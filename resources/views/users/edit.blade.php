@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <form action="{{route('users.update', ['id'=>$user->id])}}" method="post">
            @csrf
            <div>Nome<br><input name="name" type="text" value="{{$user->name}}"></div>
            <br>
            <div>Email<br><input name="email" type="email" value="{{$user->email}}"></div>
            <br>
            <div>Senha<br><input name="password" type="password"></div>
            <br>
            <button type="submit">Atualizar</button>
            </form>
        </div>
    </div>
@endsection
