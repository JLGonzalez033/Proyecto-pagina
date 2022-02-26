<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NorteLogistica</title>

    <!--Se importan los estilos de css-->
    <link rel="stylesheet" href="{{ asset('/estilos/Index.css') }}">

    <!--Se importan los estilos de bootstrap css-->
    <link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}">

    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />

    <style>
       .bg-fondo-1{background-image: url("{{asset('/img/banner_maya.png')}}"); background-size: contain; }
       .bg-map{background-image: url("{{asset('/img/map.jpg')}}"); background-size: contain; background-repeat:no-repeat;}
    </style>


</head>
<body class="bg-dark">