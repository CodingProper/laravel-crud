
@extends('layouts.app')

@section('title', 'Добавить пост')

@section('content')
    <div class="row">
        <div class="col-lg-6 mx-auto">
    <form method="POST" action="{{route('posts.store')}}">
        @csrf
        <div class="form-group">
            <label for="post-title">Название</label>
            <input type="text" name="title" class="form-control" id="post-title">
        </div>

        <div class="form-group">
            <label for="post-description">Описание</label>
            <textarea class="form-control" name="description" id="post-description" rows="3"></textarea>
        </div>

        <div class="form-group">
            <label for="post-price">Цена</label>
            <input type="text" class="form-control" name="price" id="post-price" >
        </div>
        <button type="submit" class="btn btn-success">Добавить пост</button>
    </form>
        </div>
    </div>
@endsection
