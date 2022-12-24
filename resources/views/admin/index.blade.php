@include('template/sidebar')
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
    <div class="container-admin container-fluid banner banner2">
        <div class="d-flex justify-content-end py-4">
            <div class="content-admin text-center">
            <h2 class="display-2">Selamat Datang </h2>
            <h1>Di Halaman Admin Layanan Desa Kramatan</h1>
            <br>
            <br>
            <br>
                <div class="container text-center">
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
</body>
</html>