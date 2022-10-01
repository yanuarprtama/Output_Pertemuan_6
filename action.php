<?php
$koneksi = mysqli_connect("localhost", "root", "","paw5");

$nama = $_POST['name'];
$alamat = $_POST['alamat'];
$prodi = $_POST['prodi'];

echo '<head>
<title>Bootstrap Example</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>';

$sql = "INSERT INTO tbl_mhs VALUES(null, '$prodi', '$nama', '$alamat')";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Penambahan data mahasiswa gagal";
    echo "<div class='alert alert-danger'>
    <strong>Gagal!</strong> Penginputan data mahasiswa gagal silahkan isi ulang kembali!</div>";
}else{
    echo "Eksekusi Berhasil <br>";
    echo '<div class="alert alert-success">
    <strong>Success!</strong> Sukses menambahkan data <a href="baru.php" class="alert-link">Show Data</a>.
  </div>';
}
?>