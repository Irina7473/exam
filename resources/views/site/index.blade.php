@extends('app')

@section('title', ' - Главная')

@section('content')
    <div class="container mt-5">
        <div class="row">
            {{-- Sidebar --}}
            <div class="col-3">
                <h3 class="text-primary">Главное меню</h3>
                <ul class="list-group">
                    @foreach($topics as $topic)
                        <li class="list-group-item">
                            <a href="#">{{$topic->name}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Content --}}
            <div class="col-9">
                <div class="body-content text-info">
                    <h2>Сборник звуков и аудио эффектов скачать бесплатно</h2>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
@endsection

