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
          <a class="nav-link" href="{{route('warga.sku')}}">Layanan SKU</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('status.sku')}}">Cek Status</a>
        </li>
      </ul>
  <div class="card">
    <table class="table w-100">
    <thead>
        <th>No</th>
        <th>Nama Usaha</th>
        <th>Keperluan</th>
        <th>Status</th>
        <th>Aksi</th>
    </thead>
    <tbody>
      <?php 
        $i = 1;
      ?>
      @foreach($data as $row)
      <tr>
        <td>{{$i++}}</td>
        <td>{{$row->nama_usaha}}</td>
        <td>{{$row->keperluan}}</td>
        <td>{{$row->status}}</td>
        <td>
          <a href="{{route('edit.sku',['id'=>$row->id])}}" class="btn btn-md btn-warning">Edit</a>
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
