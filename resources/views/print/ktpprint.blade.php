<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Pengantar KTP</title>
    <style>
        .ttd{
            width : 100%;
            display: flex;
            justify-content: end;
            text-align: center;
        }
        .header{
            width: 100%;
            text-align: center;
            line-height: 1.5pt;
            padding-top: 1.5cm;
            padding-bottom: 0.5cm;
            font-weight: bold;
            font-size: 12pt;
        }
        hr{
            border-top: 8px solid black;
        }
        .biodata{
            padding-top: 0.5cm;
        }
        .biodata table{
            padding: 0px 1.25cm ;
        }
        @page{
            size : A4;
            margin :0;
            font-family: 'Times New Roman', Times, serif;
        }
    </style>
</head>
<body>
    <div class="header">
        <p>PEMERINTAH DESA</p>
        <p>DESA KERAMATAN KECAMATAN WONOSOBO</p>
        <p>Sekretariat : Desa Keramatan, Kecamatan Wonosobo</p>
    </div>
    <hr>
    <div class="biodata">
        <center>
            <strong><u>SURAT PENGANTAR KTP</u></strong>
            <br>
            <p>Nomor : </p>
        </center>
        <p>
            Yang bertandangan tangan dibawah ini Kepala Desa Desa Keramatan Kecamatan Wonosobo, Wonosobo dengan ini menerangkan bahwa :
        </p>
        <table>
            <tr>
                <td>Nama</td><td>:</td><td>{{$data->nama}}</td>
            </tr>
            <tr>
                <td>NIK</td><td>:</td><td>{{$data->nik}}</td>
            </tr>
            <tr>
                <td>Alamat</td><td>:</td><td>{{$data->alamat}}</td>
            </tr>
            <tr>
                <td>Keperluan</td><td>:</td><td>{{$data->keperluan}}</td>
            </tr>
        </table>
        <p>
            Sesuai dengan nama bersangkutan diatas, surat keterangan pengantar ini dibuat untuk keperluan {{$data->keperluan}} KTP.
        </p>
        <p>
           Demikian surat pengantar kami buat untuk dapat dipergunakan seperlunya.
        </p>
    </div>
    <div class="ttd">
        <div class="ttd-text">
            <p>Kepala Desa</p>
            <p>Desa Keramatan</p>
        </div>
    </div>
    <script>
        window.print();
    </script>
</body>
</html>