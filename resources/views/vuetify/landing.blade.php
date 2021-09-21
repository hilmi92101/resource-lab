<!DOCTYPE html> 
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> 
<head> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <!-- CSRF Token --> 
    <meta name="csrf-token" content="{{ csrf_token() }}"> 
    <title>{{ config('app.name', 'Laravel') }}</title> 
     
    <!-- Fonts --> 
    <!-- 
    <link rel="dns-prefetch" href="//fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> 
     -->

    <!-- Styles --> 
    <link href="{{ asset('css/vuetify/app.css') }}?v={{ mt_rand() }}" rel="stylesheet"> 
</head> 
<body> 
    <div id="app" class="app-vuetify-landing"> 
        <router-view></router-view>  
    </div> 
    <!-- Scripts --> 
    <script src="{{ asset('js/vuetify.js') }}?v={{ mt_rand() }}"></script> 
</body> 
</html>