<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1> @extends('layout.app')</h1>
    @section('title','Halaman Latihan Layout:Home')

    @section('content')
    <p>Ini adalah halaman home</p>
    <p>Selamat datang </p>
    @endsection

    @include('layout.componen')
</body>
</html>