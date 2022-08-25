@extends('head')

<body>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach

        </ul>
    </div>
    @endif
    <form action="{{ route('posts.create') }}" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Título</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="mb-3">
            <label class="form-label">Post</label>
            <input type="text" class="form-control" name="post">
        </div>
        <input type="submit" value="Cadastrar" class="btn btn-success">
        <a href="{{ route('posts.list') }}" class="btn btn-secondary">Voltar</a>
    </form>

</body>

</html>