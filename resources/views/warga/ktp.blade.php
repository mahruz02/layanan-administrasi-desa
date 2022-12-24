@include('template/header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <title>Pelayanan KTP</title>
</head>
<body>
<div class="container-fluid banner-form py-5 d-flex justify-content-center">
    <div class="card-form">
      <ul class="nav nav-pills nav-fill mb-3">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Layanan KTP</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{route('status.ktp')}}">Cek Status</a>
        </li>
      </ul>
<form action="{{route('warga.ktp_post')}}" method="POST" enctype="multipart/form-data" class="card p-4">
    {{csrf_field()}}
    <input type="hidden" name="id_warga" value="{{$data->id}}">
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" aria-describedby="emailHelp" value="{{$data->nama}}" readonly>
  </div>
  <div class="mb-3">
  <label for="nik" class="form-label">NIK</label>
    <input type="number" class="form-control"  aria-describedby="emailHelp" value="{{$data->nik}}" readonly>
  </div>
  <div class="mb-3">
    <label for="nik" class="form-label">No KK</label>
    <input type="number" class="form-control @error('no_kk') is-invalid @enderror"  aria-describedby="emailHelp" name="no_kk" placeholder="Masukan No KK">
    @error('no_kk')
      <small class="text-danger fw-bold">{{$message}}</small>
    @enderror
  </div>
  <div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="textarea" class="form-control" aria-describedby="emailHelp" value="{{$data->alamat}}" readonly>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Keperluan</label>
    <select class="form-select"  aria-label="Default select example" name="keperluan">
  <option selected>Open this select menu</option>
  <option value="Pengajuan Baru">Pengajuan Baru</option>
  <option value="Pengajuan Pembaharuan">Pengajuan Pembaharuan</option>
  <option value="Cetak Ulang">Cetak Ulang</option>
    </select>
  </div>
  <label for="exampleInputPassword1" class="form-label">Upload Dokumen</label>
  <div class="input-group mb-3">
  <input type="file" class="form-control" name="dokumen" id="inputGroupFile02">
<label class="input-group-text" for="inputGroupFile02" >Upload</label>
</div>
  @error('dokumen')
      <small class="text-danger fw-bold">{{$message}}</small> <br>
    @enderror
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</body>
</html>
@include('template/footer')