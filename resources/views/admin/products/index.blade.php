@extends('layouts.app')

@section('content')
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">Идентификатор</th>
                <th scope="col">Название товара</th>
                <th scope="col">ЧПУ</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id}}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->slug }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection