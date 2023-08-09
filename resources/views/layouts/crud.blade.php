@extends('layouts.app')

@section('content_crud')

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Crud</title>

<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap-icons.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap-icons-1.10.5/font/bootstrap-icons.css') }}">
</head>

<body>

<div>@yield('contentz')</div>
    

</body>

<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

</html>

@endsection