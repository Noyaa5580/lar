@extends('layout')

@section('title')
    Отзывы
@endsection

@section('main-content')
    <h1>Форма добавления отзыва</h1>
    <form method="post" action="/review/check">
        @csrf
        <input type="email" name="email" id="email" placeholder="E-mail" class="form-control mt-5 mb-3">
        <input type="text" name="subject" id="subject" placeholder="Тема сообщения" class="form-control mb-3">
        <input type="textarea" name="message" id="message" placeholder="введите сообщение" class="form-control  mb-4">
        <button type="submit" class="btn btn-success">Отправить</button>
    </form>
    @if ($errors->any())
        <div class="alert alert-danger mt-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h1>Все отзывы</h1>
    @foreach ($reviews as $el)
        <div class="alert alert-success">
            <h3>{{ $el->subject }}</h3>
            <div class="alert alert-warning">
                <h4>{{ $el->message }}</h4>
            </div>
            <div class="d-flex p-2 align-items-center">
                <h5>{{ $el->email }}</h5> 
                <a href="{{route('review-id', $el->id)}}"><button type="button" class="btn btn-success">Детальнее</button></a>
            </div>
        </div>
    @endforeach
@endsection
