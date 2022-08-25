@extends('head')

<body>
    <form action="{{ route('coments.update',['id' => $coment->id]) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label>Título</label>
            <input type="text" name="title" class="form-control" placeholder="Título" value="{{ $coment->title }}">
        </div>
        <div class="form-group">
            <label>Comentário</label>
            <input type="text" name="coment" class="form-control" placeholder="Comentário" value="{{ $coment->coment }}">
        </div>
        <input type="submit" value="atualizar" class="btn btn-success">
        <a href="{{ route('coments.list') }}" class="btn btn-secondary">Voltar</a>
    </form>

</body>

</html>