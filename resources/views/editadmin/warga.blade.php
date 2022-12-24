@include('template/sidebar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">
    <title>Admin KTP</title>
</head>
<body>
    <div class="container-admin container-fluid">
        <div class="d-flex justify-content-end py-4 content-admin">
            <div class="content-admin d-flex flex-column gap-4">
                <div class="title">
                    <h1>Admin Warga</h1>
                </div>
                    <div class="login position-absolute top-50 start-50 translate-middle mt-1">
                    <div class="card register " style="width: 40rem;">
                    <form action="{{route('warga.store')}}" method="POST">
                        {{csrf_field()}}
                        <h2 class="text-center">Edit Data Warga</h2><br>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" aria-describedby="emailHelp" name="nama" value="{{$data->nama}}" placeholder="Masukan Nama Lengkap">
                    </div>
                    <div class="mb-3">
                        <label for="nik" class="form-label">NIK</label>
                        <input type="number" class="form-control"  aria-describedby="emailHelp" name="nik" value="{{$data->nik}}" placeholder="Masukan NIK">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="textarea" class="form-control" aria-describedby="emailHelp" name="alamat" value="{{$data->alamat}}" placeholder="Masukan Alamat Lengkap">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{$data->email}}" placeholder="Masukan Alamat Email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Masukan Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    </div>
                    </div>
                
            </div>
        </div>
    </div>
</body>
</html>