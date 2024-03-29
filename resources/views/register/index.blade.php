@extends('layouts.index.index')

@section('content')

    <div class="mb-10">
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
    </div>

<main class="form-signin">
    <form>

    <div class="form-floating">
        <input type="email" class="form-control " id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput" style="color: black;">Email address</label>
    </div>
    <div class="form-floating mt-2">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword" style="color: black;" >Password</label>
    </div>
    <div class="form-floating mt-2">
        <input type="passwordConfirm" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword" style="color: black;" >Confirm password</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary mt-3 mb-2" type="submit">Sign in</button>

    <p>already have account <a href="/login">login</a> here</p>
    </form>
</main>
@endsection