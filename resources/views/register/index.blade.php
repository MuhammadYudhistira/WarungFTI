@extends("layout.template")
@section('title', 'Register | WarungFTI')
@section("content")
<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form">
            <h1 class="h3 mb-3 fw-normal text-center">Registrasi akun</h1>
            <form action="/register" method="post">
                @csrf
              <div class="form-floating">
                <input type="text" name="name" class="form-control" id="name" placeholder="nama">
                <label for="name ">Nama</label>
                @error('name')
                  <div class="invalid-feedback">
                    {{  $message  }}
                  </div>
                @enderror
              </div>
              <div class="form-floating mt-3">
                <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                <label for="username">Username</label>
                @error('username')
                  <div class="invalid-feedback">
                    {{  $message  }}
                  </div>
                @enderror
              </div>
              <div class="form-floating mt-3">
                <input type="text" name="no_hp" class="form-control" id="no_hp" placeholder="no_hp">
                <label for="no_hp">No. HP</label>
                @error('no_hp')
                  <div class="invalid-feedback">
                    {{  $message  }}
                  </div>
                @enderror
              </div>
              <div class="form-floating mt-3">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                <label for="passsword">Password</label>
                @error('password')
                  <div class="invalid-feedback">
                    {{  $message  }}
                  </div>
                @enderror
              </div>
              <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Create account</button>
            </form> 
            <small>Sudah punya akun? <a href="/login">Login</a></small>
          </main>
    </div>
</div>
@endsection