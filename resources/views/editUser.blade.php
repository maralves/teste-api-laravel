@extends('head')
@section('content')
<div class="col-8">
    <div class="card">
        <div class="card-header">
            Editar Usuário
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
        <form action="{{ route('users.update',['id' => $user->id]) }}" method="post">
            @csrf
            @method('put')
            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="name" class="form-control" placeholder="Nome" value="{{ $user->name }}">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" placeholder="Email" value="{{ $user->email }}">
            </div>
            <div class="form-group">
                <label>Senha</label>
                <input type="text" name="senha" class="form-control" placeholder="Senha" value="{{ $user->password }}">
            </div>
            <input type="submit" value="Atualizar" class="btn btn-success">
            <a href="{{ route('users.list') }}" class="btn btn-secondary">Voltar</a>
        </form>
    </div>
</div>
@endsection