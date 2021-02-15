@extends('layouts.layout-main')

@section('title','Новая инструкция')

@section('content')
    <div class="row">
        <h1>Добавить новую инструкцию</h1>
        <div class="col-4 offset-4">
            <form enctype="multipart/form-data" action="{{route('instruct.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Название</label>
                    <input type="text" class="form-control" name="name" id="name"/>
                </div>
                <div class="form-group">
                    <label for="description">Описание</label>
                    <input type="text" class="form-control" name="description" id="description"/>
                </div>
                <div class="form-group">
                    <label for="device">Описание</label>
                    <input type="text" class="form-control" name="device" id="device"/>
                </div>
                <div class="form-group">
                    <label for="name">Файл</label>
                    <input type="file" class="form-control btn" name="file"/>
                </div>
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </form>
        </div>
    </div>
@endsection
