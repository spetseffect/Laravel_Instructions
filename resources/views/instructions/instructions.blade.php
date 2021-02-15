@extends('home')

@section('instructions')
    <div class="row">
        <a class="btn btn-info" href="{{ route('instruct.create') }}">Загрузить новую инструкцию</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Название</th>
                    <th>Статус</th>
                    <th>Автор</th>
                    <th>Обновлено</th>
                    <th>Устройство</th>
                    <th>Действия</th>
                </tr>
            </thead>
            <tbody>
            @foreach($instr as $i)
                <tr>
                    <td>{{$i->id}}</td>
                    <td>{{$i->name}}</td>
                    <td>{{$i->status}}</td>
                    <td>{{$i->author}}</td>
                    <td>{{$i->updated}}</td>
                    <td>{{$i->device}}</td>
                    <td>
                        <a class="btn btn-success" href="/inst-files/{{$i->file}}" title="Скачать" download>&dArr;</a>
                        <a class="btn btn-warning" href="#" title="Изменить">&#9998;</a>
                        <a class="btn btn-danger" href="#" title="Удалить">&#10008;</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
