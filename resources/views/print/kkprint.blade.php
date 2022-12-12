<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="Image/Logo.png" type="image/x-icon">
	<title>Cetak Laporan</title>
</head>
<body>
	<center>
		<table width="100%" border="0">
			<tr>
				<td width="10%"><img src="Image/Logo.png" width="100" height="120"></td1>
				<td width="90%">
					<center>
						<font size="5">PEMERINTAHAN KABUPATEN PURWAKARTA</font><br>
						<font size="5">KECAMATAN JATILUHUR</font><br><font size="6"><b>KANTOR DESA CILEGONG</b></font><br>
						<font size="3"><i>Jl. Ir. H DJuanda No. 161 Cilegong Kecamatan Jatiluhur Kabupaten Purwakarta (41152) Telp./Fax (0331)758005</i></font>
					</center>
				</td>
			</tr>
			<tr>
				<td colspan="3"><hr></td>
			</tr>
		</table>
		<h2 style="text-align: center;">Laporan Pengajuan Akta Kelahiran</h2>
		<table border="0" width ="100%">
			<tr height="30"><font color='black'>
				<th align='center' colspan="9">
					<font face='Tahoma' size=2>
						Dari Tanggal :&nbsp;<font face='Tahoma' size=2><?php echo date('d-m-Y',strtotime($vTanggal1));?></font>&nbsp;&nbsp;&nbsp;
						Sampai Tanggal :&nbsp;<font face='Tahoma' size=2><?php echo date('d-m-Y',strtotime($vTanggal2)) ;?></font>
					</font>
				</th>
			</tr>
		</table>
		<table border="1">
			<tr><font color='black'>
				<th>No</th>
				<th>Tanggal Pengajuan</th>
				<th>No KK</th>
				<th>Nama Kepala Keluarga</th>
				<th>Nama Ibu</th>
				<th>Nama Bayi</th>
				<th>Jenis Kelamin</th>
				<th>Tempat Dilahirkan</th>
				<th>Tempat Kelahiran</th>
				<th>Tanggal Lahir</th>
				<th>Penolong Kelahiran</th>
				<th>Berat Bayi</th>
				<th>Panjang Bayi</th>
			</tr>
			<tr>
				<td align="center"></font></td>
				<td style='text-align: center;'><?php echo $d['tanggal_pengajuan'] ?></td>
				<td><?php echo $d['no_kk']; ?></td>
				<td><?php echo $d['nama_kepala_keluarga']; ?></td>
				<td><?php echo $d['nama_ibu']; ?></td>
				<td><?php echo $d['nama_bayi']; ?></td>
				<td><?php echo $d['jenis_kelamin']; ?></td>
				<td><?php echo $d['tempat_dilahirkan']; ?> </td>
				<td><?php echo $d['tempat_kelahiran']; ?></td>
				<td align="center"><?php echo $d['tanggal_lahir']; ?></td>
				<td><?php echo $d['penolong_kelahiran']; ?></td>
				<td><?php echo $d['berat_bayi']; ?></td>
				<td><?php echo $d['panjang_bayi']; ?></td>
			</tr>
			<?php
				$j++;
			
			?>
		</table>
		<br>
		<table width="100%">
			<tr>
				<td width="80%"><br><br><br><br></td>
				<td align="center">Purwakarta,&nbsp;<?php echo date('d M Y');?><br>
				Kepala Desa<br><br><br><br>Bpk Hasanudin Baim Hasan</td>
			</tr>
	     </table>
	</center>
	<script>
		window.print();
	</script>
</body>
</html>