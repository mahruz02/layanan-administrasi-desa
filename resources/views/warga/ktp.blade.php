<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <title>Pelayanan KK</title>
</head>
<body>
<form action="{{route('warga.store')}}" method="POST">
    {{csrf_field()}}
  <div class="mb-3">
    <label for="nama" class="form-label">Nama Kepala Keluarga</label>
    <input type="text" class="form-control" aria-describedby="emailHelp" name="nama">
    <div id="emailHelp" class="form-text">Masukan Nama Kepala Keluarga.</div>
  </div>
  <label for="nik" class="form-label">NIK</label>
    <input type="number" class="form-control"  aria-describedby="emailHelp" name="nik">
    <div id="emailHelp" class="form-text">Masukan Nomer NIK</div>
  </div>
  <div class="mb-3">
    <label for="nik" class="form-label">No KK</label>
    <input type="number" class="form-control"  aria-describedby="emailHelp" name="nik">
    <div id="emailHelp" class="form-text">Masukan Nomer KK</div>
  </div>
  <div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="textarea" class="form-control" aria-describedby="emailHelp" name="alamat">
    <div id="emailHelp" class="form-text">Masukan Alamat Lengkap Anda.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Keperluan</label>
    <select class="form-select" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <option value="1">Pengajuan Baru</option>
  <option value="2">Pengajuan Pembaharuan</option>
  <option value="3">Cetak Ulang</option>
    </select>
  </div>
  <div class="input-group mb-3">
  <input type="file" class="form-control" id="inputGroupFile02">
  <label class="input-group-text" for="inputGroupFile02">Upload</label>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>