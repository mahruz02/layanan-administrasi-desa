@include('template/header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelayanan KK</title>
</head>
<body>
  <div class="container-fluid banner-form py-5 d-flex justify-content-center">
    <div class="card-form">
      <ul class="nav nav-pills nav-fill mb-3">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Layanan KK</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{route('status.kk')}}">Cek Status</a>
        </li>
      </ul>
      <form action="{{route('warga.kk_post')}}" method="POST" enctype="multipart/form-data" class="card p-4">
        {{csrf_field()}}
        <input type="hidden" name="id_warga" value="{{$data->id}}">
        <div class="mb-3">
          <label for="nama" class="form-label">Nama Kepala Keluarga</label>
          <input type="text" class="form-control @error('kepala_keluarga') is-invalid @enderror" aria-describedby="emailHelp" name="kepala_keluarga" placeholder="Masukan Nama Kepala Keluarga">
          @error('kepala_keluarga')
          <small class="text-danger fw-bold">{{$message}}</small>
          @enderror
        </div>
        <div class="mb-3">
          <label for="nik" class="form-label">NIK</label>
          <input type="number" class="form-control"  aria-describedby="emailHelp" name="nik" value="{{$data->nik}}" readonly>
        </div> 
        <div class="mb-3">
          <label for="nik" class="form-label">No KK Lama</label>
          <input type="number" class="form-control @error('no_kk_lama') is-invalid @enderror"  aria-describedby="emailHelp" name="no_kk_lama" placeholder="Masukan Nomer KK Lama">
          @error('no_kk_lama')
          <small class="text-danger fw-bold">{{$message}}</small>
          @enderror
        </div>
        <div class="mb-3">
          <label for="alamat" class="form-label">Alamat</label>
          <input type="textarea" class="form-control" aria-describedby="emailHelp" name="alamat" value="{{$data->alamat}}" readonly>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Status Pernikahan</label>
          <select class="form-select" aria-label="Default select example" name="status_kawin">
            <option selected>Open this select menu</option>
            <option value="Lajang">Lajang</option>
            <option value="Menikah">Menikah</option>
            <option value="Duda/Janda">Duda/Janda</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Pendidikan</label>
          <select class="form-select" aria-label="Default select example" name="pendidikan">
            <option selected>Open this select menu</option>
            <option value="SD/Sederajat">SD/Sederajat</option>
            <option value="SMP/Sederajat">SMP/Sederajat</option>
            <option value="SMA/Sederajat">SMA/Sederajat</option>
            <option value="D1/D2/D3/D4">D1/D2/D3/D4</option>
            <option value="S1/S2/S3">S1/S2/S3</option>
          </select>
        </div>
        <label for="exampleInputPassword1" class="form-label">Upload Dokumen</label>
        <div class="input-group mb-3">
          <input type="file" class="form-control" id="inputGroupFile02" name="dokumen">
          <label class="input-group-text" for="inputGroupFile02">Upload</label>
        </div>
        @error('dokumen')
         <small class="text-danger fw-bold">{{$message}}</small> <br>
        @enderror
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Keperluan</label>
          <select class="form-select" aria-label="Default select example" name="keperluan">
            <option selected>Open this select menu</option>
            <option value="Pengajuan Baru">Pengajuan Baru</option>
            <option value="Pengajuan Pembaharuan">Pengajuan Pembaharuan</option>
            <option value="Cetak Ulang">Cetak Ulang</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary btn-md">Submit</button>
      </form>
  </div>
</div>
</body>
</html>
@include('template/footer')