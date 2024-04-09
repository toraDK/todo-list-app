{{-- @dd($toDos) --}}
@extends('layouts.main.main')

@section('content')

<table class="table">
    @foreach ($tableNames as $tableName)
    <tr>
        <th>{{ $tableName->table_name }}</th>
    </tr>
    @endforeach
</table>

@endsection