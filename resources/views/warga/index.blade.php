@include('template/header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">
    <title>Beranda</title>
</head>
<body>
    <!-- banner -->
    <div class="container-fluid banner banner-size">
      <div class="container text-center">
        <h4 class="display-6">Selamat Datang "
          @if(Auth::guard('user')->user())
        {{Auth::guard('user')->user()->nama}}
    @else

    @endif
     " di Website Layanan Administrasi</h4>
        <h3 class="display-1">Desa Kramatan</h3>
        <a href="#layanan">
          <button type="button" class="btn btn-danger btn-lg">
            Cek Layanan
          </button>
        </a>
      </div>
    </div>
    <!-- layanan -->
    <div class="container-fluid layanan pt-5 pb-5">
      <div class="container text-center">
        <h2 class="display-3" id="layanan">Layanan</h2>
        <p>
          Untuk memudahkan masyarakat dalam melakukan proses administrasi
        </p>
        <div class="row pt-4">
          <div class="col-md-4">
            <img src="{{asset('assets/img/ktp.png')}}" alt="" class="dok-img" >
            <h3 class="mt-3">KTP</h3>
            <p>
                Pelayananan KTP
            </p>
          </div>

          <div class="col-md-4">
           <img src="{{asset('assets/img/kk.png')}}" alt="" class="dok-img" >
            <h3 class="mt-3">KK</h3>
            <p>
              Pelayanan KK
            </p>
          </div>

          <div class="col-md-4">
            <img src="{{asset('assets/img/sku.png')}}" alt="" class="dok-img" >
            <h3 class="mt-3">SKU</h3>
            <p>
              Pelayanan SKU
            </p>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="container-fluid text-center pt-5 pb-5 footer">
      All Rights Reserved &copy; 2021
    </div>
</body>
</html>