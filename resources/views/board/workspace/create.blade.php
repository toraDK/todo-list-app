@extends('layouts.main.main')

@section('content')

    

    <h1>Tambah Workspace</h1>

    <form method="POST" action="/board">
        <div class="mb-3">
            <input type="text" name="user_id" value="1" hidden>
            @csrf
            <div class="col-md-12">
                <label for="workspace_name" class="form-label">judul workspace</label>
                <input type="title" class="form-control" id="workspace_name" name="workspace_name">
    
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection