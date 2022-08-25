@extends('head')

<body>
    <table>
        @if (!empty($msg))
        {{$msg}}
        @endif
        <thead class="thead-dark">
            <tr>
                <th scope="col">#Id</th>
                <th scope="col">Title</th>
                <th scope="col">Coment</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        @foreach($coments as $coment)
        <tbody>
            <tr>
                <th scope="row">{{ $coment->id }}</th>
                <th>{{ $coment->title }}</th>
                <th>{{ $coment->coment }}</th>
                <th>
                    <a href="{{ route('coments.edit',['id' => $coment->id]) }}" class="btn btn-warning">Editar</a>
                    <a href="{{ route('coments.show',['id' => $coment->id]) }}" class="btn btn-secondary">Ver</a>
                    <form action="{{ route('coments.delete',['id' => $coment->id]) }}" method='post'>
                        @csrf
                        @method('delete')
                        <input type="submit" class="btn btn-danger" value="Remover">
                    </form>
                </th>
            </tr>
        </tbody>
        @endforeach
    </table>
</body>

</html>