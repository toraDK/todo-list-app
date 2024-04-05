@dd($toDos)
@extends('layouts.main.main')

@section('content')

<table class="table">
    @foreach ($tableNames as $tableName)
    <tr>
        <th>{{ $tableName->table_name }}</th>
    </tr>
    {{-- @if (isset($toDos[$tableName->id])) --}}
        @foreach ($toDos as $toDo)
        <tr>
            <td>{{ $toDo->judul}}</td>
            <td>Deskripsi :{{ $toDo->description}}</td>
        </tr>
        @endforeach
    {{-- @endif --}}
    @endforeach
</table>

@endsection