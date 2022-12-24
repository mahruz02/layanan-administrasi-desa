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
                <table class="table data-table">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama</th>
                      <th scope="col">NIK</th>
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
                      <td>{{$row->nik}}</td>
                      <td>{{$row->keperluan}}</td>
                      <td>{{$row->status}}</td>
                      <td>
                        <a href="{{route('admin.printktp',['id'=>$row->id])}}" class="btn btn-success" target="_blank">Print</a> 
                        <a href="{{route('admin.edit_ktp', ['id'=>$row->id])}}" class="btn btn-primary">Edit Status</a>
                        <a href="{{route('admin.deletektp',['id'=>$row->id])}}" class="btn btn-danger">Hapus</a>
                      </td>
                    </tr>
                  </tbody>
                  @endforeach
                </table>
            </div>
        </div>
    </div>
</body>
</html>