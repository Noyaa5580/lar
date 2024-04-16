@extends('layout')

@section('title')
    {{ $data->subject }}
@endsection

@section('main-content')
    <h1>{{ $data->subject }}</h1>
    <div class="alert alert-success">
        <p><small>{{ $data->email }}</small></p>
        <p class="alert alert-warning">{{ $data->message }}</p>
        <div class="d-flex p-2 align-items-center gap-2">
            <a href="{{ route('review-up', $data->id) }}"><button type="button" class="btn btn-primary">Редактировать</button></a>
            <a href="{{ route('review-del', $data->id) }}"><button type="button" class="btn btn-danger ml-5">удалить</button></a>
        </div>
    </div>
@endsection
