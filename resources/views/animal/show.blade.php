@extends('layout.main')
@section('content')

    <h3 class="center">{{$animal->type}}</h3>
    <div>

        <div class="frame">
            <div class="content">
                <div>Имя: {{ $animal->name }}</div>
                <div>Тип: {{ $animal->type }}</div>
                <div>Возраст: {{ $animal->age }}</div>
                <div>Описание: {{ $animal->description }}</div>
                <div>
                    <a href="{{ route('animal.edit', $animal->id) }}">Изменить информацию о животном</a>
                </div>

            </div>
        </div>

        <div><a href="javascript:history.back()">Назад</a></div>
        <div><a href="{{ route('cage.index')}}">Вернуться на главную страницу</a></div>
    </div>

@endsection
