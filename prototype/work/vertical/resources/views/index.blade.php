<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="discription" content="【ポートフォリオサイト】VerticalPhotoは縦型写真の共有サービスです">
        <link rel="shortcut icon" href="{{asset('./assets/favicon/favicon.png')}}" type="=”image/x-icon" />
             <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Roboto+Serif:ital,opsz,wght@0,8..144,100..900;1,8..144,100..900&family=Sue+Ellen+Francisco&family=Ubuntu:ital,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
        <title>{{ config('app.name')}}</title>

                <!-- script  -->
        @vite(['resources/css/app.css', 'resources/sass/style.scss', 'resources/js/app.js'])
    </head>
    <body>
        <div id="app">

        <div>
    </body>
</html>
