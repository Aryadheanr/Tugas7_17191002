<html>
<head>
 <title>Tampil Data Siswa</title>
</head>
<body>
 <center>
 <table>
 <tr>
 <div class="card-header">
    Tampilan Data Siswa
  </div>
  <div class="card-body">
 </tr>
 <tr>
 <td colspan="3">
 <hr>
 </td>
 </tr>
 <tr>
 <th>Nama Siswa</th>
 <th>:</th>
 <td>
 <?= $nama; ?>
</td>
</tr>
<tr>
 <th>Nomor Induk Siswa</th>
 <th>:</th>
 <td>
 <?= $nis; ?>
</td>
</tr>
<tr>
 <th>Kelas</th>
 <th>:</th>
 <td>
 <?= $kelas; ?>
</td>
</tr>
<tr>
 <th>Tanggal Lahir</th>
 <th>:</th>
 <td>
 <?= $tggl; ?>
</td>
</tr>
<tr>
 <th>Tempat Lahir</th>
 <th>:</th>
 <td>
 <?= $tmpt; ?>
</td>
 <tr>
 <th>Alamat</th>
 <th>:</th>
 <td>
 <?= $alamat; ?>
 </td>
 </tr>
 <tr>
 <th>Jenis Kelamin</th>
 <th>:</th>
 <td>
 <?= $kelamin; ?>
 </td>
 </tr>
 <tr>
 <th>Agama</th>
 <th>:</th>
 <td>
 <?= $agama; ?>
 </td>
 </tr>
 <tr>
 <td colspan="3" align="center">
 <a href="<?= base_url('home'); 
?>">Kembali</a>
 </td>
 </tr>
</div>
 </table>
 </center>
</body>
</html>