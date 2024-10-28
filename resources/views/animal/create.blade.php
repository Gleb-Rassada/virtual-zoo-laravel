@extends('layout.main')
@section('content')

    <h3 class="center">Введите данные животного</h3>
    <form action="{{route('animal.store',$id)}}" method="post">
        @csrf
        <div class="form-content">
            <input type="text" name="name" placeholder="Имя" value="{{old('name')}}">
            @error('name')
            <div>{{$message}}</div>
            @enderror
        </div>
        <div class="form-content">
            <input type="text" name="type" placeholder="Вид" value="{{old('type')}}">
            @error('type')
            <div>{{$message}}</div>
            @enderror
        </div>
        <div class="form-content">
            <input type="number" name="age" placeholder="Возраст" value="{{old('age')}}">
            @error('age')
            <div>{{$message}}</div>
            @enderror
        </div>
        <div class="form-content">
            <input type="text" name="description" placeholder="Описание" value="{{old('description')}}">
            @error('description')
            <div>{{$message}}</div>
            @enderror
        </div>
        <div style="margin-bottom: 15px"><input type="submit" value="Добавить"></div>
    </form>
    <div><a href="javascript:history.back()">Назад</a></div>
    <div><a href="{{ route('cage.index')}}">Вернуться на главную страницу</a></div>

@endsection
