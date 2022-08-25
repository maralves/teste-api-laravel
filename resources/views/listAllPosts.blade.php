@extends('head')

<body>
    <div class="container">
        <div class="row">
            <div class="col-4">

            </div>
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        Posts
                    </div>
                    <div class="card-body">
                        <a href="{{ route('posts.new') }}" class="btn btn-success">Cadastrar</a>
                        <table class="table">

                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">#Id</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Post</th>
                                    <th scope="col">Ações</th>
                                </tr>
                            </thead>
                            @foreach($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->post }}</td>
                                <td>
                                    <form action="{{ route('posts.delete',['id' => $post->id]) }}" method='post'>
                                        @csrf
                                        @method("delete")

                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{ route('posts.edit',['id' => $post->id]) }}" class="btn btn-warning">Editar</a>
                                            <a href="{{ route('posts.show',['id' => $post->id]) }}" class="btn btn-primary">Ver</a>

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
        </div>
    </div>
</body>

</html>