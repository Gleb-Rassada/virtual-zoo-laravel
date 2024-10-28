@extends('layout.main')
@section('content')
    <h3 class="center">Введите изменённые данные клетки</h3>
    <form action="{{route('cage.update', $cage->id)}}" method="Post">
        @csrf
        @method('Patch')
        <div class="form-content">
            <input type="text" name="tablet" placeholder="Табличка" value="{{old('tablet') ?? $cage->tablet}}">
            @error('tablet')
            <div>{{$message}}</div>
            @enderror
        </div>
        <div class="form-content">
            <input type="text" name="capacity" placeholder="Вместимость" value="{{old('capacity') ?? $cage->capacity}}">
            @error('capacity')
            <div>{{$message}}</div>
            @enderror
        </div>
        <input type="submit" value="Сохранить">


    </form>
    <div><a href="{{ route('cage.index')}}">Назад</a></div>
@endsection
