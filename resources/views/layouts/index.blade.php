@extends('app')

{{--@section('title', ' - Главная')--}}

@section('content')
    <div class="container">
        <div class="row">
        {{-- Menu --}}
            <div class="col-3">
                <h3 class="text-primary bg-light">Главное меню</h3>
                <nav class="navbar navbar-expand-lg bg-light">
                    <div class="collapse navbar-collapse col-3">
                        <ul class="nav flex-column ">
                                @foreach($topics as $topic)
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('sounds.show', $topic->id)}}">{{$topic->name}}</a>
                                </li>
                                @endforeach
                        </ul>
                    </div>
                </nav>
            </div>

            {{-- Content --}}
            <div class="col-9">
                <div class="body-content">
                    <h3 class="text-primary bg-light">@yield('subtitle', '')</h3>
                    <div class="container mt-5 text-danger">
                        @yield('listSounds', 'Сборник звуков и аудио эффектов скачать бесплатно. Выберите категорию')
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

