<!DOCTYPE html> 
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> 
<head> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <!-- CSRF Token --> 
    <meta name="csrf-token" content="{{ csrf_token() }}"> 
    <title>{{ config('app.name', 'Laravel') }}</title> 
     
    <!-- Fonts --> 
    <link rel="dns-prefetch" href="//fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> 
    <!-- Styles --> 
    <link href="{{ asset('vendors/AdminLTE-3.1.0/dist/css/adminlte.min.css') }}" rel="stylesheet"> 
    <link href="{{ asset('css/backoffice/app.css') }}" rel="stylesheet"> 
</head> 
<body> 
    <div id="app" class="app-bo"> 
        <router-view></router-view> 
    </div> 
    <!-- Scripts --> 
    <script src="{{ asset('js/app.js') }}"></script> 
    <script src="{{ asset('vendors/AdminLTE-3.1.0/dist/js/adminlte.min.js') }}"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"></script>
</body> 
</html>