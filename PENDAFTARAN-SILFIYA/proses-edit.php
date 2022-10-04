<?php
include("koneksi.php");

if(isset($_POST['simpan'])){
$kode = $_POST['id'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat-lahir'];
$tanggal_lahir = $_POST['tanggal-lahir'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis-kelamin'];
$agama = $_POST['agama'];

$sql = "UPDATE tb_daftar SET nama='$nama', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', alamat='$alamat', jenis_kelamin='$jenis_kelamin', agama='$agama', WHERE id=$kode";
$query= mysqli_query($db,$sql);

if($query){
          header('Location: tabel-daftar.php');
} else {
          die ("Gagal Menyimpan Perubahan . . . . ");
}
} else {
          die("Akses Dilarang");
}
?>

//SILFIYA AINUR RESA