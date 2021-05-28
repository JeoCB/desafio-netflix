@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <form action="{{route("users.create")}}" method="get">
            @csrf
            <div>Nome<br><input name="name" type="text"></div>
            <br>
            <div>Email<br><input name="email" type="email"></div>
            <br>
            <div>Senha<br><input name="password" type="password"></div>
            <br>
            <button type="submit">Cadastrar</button>
            </form>
        </div>
    </div>
@endsection
