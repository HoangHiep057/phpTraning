<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Index function</h1>
    {{-- <h2>Title: {{ $title }}</h2>
    <h3>x={{ $x }}</h3>
    <h4>y={{ $y }}</h4> --}}
    {{-- <h2>name ={{ $name }}</h2> --}}
    @foreach ($myphone as $item)
        <h2>{{ $item }}</h2>
    @endforeach
</body>
</html>