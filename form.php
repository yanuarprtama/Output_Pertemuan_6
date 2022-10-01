<?php
$koneksi = mysqli_connect("localhost", "root", "","paw5");
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
  <h2>Tambah Data Mahasiswa</h2>
  <div class="alert alert-primary">
    <strong>Primary!</strong> Indicates an important action.
  </div>
  <form method="post" action="action.php">
    <div class="mb-3 mt-3">
      <label for="name">Nama :</label>
      <input type="text" class="form-control" id="name" placeholder="Masukkan nama" name="name">
    </div>
    <div class="mb-3">
      <label for="">Alamat :</label>
      <input type="text" class="form-control" id="alamat" placeholder="Masukkan alamat" name="alamat">
    </div>
    <div>
        <label for="prodi" class="form-label">Prodi :</label>
        <input class="form-control" list="prodis" name="prodi" id="prodi" placeholder="Pilih Prodi">
        <datalist id="prodis">
            <option value="1">Teknik Informatika
            <option value="2">Teknik Industri
            <option value="3">Teknik Elektro
            <option value="4">Teknik Mesin
            <option value="5">Teknik Mekatronika
            <option value="6">Sistem Informasi
        </datalist>
    </div>    
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
