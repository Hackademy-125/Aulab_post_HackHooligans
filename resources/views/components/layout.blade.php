<!DOCTYPE html>
<html lang="en">

<head>
    {{-- ICONE DI FONTAWESOME --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>The Aulab Post</title>
</head>

<body>

    <x-nav />
    <div class="100vh">
        {{$slot}}

    </div>

    <x-footer></x-footer>


</body>

</html>