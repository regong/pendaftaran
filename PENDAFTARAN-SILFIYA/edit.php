<?php
include('koneksi.php');
if(!isset($_GET['id'])){
          header('Location: tabel-daftar.php?');
}

$kode = $_GET['id'];
$sql = "SELECT * FROM tb_daftar WHERE id=$kode";
$query = mysqli_query($db, $sql);
$tb_daftar = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
          die ("Data tidak ditemukan");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
          <title>EDIT DATA DIRI PENDAFTAR</title>
</head>
<body>
          <h3>EDIT DATA DIRI PENDAFTAR</h3>
          <form action="proses-edit.php" method="POST">
                    <fieldset>
                              <input type="hidden" name="id" value="<?php echo $tb_daftar['id'] ?>" />
                              <p>
                                        <label for="nama">Nama Lengkap :</label>
                                        <input type="text" name="nama" value="<?php echo $tb_daftar['nama'] ?>" />
                              </p>
                              <p>
                                        <label for="tempat-lahir">Tempat Lahir :</label>
                                        <input type="text" name="tempat-lahir" value="<?php echo $tb_daftar['tempat-lahir'] ?>" />
                              </p>
                              <p>
                                        <label for="tanggal-lahir">Tanggal Lahir :</label>
                                        <input type="date" name="tanggal-lahir" value="<?php echo $tb_daftar['tanggal-lahir'] ?>" />
                              </p>
                              <p>
                                        <label for="alamat">Alamat :</label>
                                        <input type="textarea" name="alamat" rows="5" value="<?php echo $tb_daftar['alamat'] ?>" />
                              </p>
                              <p>
                                        <label for="jenis-kelamin">Jenis Kelamin :</label>
                                        <label><input type="radio" name="jenis-kelamin" value="laki-laki" <?php echo ('laki-laki') ? "checked": "" ?> />Laki-laki</label>
                                        <label><input type="radio" name="jenis-kelamin" value="perempuan" <?php echo ('perempuan') ? "checked": "" ?> />Perempuan</label>
                              </p>
                              <p>
                                        <label for="agama">Agama : </label>
                                        <select name="agama">
                                                  <option <?php echo ('Islam') ? "selected": "" ?>>Islam</option>
                                                  <option <?php echo ('Kristen') ? "selected": "" ?>>Kristen</option>
                                                  <option <?php echo ('Katholik') ? "selected": "" ?>>Katholik</option>
                                                  <option <?php echo ('Budha') ? "selected": "" ?>>Budha</option>
                                                  <option <?php echo ('Hindu') ? "selected": "" ?>>Hindu</option>
</select>
                              </p>
                              <p>
                                        <input type="submit" value="Daftar" name="daftar" />
                              </p>
                    </fieldset>
                    
          </form>
</body>
</html>

//SILFIYA AINUR RESA