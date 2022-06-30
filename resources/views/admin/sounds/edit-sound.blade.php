@extends('app')

@section('title', ' - Редактирование звука ')

@section('content')

    <div class="container mt-5">
        <h2>{{'Редактирование - '.$sounds->title}}</h2>

        @if(session('errors'))
            <div class="alert alert-danger">
                @foreach(session('errors')->all() as $error)
                    {{$error}}<br>
                @endforeach
            </div>
        @endif

        <form action="{{route('sounds.update', $sounds->id) }}" method="POST">
            @csrf  @method('PUT')
            <div class="input-group mb-3">
                <select name="topic" class="form-select">
                    <option value="">Выберите категорию</option>
                    @foreach($topics as $topic)
                        <option value="{{$topic->id}}">{{$topic->name}}</option>
                    @endforeach
                </select>

                <input type="text" name="title" class="form-control" aria-describedby="basic-addon2"
                       value="{{$sounds->title}}">
                <button class="input-group-text" id="basic-addon2">Изменить</button>
            </div>
        </form>

    </div>

@endsection




