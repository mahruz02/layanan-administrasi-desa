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
                <table class="table data-table">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama Warga</th>
                      <th scope="col">Nama Kepala Keluarga</th>
                      <th scope="col">No KK Lama</th>
                      <th scope="col">Keperluan</th>
                      <th scope="col">Status</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($data as $row)
                    <tr>
                      <th scope="row">1</th>
                      <td>{{$row->nama}}</td>
                      <td>{{$row->kepala_keluarga}}</td>
                      <td>{{$row->no_kk_lama}}</td>
                      <td>{{$row->keperluan}}</td>
                      <td>{{$row->status}}</td>
                      <td>
                      <button type="button" class="btn btn-success">Terima Pengajuan</button> 
                      <a href="{{route('admin.edit_kk', ['id'=>$row->id])}}" class="btn btn-primary">Edit Status</a>
                      <button type="button" class="btn btn-danger">Hapus</button>  
                    </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>