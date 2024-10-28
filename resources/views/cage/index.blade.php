@extends('layout.main')
@section('content')

    <h2 class="center">В зоопарке на данный момент в зоопарке проживают {{$number_of_animals}} животных!</h2>
    <h3 class="center">Клетки</h3>
    <div>
        <a class="font-bigger" href="{{ route('cage.create') }}">Добавить клетку</a>
    </div>
    <div class="flex-container">
        @foreach($cages as $cage)
            <div class="frame-dashed  ">
                <div class="content">
                    <div>№{{ $cage->id }} - {{ $cage->tablet }}</div>
                    <div>Вместимость клетки: {{$cage->capacity}}</div>
                    <div>Количество животных: {{ $cage->number_of_animals }}</div>
                    <div><a href="{{ route('cage.show', $cage) }}">Посмотреть животных</a></div>
                    <div><a href="{{ route('cage.edit', $cage) }}">Изменить клетку</a></div>
                    <div>
                        <form action="{{ route('cage.delete', $cage->id) }}" method="post">
                            @csrf
                            @method('Delete')
                            <input type="submit" value="Удалить клетку">
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
