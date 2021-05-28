@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <a href="{{route('users.new')}}">Novo Usuário</a>
                
                <div class="card">
                    <div class="card-header">Usuários</div>

                    <table>

                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Última Atividade</th>
                            <th>Opções</th>
                        </tr>

                        @foreach ($users as $user)
                            <tr>
                                <th>{{ $user->name }}</th>
                                <th>{{ $user->email }}</th>
                                <th>{{ \Carbon\Carbon::parse($user->last_activity)->locale('pt_BR')->diffForHumans() }}
                                </th>
                                <th>
                                    <form action="{{ route('users.destroy', ['id' => $user->id]) }}" method="post">
                                        @csrf
                                        <button type="submit" onclick='return confirm("Tem certeza desta ação?")'>
                                            deletar
                                        </button>
                                    </form>
                                </th>
                                <th>
                                    <a href="{{ route('users.edit', ['id' => $user->id]) }}">Editar</a>
                                </th>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
