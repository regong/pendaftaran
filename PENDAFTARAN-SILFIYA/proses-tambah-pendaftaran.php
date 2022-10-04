<?php
include("file_koneksi.php");
if(isset($_POST['tambah-pendaftaran'])){
          $nama=$_POST['nama lengkap'];
          $tempat-lahir=$_POST['tempat lahir'];
          $tanggal-lahir=$POST['tanggal lahir'];
          $alamat=$_POST['alamat'];
          $jenis-kelamin=$_POST['jenis kelamin'];
          $agama=$_POST['agama'];

          $sql = "INSERT INTO barang(nama lengkap, tempat lahir, tanggal lahir, alamat, jenis kelamin, agama) VALUES ('$nama', '$tempat-lahir', '$tanggal-lahir', '$alamat', '$jenis-kelamin', '$agama')";
          $query = mysqli_query($db, $sql);
          if($query){
                    header('Location:pendaftaran.php?status=sukses');
          }else{
                    header('Location:pendaftaran.php?status=gagal');
          }}
          ?>

          //SILFIYA AINUR RESA