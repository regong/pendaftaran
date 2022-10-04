<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Pendaftaran</title>
</head>
<body>
    <header>
        <h3>TABEL PENDAFTARAN</h3>
    </header>
    <form action="proses-pendaftaran.php" method="POST">
        <fieldset>
            <p>
                <label for="nama">Nama Lengkap :</label>
                <input type="text" name="nama" />
            </p>
            <p>
                <label for="tempat-lahir">Tempat Lahir :</label>
                <input type="text" name="tempat-lahir" />
            </p>
            <p>
                <label for="tanggal-lahir">Tanggal Lahir :</label>
                <input type="date" name="tanggal-lahir" />
            </p>
            <p>
                <label for="alamat">Alamat : </label>
                <input type="textarea" rows="5"></textarea>
            </p>
            <p>
                <label for="jenis-kelamin">Jenis Kelamin :</label>
                <label><input type="radio" name="jenis-kelamin" value="laki-laki" />Laki-laki</label>
                <label><input type="radio" name="jenis-kelamin" value="perempuan" />Perempuan</label>
            </p>
            <p>
                <label for="agama">Agama : </label>
                <select name="agama">
                    <option value="islam">Islam</option>
                    <option value="kristen">Kristen</option>
                    <option value="katholik">Katholik</option>
                    <option value="budha">Budha</option>
                    <option value="hindu">Hindu</option>
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