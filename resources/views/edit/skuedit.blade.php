@include('template/header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelayanan SKU</title>
</head>
<body>
<div class="container-fluid banner-form py-5 d-flex justify-content-center">
    <div class="card-form">
      <ul class="nav nav-pills nav-fill mb-3">
        <li class="nav-item">
          <a class="nav-link text-white" href="{{route('warga.sku')}}">Layanan SKU</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('status.sku')}}">Cek Status</a>
        </li>
      </ul>
      <form action="{{route('warga.sku_edit')}}" method="POST" enctype="multipart/form-data" class="card p-4">
    {{csrf_field()}}
    <input type="hidden" name="id" value="{{$data->id}}">
        <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" aria-describedby="emailHelp" name="nama" value="{{$data->nama}}" readonly>
    </div>
    <div class="mb-3">
        <label for="nik" class="form-label">NIK</label>
        <input type="number" class="form-control"  aria-describedby="emailHelp" name="nik" value="{{$data->nik}}" readonly>
    </div>
    <div class="mb-3">
        <label for="keperluan" class="form-label">Keperluan</label>
        <select class="form-select" aria-label="Default select example" name="keperluan" value="{{$data->keperluan}}">
    <option selected>Open this select menu</option>
            <option value="Pengajuan Baru" {{$data->keperluan == 'Pengajuan Baru' ? 'selected' : ''}}>Pengajuan Baru</option>
            <option value="Pengajuan Pembaharuan" {{$data->keperluan == 'Pengajuan Pembaharuan' ? 'selected' : ''}}>Pengajuan Pembaharuan</option>
            <option value="Cetak Ulang" {{$data->keperluan == 'Cetak Ulang' ? 'selected' : ''}}>Cetak Ulang</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="nama_usaha" class="form-label">Nama Usaha</label>
        <input type="textarea" class="form-control" aria-describedby="emailHelp" name="nama_usaha" value="{{$data->nama_usaha}}" placeholder="Masukan Nama Usaha">
    </div>
    <div class="mb-3">
        <label for="alamat_usaha" class="form-label">Alamat Usaha</label>
        <input type="textarea" class="form-control" aria-describedby="emailHelp" name="alamat_usaha" value="{{$data->alamat_usaha}}" placeholder="Masukan Alamat Lengkap">
    </div>
    <label for="exampleInputPassword1" class="form-label">Upload File Pendukung</label>
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