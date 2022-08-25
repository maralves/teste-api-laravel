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
    <form action="{{ route('posts.update',['id' => $post->id]) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label>Título</label>
            <input type="text" name="title" class="form-control" placeholder="Título" value="{{ $post->title }}">
        </div>
        <div class="form-group">
            <label>Post</label>
            <input type="text" name="post" class="form-control" placeholder="Post" value="{{ $post->post }}">
        </div>
        <input type="submit" value="Atualizar" class="btn btn-success">
        <a href="{{ route('posts.list') }}" class="btn btn-secondary">Voltar</a>
    </form>

</body>

</html>