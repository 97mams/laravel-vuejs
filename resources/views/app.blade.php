<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @vite(['resources/css/app.css'])
    @vite(['resources/js/app.ts'])
    @inertiaHead
</head>

<body class="with-full h-screen" id="App">
    @inertia
</body>

</html>