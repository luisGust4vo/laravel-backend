@props(['pageTitle' => ''])

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} @isset($pageTitle) - {{ $pageTitle }} @endisset</title>
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/datatables/datatables.min.css')}}"> 
    <link rel="stylesheet" href="{{ asset('assets/css/main.css')}}">
</head>
<body>
    {{ $slot }}
       <!-- resources -->
       <script src="{{ asset(' assets/datatables/jquery.min.js')}}"></script>
       <script src="{{ asset('assets/bootstrap/bootstrap.bundle.min.js')}}"></script>
       <script src="{{ asset('assets/datatables/datatables.min.js')}}"></script>
</body>
</html>
