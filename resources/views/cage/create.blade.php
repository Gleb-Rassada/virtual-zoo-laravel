@extends('layout.main')
@section('content')
    <h3 class="center">Введите данные клетки</h3>
    <form action="{{route('cage.store')}}" method="post">
        @csrf
        <div class="form-content">
            <input type="text" name="tablet" placeholder="Табличка" value="{{old('tablet')}}">
            @error('tablet')
            <div>{{$message}}</div>
            @enderror
        </div>
        <div class="form-content">
            <input type="text" name="capacity" placeholder="Вместимость" value="{{old('capacity')}}">
            @error('capacity')
            <div>{{$message}}</div>
            @enderror
        </div>
        <div
            style="margin-bottom: 15px"><input type="submit" value="Добавить">
        </div>

    </form>
    <div><a href="{{ route('cage.index')}}">Назад</a></div>

@endsection
