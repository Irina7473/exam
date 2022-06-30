@extends('app')

@section('title', ' - Редактирование категории ')

@section('content')

    <div class="container mt-5">
        <h3>{{'Редактирование категории - '.$topic->name}}</h3>

        @if(session('errors'))
            <div class="alert alert-danger">
                @foreach(session('errors')->all() as $error)
                    {{$error}}<br>
                @endforeach
            </div>
        @endif

        <form action="{{route('topics.update', $topic->id)}}" method="POST">
            @csrf  @method('PUT')
            <div class="input-group mb-3">
                <input type="text" name="name" class="form-control" placeholder="Новая категория"
                       aria-label="Новая категория" aria-describedby="basic-addon2" value="{{$topic->name}}">
                <button class="input-group-text" id="basic-addon2">Изменить</button>
            </div>
        </form>

    </div>

@endsection


