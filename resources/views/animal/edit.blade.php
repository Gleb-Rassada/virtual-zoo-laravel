@extends('layout.main')
@section('content')
    <h3 class="center">Введите изменённые данные животного</h3>
    <form action="{{route('animal.update', $animal->id)}}" method="Post">
        @csrf
        @method('Patch')
        <div>
            <div class="form-content"><input type="text" name="name" placeholder="Имя"
                                             value="{{ old('name') ?? $animal->name}}">
                @error('name')
                <div>{{$message}}</div>
                @enderror
            </div>
            <div class="form-content">
                <input type="text" name="type" placeholder="Вид" value="{{old('type') ?? $animal->type}}">
                @error('type')
                <div>{{$message}}</div>
                @enderror
            </div>
            <div class="form-content">
                <input type="number" name="age" placeholder="Возраст" value="{{old('age') ?? $animal->age}}">
                @error('age')
                <div>{{$message}}</div>
                @enderror
            </div>
            <div class="form-content">
                <input type="text" name="description" placeholder="Описание"
                       value="{{old('description') ?? $animal->description}}">
                @error('description')
                <div>{{$message}}</div>
                @enderror
            </div>
        </div>

        <div>
            <input type="submit" value="Сохранить">
        </div>
    </form>

    <div><a href="javascript:history.back()">Назад</a></div>
    <div><a href="{{ route('cage.index')}}">Вернуться на главную страницу</a></div>
@endsection
