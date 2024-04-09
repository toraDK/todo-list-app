@extends('layouts.main.main')

@section('content')

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

<div class="row mb-5">
    <div class="col-md-12">
    <div class="card">
        <a href="/board/create" style="text-decoration: none; color: black">
        <div class="card-body text-center">
            <p class="card-text">Create Board</p>
            <i data-feather="plus" style="width: 20px; margin-right: 6px"></i>
        </div>
        </a>
    </div>
    </div>
</div>

<div class="row">
    {{-- <div class="col-md-3 mb-2">
        <div class="card">
            <a href="" style="text-decoration: none; color: white">
            <img src="https://images.unsplash.com/photo-1601236414929-677713b2d078?q=80&w=1890&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" style="height: 30%" class="card-img" alt="...">
            <div class="card-img-overlay">
            <h5 class="card-title">aaaaaaa</h5>
            </div>
            </a>
        </div>
        </div> --}}
    @foreach ($workspaces as $workspace)
    <div class="col-md-3 mb-2">
        <div class="card">
            <a href="workspace/{{ $workspace->workspace_name  }}" style="text-decoration: none; color: white">
            <img src="https://images.unsplash.com/photo-1601236414929-677713b2d078?q=80&w=1890&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" style="height: 30%" class="card-img" alt="...">
            <div class="card-img-overlay">
            <h5 class="card-title">{{ $workspace->workspace_name }}</h5>
            </div>
            </a>
        </div>
        </div>
    @endforeach
</div>

@endsection