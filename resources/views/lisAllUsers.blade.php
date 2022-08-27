@extends('head')

@section('content')

<div class="col-8">
    <div class="card">
        <div class="card-header">
            Usuários
        </div>
        <div class="card-body">
            <a href="{{ route('users.new') }}" class="btn btn-success">Cadastrar</a>
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                @foreach($users as $user)
                <tr>
                    <td scope="row">{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <form action="{{ route('users.delete',['id' => $user->id]) }}" method='post'>
                            @csrf
                            @method('delete')
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('users.edit',['id' => $user->id]) }}" class="btn btn-warning">Editar</a>
                                <input type="submit" class="btn btn-danger" value="Remover">
                            </div>
                        </form>
                    </td>

                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection