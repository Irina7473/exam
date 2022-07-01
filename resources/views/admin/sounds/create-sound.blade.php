@extends('app')

@section('title', ' - Новый звук')

@section('content')

    <div class="container mt-5">


        <form action="{{route('sounds.store')}}" method="POST" enctype="multipart/form-data" >
            @csrf
            <div class="input-group mb-3">
                <select name="topic" class="form-select">
                    <option value="">Выберите категорию</option>
                    @foreach($topics as $topic)
                        <option value="{{$topic->id}}">{{$topic->name}}</option>
                    @endforeach
                </select>
                {{--  <input type="text" name="topic" class="form-control" placeholder="Название топика"
                         aria-label="Новая категория"  value="{{old('name')}}">--}}
            </div>

            @error('topic')
            <small class="d-block alert alert-danger">Ошибка в заполнении : {{ $message }}</small>
            @enderror

            <div class="input-group mb-3">
                <input type="text" name="title" class="form-control" placeholder="Название звука">
            </div>

            <div class="input-group mb-3" >
                <textarea name="content" class="form-control" placeholder="Описание"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Загрузка звука</label>
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>

                <input type="file" name="file_path" class="form-control">
            </div>

            <button class="input-group-text" id="basic-addon2">Добавить</button>
        </form>

    </div>


@endsection



