@extends('layouts.index.index')

@section('content')

    <div class="mb-10">
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
    </div>

<main class="form-signin">
    <form>

    <div class="form-floating">
        <input type="email" class="form-control " id="floatingInput" placeholder="name@example.com" name="email">
        <label for="floatingInput" style="color: black;">Email address</label>
    </div>
    <div class="form-floating mt-2">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
        <label for="floatingPassword" style="color: black;" >Password</label>
    </div>

    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Remember me
        </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary mb-2" type="submit">Sign in</button>

        <p>don't have account <a href="/register">register</a> here</p>
    </form>
</main>
@endsection