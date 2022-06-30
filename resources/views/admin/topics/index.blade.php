@extends('app')

@section('title', ' - Все категории звуков')

@section('content')

    <div class="container mt-5">
        <div class="d-flex justify-content-end">
            <a href="{{route('topics.create')}}" class="btn btn-primary">Добавить новую категорию</a>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Наименование</th>
                <th>Действие</th>
            </tr>
            </thead>
            <tbody>
            @foreach($topics as $topic)
                <tr>
                    <td>{{$topic->id}}</td>
                    <td>{{$topic->name}}</td>
                    <td>
                        <a href="{{ route('topics.edit', $topic->id) }}" class="text-info">Редактировать</a>
                        <form action="{{ route('topics.destroy', $topic->id) }}" method="POST">
                            @csrf @method('DELETE')
                            <button type="submit" name="submit" class="d-inline text-danger">Удалить</button>
                        </form>

                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>


    </div>

@endsection



