@extends('app')

@section('title', ' - Новая категория')

@section('content')

    <div class="container mt-5">
        {{--{!! Form::open (['url' => '/topics/create', 'method' => 'POST']) !!}
        {!! Form::text('name', null, array_merge( [ 'class' => 'form-control', 'placeholder' => 'Название категории'])) !!}
        {!! Form:: submit('Добавить',['class'=> 'btn btn-primary']) !!}
        {!! Form::close() !!}--}}

        <form action="{{route('topics.store')}}" method="POST">
            @csrf
            <div class="input-group mb-3">
                <input type="text" name="name" class="form-control" placeholder="Новая категория"
                       aria-label="Новая категория"   value="{{old('name')}}">
            </div>
            @error('name')
            <small class="d-block alert alert-danger">Ошибка в заполнении : {{ $message }}</small>
            @enderror

            <button class="input-group-text" id="basic-addon2">Добавить</button>
        </form>

    </div>

@endsection


