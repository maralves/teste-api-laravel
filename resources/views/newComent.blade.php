@extends('head')
@section('content')
<div class="col-8">
    <div class="card">
        <div class="card-header">
            Cadastro de Comentário
        </div>
        <form action="{{ route('coments.create') }}" method="post">
            @csrf
            <div class="form-group">
                <label>Título</label>
                <input type="text" name="title" class="form-control" placeholder="Título">
            </div>
            <div class="form-group">
                <label>Comentário</label>
                <input type="select" name="coment" class="form-control" placeholder="Comentário">
            </div>
            <div class="form-group">
                <label>Post</label>
                <input type="select" name="post_id" class="form-control" placeholder="Selecione o Post">
            </div>
            <div class="form-group">
                <label>Usuário</label>
                <input type="select" name="user_id" class="form-control" placeholder="Selecione o Usuário">
            </div>
            <input type="submit" value="cadastrar" class="btn btn-success">
            <a href="{{ route('coments.list') }}" class="btn btn-secondary">Voltar</a>
        </form>
    </div>
</div>
@endsection