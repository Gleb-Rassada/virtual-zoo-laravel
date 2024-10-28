@extends('layout.main')
@section('content')

    <div >
        <h3 class="center">Клетка: {{ $cage->tablet }}</h3>
        <div>
            <a class="font-bigger" href="{{ route('animal.create', $cage->id) }}">Добавить животное</a>
        </div>
        <div class="flex-container">
        @foreach($animals as $animal)
            <div class="frame">
                <div class="content">
                    <div>Имя: {{ $animal->name }}</div>
                    <div>Вид: {{ $animal->type }}</div>
                    <div>
                        <a href="{{ route('animal.show', $animal) }}">Посмотреть подробную информацию о животном</a>
                    </div>
                    <div>
                        <form action="{{ route('animal.delete', $animal->id) }}" method="post">
                            @csrf
                            @method('Delete')
                            <input type="submit" value="Удалить животное">
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
        <div>
            <a href="{{ route('cage.index') }}">Назад</a>
        </div>
    </div>

@endsection
