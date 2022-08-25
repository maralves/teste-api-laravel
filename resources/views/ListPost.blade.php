@extends('head')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List Post</title>

</head>

<body>
    <h1>{{ $post->title}} </h1>
    <p> {{ $post->post}} </p>
</body>

</html>