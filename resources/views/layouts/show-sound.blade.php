@extends('layouts.index')

{{--@section('subtitle', $sounds->topicTitle($topic->id)->name)--}}

@section('listSounds')
@parent
<div>
    <div class="container mt-5">
        @if($sounds->count() > 0)


            <table class="table">
                <thead>
                <tr>
                    <th>Наименование</th>
                    <th>Описание</th>
                    <th>Прослушать</th>
                </tr>
                </thead>
                <tbody>
                @foreach($sounds as $sound)
                    <tr>
                        <td>{{$sound->title}}</td>
                        <td>{{$sound->content}}</td>
                        <td>
                            <div><audio id="audio_load" src="/{{$sound->file_path}}" controls></audio></div>
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
</div>

@endsection







