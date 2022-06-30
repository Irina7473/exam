<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Каталог звуков</title>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">

</head>
<body>

{{-- Header --}}
<header>
    <div class="container">
        <a href="/"><h2 class="text-primary">Каталог звуков @yield('title')</h2></a>
    </div>
</header>

{{-- Menu --}}
@include('layouts.menu')

<section class="main-container">
    @yield('content')
</section>

<footer class="mt-5">
    <div class="container bg-light">
        <hr>
        <p>2022 Exam PHP Laravel</p>
        <p>Сиренко И.А.</p>
    </div>
</footer>


<script src="{{ asset('assets/js/bootstrap.js') }}"></script>
</body>
</html>



