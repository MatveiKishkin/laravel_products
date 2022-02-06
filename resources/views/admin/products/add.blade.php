@extends('layouts.app')

@section('content')
<form action="{{ route('products.store') }}" method="post">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Название товара</strong>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Товат</strong>
                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ old('title') }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ЧПУ</strong>
                <input type="text" name="slug" class="form-control" placeholder="Slug" value="{{ old('slug') }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Описание</strong>
                <input type="text" name="content" class="form-control" placeholder="Content" value="{{ old('content') }}">
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </div>
</form>
@endsection