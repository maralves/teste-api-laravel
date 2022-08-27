@extends('head')

@section('content')

<div class="col-8">
    <div class="card">
        <div class="card-header">
            Comentários
        </div>
        <div class="card-body">
            <a href="{{ route('coments.new') }}" class="btn btn-success">Cadastrar</a>
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#Id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Coment</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                @foreach($coments as $coment)
                <tr>
                    <td scope="row">{{ $coment->id }}</td>
                    <td>{{ $coment->title }}</td>
                    <td>{{ $coment->coment }}</td>
                    <td>
                        <form action="{{ route('coments.delete',['id' => $coment->id]) }}" method='post'>
                            @csrf
                            @method('delete')
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('coments.edit',['id' => $coment->id]) }}" class="btn btn-warning">Editar</a>
                                <a href="{{ route('coments.show',['id' => $coment->id]) }}" class="btn btn-secondary">Ver</a>
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