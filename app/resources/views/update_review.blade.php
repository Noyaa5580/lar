@extends('layout')

@section('title')
    Обновление записи
@endsection

@section('main-content')
<form method="post" action="{{route('save-update', $data->id)}}">
    @csrf
    <input type="email" name="email" id="email" value="{{$data->email}}" placeholder="E-mail" class="form-control mt-5 mb-3">
    <input type="text" name="subject" id="subject" value="{{$data->subject}}" placeholder="Тема сообщения" class="form-control mb-3">
    <input type="textarea" name="message" id="message" value="{{$data->message}}" placeholder="введите сообщение" class="form-control  mb-4">
    <button type="submit" class="btn btn-primary">Обновить</button>
</form>
@endsection