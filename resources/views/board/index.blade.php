@extends('layouts.main.main')

@section('content')
<div class="row">
    <aside class="col-3">
    <nav>
        <div>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-start">
            <li class="nav-item">
            <a class="nav-link" href="#"><i data-feather="layout" style="width: 20px; margin-right: 6px"></i>Board</a>
            </li>
        </ul>
        
        <hr>
        <h6 class="mt-4 text-muted">
            <span>MY WORKSPACE</span>
        </h6>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-start">
            <li class="nav-item">
            
            <a class="nav-link" href="#"><i data-feather="clipboard" style="width: 20px; margin-right: 6px"></i>My-Proyek</a>
            </li>
        </ul>
        </div>
    </nav>
    </aside>
    <div class="content col">
    <div class="row mb-5">
        <div class="col-md-12">
        <div class="card">
            <a href="" style="text-decoration: none; color: black">
            <div class="card-body text-center">
                <p class="card-text">Create Board</p>
                <i data-feather="plus" style="width: 20px; margin-right: 6px"></i>
            </div>
            </a>
        </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-3 mb-2">
        <div class="card">
            <a href="" style="text-decoration: none; color: white">
            <img src="https://images.unsplash.com/photo-1601236414929-677713b2d078?q=80&w=1890&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" style="height: 30%" class="card-img" alt="...">
            <div class="card-img-overlay">
            <h5 class="card-title">My-Proyek</h5>
            </div>
            </a>
        </div>
        </div>
    </div>
    </div>
</div>
@endsection