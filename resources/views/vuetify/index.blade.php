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
</head> 
<body> 
    <div id="app" class="app-vuetify"> 
        <vuetify-app></vuetify-app>
    </div> 
    <!-- Scripts --> 
    <script src="{{ asset('js/vuetify.js') }}"></script> 
</body> 
</html>