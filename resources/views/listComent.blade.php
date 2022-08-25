@extends('head')

<body>
    <h1>{{ $coment->title }} </h1>
    <p> {{ $coment->coment}} </p>
    <h4>{{ $coment->post_id}} </h4>
    <h4>{{ $coment->user_id}} </h4>
</body>

</html>