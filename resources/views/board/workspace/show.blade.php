{{-- @dd($toDos) --}}
@extends('layouts.main.main')

@section('content')

<a href="" class="btn btn-primary">add table</a>

@foreach ($tableNames as $tableName)
<div class="card mt-3 mb-2">
    <div class="card-header">
        <h5>{{ $tableName->table_name }}</h5>
    </div>
    <div class="card-body">
        <h6 class="card-title">Description :</h6>
        @if ($tableName->description == true)
            <p class="card-text">{{ $tableName->description }}</p>
        @else
            <p class="card-text">tidak ada deskripsi</p>
        @endif
        <a href="{{ $tableName->id_workspace}}/toDoList/{{ $tableName->table_name }}" class="btn btn-primary">check my list</a>
    </div>
</div>
@endforeach



@endsection