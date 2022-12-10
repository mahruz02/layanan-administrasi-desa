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
    <label for="nik" class="form-label">No KK Lama</label>
    <input type="number" class="form-control"  aria-describedby="emailHelp" name="nik">
    <div id="emailHelp" class="form-text">Masukan Nomer KK Lama</div>
  </div>
  <div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="textarea" class="form-control" aria-describedby="emailHelp" name="alamat">
    <div id="emailHelp" class="form-text">Masukan Alamat Lengkap Anda.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Status Pernikahan</label>
    <select class="form-select" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <option value="1">Lajang</option>
  <option value="2">Menikah</option>
  <option value="3">Duda/Janda</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Pendidikan</label>
    <select class="form-select" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <option value="1">SD/Sederajat</option>
  <option value="2">SMP/Sederajat</option>
  <option value="3">SMA/Sederajat</option>
  <option value="4">D1/D2/D3/D4</option>
  <option value="5">S1/S2/S3</option>
    </select>
  </div>
  <div class="input-group mb-3">
  <input type="file" class="form-control" id="inputGroupFile02">
  <label class="input-group-text" for="inputGroupFile02">Upload</label>
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
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>