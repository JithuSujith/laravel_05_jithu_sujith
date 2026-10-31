<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Unifinished Hope</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{asset('style.css')}}">
  </head>
  <body>
    <header>
       <x-navbar />
    </header>
    <main>
       {{$slot}}
    </main>
       <x-footer />
  </body>
  </html>