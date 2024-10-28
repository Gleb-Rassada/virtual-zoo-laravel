@extends('layout.main')
@section('content')
    <div class="center" style="margin-bottom: 20px">{{$message}}</div>
    <div class="center"><a href="javascript:history.back()">Назад</a></div>
    <div class="center"><a href="{{ route('cage.index')}}">Вернуться на главную страницу</a></div>
@endsection
