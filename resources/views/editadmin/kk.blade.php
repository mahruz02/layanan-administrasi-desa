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
                <div class="d-flex justify-content-center">
                    <div class="card" style="width: 40rem;">
                    <form action="{{route('admin.post_editadminkk')}}" method="POST" enctype="multipart/form-data" class="card p-4">
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$data->id}}">
                        <div class="mb-3">
                        <label for="nama" class="form-label">Nama Kepala Keluarga</label>
                        <input type="text" class="form-control" aria-describedby="emailHelp" name="kepala_keluarga" value="{{$data->kepala_keluarga}}" placeholder="Masukan Nama Kepala Keluarga">
                        </div>
                        <div class="mb-3">
                        <label for="nik" class="form-label">NIK</label>
                        <input type="number" class="form-control"  aria-describedby="emailHelp" name="nik" value="{{$data->nik}}" readonly>
                        </div> 
                        <div class="mb-3">
                        <label for="nik" class="form-label">No KK Lama</label>
                        <input type="number" class="form-control"  aria-describedby="emailHelp" name="no_kk_lama" value="{{$data->no_kk_lama}}" placeholder="Masukan No KK Lama">
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
                        <label for="exampleInputPassword1" class="form-label">Upload Dokumen</label>
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
                        <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Status</label>
                        <select class="form-select" aria-label="Default select example" name="status" value="{{$data->status}}">
                            <option>Open this select menu</option>
                            <option value="Diterima" {{$data->keperluan == 'Diterima' ? 'selected' : ''}}>Diterima</option>
                            <option value="Dokumen Kurang Jelas" {{$data->keperluan == 'Dokumen Kurang Jelas' ? 'selected' : ''}}>Dokumen Kurang Jelas</option>
                            <option value="Data Tidak Sama Dengan Dokumen" {{$data->keperluan == 'Data Tidak Sama Dengan Dokumen' ? 'selected' : ''}}>Data Tidak Sama Dengan Dokumen</option>
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