@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('content')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Selamat Datang {{$firstname}} {{$lastname}}!</h1>
    <h2>Terima kasih telah bergabung di Sanberbook. Social Media kita bersama!</h2>
@endsection
