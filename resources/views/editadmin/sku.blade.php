@include('template/sidebar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">
    <title>Admin SKU</title>
</head>
<body>
<div class="container-admin container-fluid">
        <div class="d-flex justify-content-end py-4">
            <div class="content-admin d-flex flex-column gap-4">
                <div class="title">
                    <h1>Admin SKU</h1>
                </div>
                <div class="d-flex justify-content-center">
                <div class="card" style="width: 40rem;">
                    <form action="{{route('admin.post_editadminsku')}}" method="POST" enctype="multipart/form-data" class="card p-4">
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
                        <input type="textarea" class="form-control" aria-describedby="emailHelp" name="alamat_usaha" value="{{$data->alamat_usaha}}" placeholder="Masukan Alamat Usaha">
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
    </div>
</body>
</html>