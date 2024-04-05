<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>to do list | {{ $title }}</title>
  <script src="https://unpkg.com/feather-icons"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

  <header class="navbar-fixed-top">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container">
        <div class="container-fluid d-flex justify-content-evenly">
          <div class="logo justify-content-center navbar-nav">
            <a class="navbar-brand" href="#">Navbar</a>
          </div>
          <div class="navbar-list flex-grow-1 " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-center">
              <li class="nav-item mx-4">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item mx-4">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown mx-4">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item mx-4">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li>
            </ul>
          </div>
          <div class="user">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Welcome | User
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <div class="container mt-4">
    <div class="container-fluid">

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
            {{-- @foreach ($workspaces as $workspace)
              <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-start">
                <li class="nav-item">
                
                <a class="nav-link" href="#"><i data-feather="clipboard" style="width: 20px; margin-right: 6px"></i>{{ $workspace->workspace_name }}</a>
                </li>
              </ul>
            @endforeach --}}
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-start">
              <li class="nav-item">
              
              <a class="nav-link" href="#"><i data-feather="clipboard" style="width: 20px; margin-right: 6px"></i>dsaohdisufjo</a>
              </li>
            </ul>
            </div>
        </nav>
        </aside>

      <div class="content col">
        @yield('content')
      </div>
    </div>

    </div>
  </div>
  
  <script>
    feather.replace();
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>