<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="/fontawesome/css/all.css">

</head>
<body>
    {{-- Header --}}
    @include('layout.header')
    {{-- end Header --}}
    {{-- Body --}}
    @include('layout.body')
    {{-- end Body --}}
    <script src="/bootstrap/js/bootstrap.bundle.js"></script>
    
</body>
</html>