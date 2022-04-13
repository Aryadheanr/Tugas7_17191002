<html>
<head>
 <title>Form Input Data Siswa</title>
</head>
<body>
 <center>
 <form action="<?= base_url('home/proses'); ?>"
method="post">
 <table>
 <tr>
 <th colspan="3">
 Form Input Data Mata Kuliah
 </th>
 </tr>
 <?= validation_errors(); ?>
 <tr>
 <td colspan="3">
 <hr>
 </td>
 </tr>
 <tr>
 <th>Nama Siswa</th>
 <th>:</th>
 <td>
 <input type="text" name="nama" id="nama">
 </td>
 </tr>
 <tr>
 <th>NIS</th>
 <th>:</th>
 <td>
 <input type="number" name="nis" id="nis">
 </td>
 </tr>
 <tr>
 <th>Kelas</th>
 <th>:</th>
 <td>
 <input type="text" name="kelas" id="kelas">
 </td>
 </tr>
 <tr>
 <th>Tanggal Lahir</th>
 <th>:</th>
 <td>
 <input type="text" name="tggl" id="tggl">
 </td>
 </tr>
 <tr>
 <th>Tempat Lahir</th>
 <th>:</th>
 <td>
 <input type="text" name="tmpt" id="tmpt">
 </td>
 </tr>
 <tr>
 <th>Alamat</th>
 <th>:</th>
 <td>
 <textarea  name="alamat" id="alamat" rows="3"></textarea>
 </td>
 </tr>
 <tr>
 <th>Jenis Kelamin</th>
 <td>:</td>
 <td>
 <input type="radio"  name="kelamin" id="laki" >
 <label class="btn btn-outline-primary" for="laki">Laki-Laki</label>
 <input type="radio"  name="kelamin" id="perempuan" >
 <label class="btn btn-outline-primary" for="perempuan">Perempuan</label>
 </td>
 </tr>
 <tr>
 <th></th>
 <td>:</td>
 <td>
 <select name="agama" id="agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Katolik</option>
                <option>Budha</option>
                <option>Hindu</option>
                <option>Protestan</option>
                <option>Khonghucu</option>
 </select>
 </td>
 </tr>
 <tr>
 <td colspan="3" align="center">
 <input type="submit" value="Submit">
 </td>
 </tr>
 </table>
 </form>
 </center>
</body>
</html>
