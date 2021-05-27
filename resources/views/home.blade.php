@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Usuários</div>
                    <table>

                        <tr>
                            <th>Nome</th>
                            <th>email</th>
                            <th>opcoes</th>

                        </tr>
                        @foreach ($users as $user)
                            <tr>
                                <th>{{ $user->name }}</th>
                                <th>{{ $user->email }}</th>
                                <th>
                                    <form action="{{ route('users.destroy', ['id' => $user->id]) }}" method="post">
                                        @csrf
                                        <button type="submit">deletar</button>
                                    </form>
                                </th>

                            </tr>

                        @endforeach

                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
