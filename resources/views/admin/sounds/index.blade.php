@extends('app')

@section('title', ' - Все звуки')

@section('content')

    <div class="container mt-5">
        <div class="d-flex justify-content-end">
            <a href="{{route('sounds.create')}}" class="btn btn-primary">Добавить новый звук</a>
        </div>

        @if($sounds->count() > 0)

            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Категория</th>
                    <th>Наименование</th>
                    <th>Звук</th>
                    <th>Действие</th>
                </tr>
                </thead>
                <tbody>
                @foreach($sounds as $sound)
                    <tr>
                        <td>{{$sound->id}}</td>
                        <td>{{$sound->topic->name}}</td>
                        <td>{{$sound->title}}</td>
                        <td>###</td>
                        <td>
                            <a href="{{route('sounds.edit', $sound->id)}}" class="text-info">Редактировать</a>
                            <form action="{{route('sounds.destroy', $sound->id)}}" method="POST">
                                @csrf @method('DELETE')
                                <button type="submit" name="submit" class="d-inline text-danger">Удалить</button>
                            </form>

                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>

        @else
            <div class="alert alert-info">
                <h3>Записей не найдено</h3>
            </div>
        @endif

    </div>

@endsection




