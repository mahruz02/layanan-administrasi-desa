@include('template/sidebar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">
    <title>Admin Warga</title>
</head>
<body>
    <div class="container-admin container-fluid">
        <div class="d-flex justify-content-end py-4">
            <div class="content-admin d-flex flex-column gap-4">
                <div class="title">
                    <h1>Admin Warga</h1>
                </div>
                <a href="{{route('admin.register_warga')}}" class="btn btn-warning data-table">tambah</a>
                <table class="table data-table">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama</th>
                      <th scope="col">NIK</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $i=1; ?>
                    @foreach($data as $row)
                      <tr>
                      <td class="text-center">{{$i++}}</th>
                        <td>{{$row->nama}}</td>
                        <td>{{$row->nik}}</td>
                        <td> 
                        <a href="{{route('admin.edit_warga',['id'=>$row->id])}}" class="btn btn-primary">Edit</a>
                        <a href="{{route('admin.deletewarga',['id'=>$row->id])}}" class="btn btn-danger">Hapus</a>  
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