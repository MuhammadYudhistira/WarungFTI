@extends("layout.auth")
@section('title', 'Login | WarungFTI')
@section("content")
<div class="row justify-content-center">
    <div class="col-md-5">
      @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

      @if (session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
            <form action="/login" method="post">
              @csrf
              <div class="form-floating mt-3">
                <input type="text" name="username" class="form-control" id="username" placeholder="Username" autofocus required>
                <label for="username">Username</label>
              </div>
              <div class="form-floating mt-3">
                <input type="password" name=password" class="form-control" id="password" placeholder="Password" required>
                <label for="passsword">Password</label>
              </div>
              <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button>
            </form>
            <small>Belum punya akun? <a href="/register">Create account</a></small>
          </main>
    </div>
</div>
@endsection
