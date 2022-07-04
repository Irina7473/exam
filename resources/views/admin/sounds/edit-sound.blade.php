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

        <form action="{{route('sounds.update', $sounds->id)}}" method="POST" enctype="multipart/form-data" >
            @csrf  @method('PUT')
            <div class="input-group mb-3">
                <select name="topic" class="form-select">
                    <option value="">Выберите категорию</option>
                    @foreach($topics as $topic)
                        <option value="{{$topic->id}}">{{$topic->name}}</option>
                    @endforeach
                </select>
            </div>

            @error('topic')
            <small class="d-block alert alert-danger">Ошибка в заполнении : {{ $message }}</small>
            @enderror

            <div class="input-group mb-3">
                <input type="text" name="title" class="form-control" aria-describedby="basic-addon2"
                       value="{{$sounds->title}}">
            </div>

            <div class="input-group mb-3" >
                <textarea name="content" class="form-control" >{{$sounds->content}}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Загружен звук: {{$sounds->getFile()}}</label>
                <audio id="audio_load" src="/{{$sounds->file_path}}" controls></audio>
                <pre id="display_samples"></pre>
                <input type="file" name="file_path" class="form-control">
            </div>

            <button class="input-group-text" id="basic-addon2">Изменить</button>
        </form>

    </div>

@endsection






