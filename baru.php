<?php
$koneksi = mysqli_connect("localhost", "root", "","paw5");

$sql="SELECT id_mhs, nama_mhs, nama_prodi, alamat_mhs
FROM tbl_mhs m, tbl_prodi p
WHERE m.id_prodi = p.id_prodi";
$hasil=mysqli_query($koneksi,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <div class="container p-5 my-5 bg-primary text-white">
    <h2>Data Mahasiswa</h2>
    <p>Menampilkan data Mahasiswa Fakultas Teknik</p>
  </div>
  <div>
    <a href="form.php" class="btn btn-success">Tambah data </a>
  </div>
  <br>
  <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>ID Mahasiswa</th>
          <th>Nama Mahasiswa</th>
          <th>Prodi</th>
          <th>Alamat Mahasiswa</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        while($baris=mysqli_fetch_assoc($hasil))
        {
        ?>
        <tr>
          <td><?php echo $baris['id_mhs'];?></td>
          <td><?php echo $baris['nama_mhs'];?></td>
          <td><?php echo $baris['nama_prodi'];?></td>
          <td><?php echo $baris['alamat_mhs'];?></td>
          <td>
            <button type="button" class="btn btn-info">Info</button>
            <button type="button" class="btn btn-danger" name="delete">Hapus</button>
          </td>
        </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</div>

</body>
</html>
