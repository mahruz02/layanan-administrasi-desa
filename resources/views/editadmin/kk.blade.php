@include('template/sidebar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">
    <title>Admin KK</title>
</head>
<body>
    <div class="container-admin container-fluid">
        <div class="d-flex justify-content-end py-4">
            <div class="content-admin d-flex flex-column gap-4">
                <div class="title">
                    <h1>Admin KK</h1>
                </div>
                <div class="login position-absolute top-50 start-50 translate-middle mt-1">
                    <div class="card register " style="width: 40rem;">
                    <form action="{{route('warga.kk_edit')}}" method="POST" enctype="multipart/form-data" class="card p-4">
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$data->id}}">
                        <div class="mb-3">
                        <label for="nama" class="form-label">Nama Kepala Keluarga</label>
                        <input type="text" class="form-control" aria-describedby="emailHelp" name="kepala_keluarga" value="{{$data->kepala_keluarga}}">
                        <div id="emailHelp" class="form-text">Masukan Nama Kepala Keluarga.</div>
                        </div>
                        <div class="mb-3">
                        <label for="nik" class="form-label">NIK</label>
                        <input type="number" class="form-control"  aria-describedby="emailHelp" name="nik" value="{{$data->nik}}" readonly>
                        <div id="emailHelp" class="form-text">Masukan Nomer NIK</div>
                        </div> 
                        <div class="mb-3">
                        <label for="nik" class="form-label">No KK Lama</label>
                        <input type="number" class="form-control"  aria-describedby="emailHelp" name="no_kk_lama" value="{{$data->no_kk_lama}}">
                        <div id="emailHelp" class="form-text">Masukan Nomer KK Lama</div>
                        </div>
                        <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="textarea" class="form-control" aria-describedby="emailHelp" name="alamat" value="{{$data->alamat}}" readonly>
                        <div id="emailHelp" class="form-text">Masukan Alamat Lengkap Anda.</div>
                        </div>
                        <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Status Pernikahan</label>
                        <select class="form-select" aria-label="Default select example" name="status_kawin" value="{{$data->status_kawin}}">
                            <option selected>Open this select menu</option>
                            <option value="1" {{$data->status_kawin == 1 ? 'selected' : ''}}>Lajang</option>
                            <option value="2" {{$data->status_kawin == 2 ? 'selected' : ''}}>Menikah</option>
                            <option value="3" {{$data->status_kawin == 3 ? 'selected' : ''}}>Duda/Janda</option>
                        </select>
                        </div>
                        <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Pendidikan</label>
                        <select class="form-select" aria-label="Default select example" name="pendidikan" value="{{$data->pendidikan}}">
                            <option selected>Open this select menu</option>
                            <option value="1" {{$data->pendidikan == 1 ? 'selected' : ''}}>SD/Sederajat</option>
                            <option value="2" {{$data->pendidikan == 2 ? 'selected' : ''}}>SMP/Sederajat</option>
                            <option value="3" {{$data->pendidikan == 3 ? 'selected' : ''}}>SMA/Sederajat</option>
                            <option value="4" {{$data->pendidikan == 4 ? 'selected' : ''}}>D1/D2/D3/D4</option>
                            <option value="5" {{$data->pendidikan == 5 ? 'selected' : ''}}>S1/S2/S3</option>
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
                            <option value="1" {{$data->keperluan == 1 ? 'selected' : ''}}>Pengajuan Baru</option>
                            <option value="2" {{$data->keperluan == 2 ? 'selected' : ''}}>Pengajuan Pembaharuan</option>
                            <option value="3" {{$data->keperluan == 3 ? 'selected' : ''}}>Cetak Ulang</option>
                        </select>
                        </div>
                        <button type="submit" class="btn btn-primary btn-md">Submit</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>