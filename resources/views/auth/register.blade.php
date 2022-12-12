<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">
    <title>Document</title>
</head>
<body>
<nav
      class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top" >
      <div class="container">
<img src="{{asset('assets/img/wonosobo.png')}}" class="logo" href="#">Rumahrafif.</img>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarText"
          aria-controls="navbarText"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-right" id="navbarText">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" href="{{route('warga.register')}}">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{route('warga.login')}}">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <br>
<div class="container-fluid banner banner-login">
<div class="login position-absolute top-50 start-50 translate-middle mt-1">
<div class="card register " style="width: 40rem;">
<form action="{{route('warga.store')}}" method="POST">
    {{csrf_field()}}
    <h2 class="text-center">Register</h2><br>
  <div class="mb-3">
    <label for="nama" class="form-label">Nama Lengkap</label>
    <input type="text" class="form-control" aria-describedby="emailHelp" name="nama">
    <div id="emailHelp" class="form-text">Masukan Nama Lengkap Anda.</div>
  </div>
  <div class="mb-3">
    <label for="nik" class="form-label">NIK</label>
    <input type="number" class="form-control"  aria-describedby="emailHelp" name="nik">
    <div id="emailHelp" class="form-text">Masukan Nomer Induk Kependudukan.</div>
  </div>
  <div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="textarea" class="form-control" aria-describedby="emailHelp" name="alamat">
    <div id="emailHelp" class="form-text">Masukan Alamat Lengkap Anda.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">Masukan Alamat Email Anda.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <p class="text-center">Sudah punya akun? silahkan <a href="{{route('warga.login')}}">Login</a>
</form>
</div>
</div>
</div>
</div>
<div class="container-fluid text-center pt-5 pb-5 footer1"></div>
    <div class="container-fluid text-center pt-5 pb-5 footer">
      All Rights Reserved &copy; 2022
    </div>
</body>
</html>