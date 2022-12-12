@include('template/header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelayanan KTP</title>
</head>
<body>
<div class="container-fluid banner-form py-5 d-flex justify-content-center">
    <div class="card-form">
      <ul class="nav nav-pills nav-fill mb-3">
        <li class="nav-item">
          <a class="nav-link " href="{{route('warga.ktp')}}">Layanan KTP</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('status.ktp')}}">Cek Status</a>
        </li>
      </ul>
      <form action="{{route('warga.ktp_edit')}}" method="POST" enctype="multipart/form-data" class="card p-4">
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
            <input type="number" class="form-control"  aria-describedby="emailHelp" name="no_kk" value="{{$data->no_kk}}">
            <div id="emailHelp" class="form-text">Masukan Nomer KK</div>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="textarea" class="form-control" aria-describedby="emailHelp" value="{{$data->alamat}}" readonly>
            <div id="emailHelp" class="form-text">Masukan Alamat Lengkap Anda.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Keperluan</label>
            <select class="form-select" aria-label="Default select example" name="{{$data->keperluan}}">
            <option>Open this select menu</option>
                    <option value="1" {{$data->keperluan == 1 ? 'selected' : ''}}>Pengajuan Baru</option>
                    <option value="2" {{$data->keperluan == 2 ? 'selected' : ''}}>Pengajuan Pembaharuan</option>
                    <option value="3" {{$data->keperluan == 3 ? 'selected' : ''}}>Cetak Ulang</option>
            </select>
        </div>
        <label class="input-text">Upload File Pendukung</label>
        <div class="input-group mb-3">
        <input type="file" class="form-control" name="dokumen" id="inputGroupFile02">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</div>
</div>
</body>
</html>
@include('template/footer')