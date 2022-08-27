@extends('head')
@section('content')
<div class="col-8">
    <div class="card">
        <div class="card-header">
            Cadastro de Usuário
        </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach

            </ul>
        </div>
        @endif
        <form action="{{ route('users.create') }}" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="text" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label class="form-label">Senha</label>
                <input type="text" class="form-control" name="password">
            </div>
            <input type="submit" value="Cadastrar" class="btn btn-success">
            <a href="{{ route('users.list') }}" class="btn btn-secondary">Voltar</a>
        </form>
    </div>
</div>
@endsection