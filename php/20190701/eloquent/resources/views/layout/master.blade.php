<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('./css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('./css/styles.css')}}">
</head>
<body>
    11111
    <hr>
    @include('layout.header')
    <hr>
    @section('content') @show
<hr>
    @include('layout.footer')
</body>
</html>
