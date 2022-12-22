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
        <div class="d-flex justify-content-end py-4">
            <div class="content-admin d-flex flex-column gap-4">
                <div class="title">
                    <h1>Admin KTP</h1>
                </div>
                <div class="card-form">
                <ul class="nav nav-pills nav-fill mb-3">
                <form action="{{route('warga.ktp_post')}}" method="POST" enctype="multipart/form-data" class="card p-4">
                    {{csrf_field()}}
                    <input type="hidden" name="id_warga" value="{{$data->id}}">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" aria-describedby="emailHelp" value="{{$data->nama}}" readonly>
                    <div id="emailHelp" class="form-text">Masukan Nama Lengkap Anda.</div>
                </div>
                <div class="mb-3">
                <label for="nik" class="form-label">NIK</label>
                    <input type="number" class="form-control"  aria-describedby="emailHelp" value="{{$data->nik}}" readonly>
                    <div id="emailHelp" class="form-text">Masukan Nomer NIK</div>
                </div>
                <div class="mb-3">
                    <label for="nik" class="form-label">No KK</label>
                    <input type="number" class="form-control"  aria-describedby="emailHelp" name="no_kk">
                    <div id="emailHelp" class="form-text">Masukan Nomer KK</div>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="textarea" class="form-control" aria-describedby="emailHelp" value="{{$data->alamat}}" readonly>
                    <div id="emailHelp" class="form-text">Masukan Alamat Lengkap Anda.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Keperluan</label>
                    <select class="form-select" aria-label="Default select example" name="keperluan">
                <option selected>Open this select menu</option>
                <option value="1">Pengajuan Baru</option>
                <option value="2">Pengajuan Pembaharuan</option>
                <option value="3">Cetak Ulang</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                <input type="file" class="form-control" name="dokumen" id="inputGroupFile02">
                <label class="input-group-text" for="inputGroupFile02" >Upload</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>