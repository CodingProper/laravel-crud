
@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <table class="table table-striped">
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
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td class="table-buttons">
                <a href="#" class="btn btn-success">
                    <i class="fa-solid fa-face-laugh-beam">input</i>
                </a>
                <a href="#" class="btn btn-primary">
                    <i class="fa-solid fa-pen-to-square">edit</i>
                </a>
                <form method="POST" action=""></form>
                <button type="submit" href="#" class="btn btn-danger">
                    <i class="fa fa-trash">delete</i>
                </button>
            </td>
        </tr>

        </tbody>
    </table>
@endsection
