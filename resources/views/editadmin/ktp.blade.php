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
                <div class="d-flex justify-content-center">
                <div class="card" style="width: 40rem;">
                <form action="{{route('admin.post_editadminktp')}}" method="POST" enctype="multipart/form-data" class="card p-4">
                    {{csrf_field()}}
                    <input type="hidden" name="id" value="{{$data->id}}">
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
                    <input type="number" class="form-control"  aria-describedby="emailHelp" name="no_kk" value="{{$data->no_kk}}" placeholder="Masukan No KK Lama">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="textarea" class="form-control" aria-describedby="emailHelp" value="{{$data->alamat}}" readonly>
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
                <label for="exampleInputPassword1" class="form-label">Upload Dokumen</label>
                <div class="input-group mb-3">
                <input type="file" class="form-control" name="dokumen" id="inputGroupFile02">
                <label class="input-group-text" for="inputGroupFile02" >Upload</label>
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
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>