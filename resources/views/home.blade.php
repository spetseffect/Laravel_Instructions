@extends('layouts.layout-main')

@section('content')
    <div class="row">
        <div class="col-6">
            <h1>Инструкции</h1>
        </div>
        <div class="col-4">
            <label for="search">&nbsp;</label>
            <input type="text" class="form-control" id="search" placeholder="Поиск по названию или устройству...">
        </div>
        <div class="col-2">
            <label for="searchbtn">&nbsp;</label>
            <input type="button" class="btn btn-success" id="searchbtn" value="Найти">
        </div>
    </div>
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Название</th>
                    <th>Файл</th>
                    <th>Статус</th>
                    <th>Автор</th>
                    <th>Обновлено</th>
                    <th>Устройство</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <a class="btn btn-warning" href="#">Изменить</a>
                        <a class="btn btn-danger" href="#">Удалить</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
