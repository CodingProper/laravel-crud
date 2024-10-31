
@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <a href="{{route('posts.create')}}" class="btn btn-success">Создать пост</a>

    <table class="table table-striped mt-3" >
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Название</th>
            <th scope="col">Описание</th>
            <th scope="col">Цена</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
        <tr>
            <th scope="row">{{$post->id}}</th>
            <td>{{$post->title}}</td>
            <td>{{$post->description}}</td>
            <td>{{$post->price}}</td>
            <td class="table-buttons">
                <a href="{{route('posts.show', $post)}}" class="btn btn-success">
                    <i class="fa-solid fa-face-laugh-beam">input</i>
                </a>
                <a href="{{route('posts.edit', $post)}}" class="btn btn-primary">
                    <i class="fa-solid fa-pen-to-square">edit</i>
                </a>
                <form method="POST" action=""></form>
                <button type="submit" href="#" class="btn btn-danger">
                    <i class="fa fa-trash">delete</i>
                </button>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
