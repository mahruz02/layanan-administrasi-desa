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
          <a class="nav-link " href="{{route('warga.kk')}}">Layanan KK</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('status.kk')}}">Cek Status</a>
        </li>
      </ul>
      <form action="{{route('warga.kk_edit')}}" method="POST" enctype="multipart/form-data" class="card p-4">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$data->id}}">
        <div class="mb-3">
          <label for="nama" class="form-label">Nama Kepala Keluarga</label>
          <input type="text" class="form-control" aria-describedby="emailHelp" name="kepala_keluarga" value="{{$data->kepala_keluarga}}" placeholder="Masukan Nama Kelapa Keluarha">
        </div>
        <div class="mb-3">
          <label for="nik" class="form-label">NIK</label>
          <input type="number" class="form-control"  aria-describedby="emailHelp" name="nik" value="{{$data->nik}}" readonly>
        </div> 
        <div class="mb-3">
          <label for="nik" class="form-label">No KK Lama</label>
          <input type="number" class="form-control"  aria-describedby="emailHelp" name="no_kk_lama" value="{{$data->no_kk_lama}}" placeholder="Masukan Nomer KK Lama">
        </div>
        <div class="mb-3">
          <label for="alamat" class="form-label">Alamat</label>
          <input type="textarea" class="form-control" aria-describedby="emailHelp" name="alamat" value="{{$data->alamat}}" readonly>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Status Pernikahan</label>
          <select class="form-select" aria-label="Default select example" name="status_kawin" value="{{$data->status_kawin}}">
            <option selected>Open this select menu</option>
            <option value="Lajang" {{$data->status_kawin == 'Lajang' ? 'selected' : ''}}>Lajang</option>
            <option value="Menikah" {{$data->status_kawin == 'Menikah' ? 'selected' : ''}}>Menikah</option>
            <option value="Duda/Janda" {{$data->status_kawin == 'Duda/Janda' ? 'selected' : ''}}>Duda/Janda</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Pendidikan</label>
          <select class="form-select" aria-label="Default select example" name="pendidikan" value="{{$data->pendidikan}}">
            <option selected>Open this select menu</option>
            <option value="SD/Sederajat" {{$data->pendidikan == 'SD/Sederajat' ? 'selected' : ''}}>SD/Sederajat</option>
            <option value="SMP/Sederajat" {{$data->pendidikan == 'SMP/Sederajat' ? 'selected' : ''}}>SMP/Sederajat</option>
            <option value="SMA/Sederajat" {{$data->pendidikan == 'SMA/Sederajat' ? 'selected' : ''}}>SMA/Sederajat</option>
            <option value="D1/D2/D3/D4" {{$data->pendidikan == 'D1/D2/D3/D4' ? 'selected' : ''}}>D1/D2/D3/D4</option>
            <option value="S1/S2/S3" {{$data->pendidikan == 'S1/S2/S3' ? 'selected' : ''}}>S1/S2/S3</option>
          </select>
        </div>
        <label class="input-text">Upload File Pendukung</label>
        <div class="input-group mb-3">
          <input type="file" class="form-control" id="inputGroupFile02" name="dokumen">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Keperluan</label>
          <select class="form-select" aria-label="Default select example" name="keperluan" value="{{$data->keperluan}}">
            <option>Open this select menu</option>
            <option value="Pengajuan Baru" {{$data->keperluan == 'Pengajuan Baru' ? 'selected' : ''}}>Pengajuan Baru</option>
            <option value="Pengajuan Pembaharuan" {{$data->keperluan == 'Pengajuan Pembaharuan' ? 'selected' : ''}}>Pengajuan Pembaharuan</option>
            <option value="Cetak Ulang" {{$data->keperluan == 'Cetak Ulang' ? 'selected' : ''}}>Cetak Ulang</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary btn-md">Submit</button>
      </form>
  </div>
</div>
</body>
</html>
@include('template/footer')