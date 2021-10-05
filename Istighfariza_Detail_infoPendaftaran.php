<html>
<head>
    <title>Detail Informasi Pendaftaran</title>
</head>
<body>
    <table border="0" style="center"; color:"black">

    <tr>
        <td>Nama</td>
        <td>Tempat Lahir</td>
        <td>Tanggal Lahir</td>
        <td>Jenis Kelamin</td>
        <td>Alamat</td>
        <td>Riwayat Penyakit</td>
        <td>E-mail</td>
        <td>No HP</td>
        <td>Agama</td>
    </tr>

    <tr>
        <td><?php echo $_GET ["nama"];?></td>
        <td><?php echo $_GET ["tempat_lahir"];?></td>
        <td><?php echo $_GET ["tgl_lahir"];?></td>
        <td><?php echo $_GET ["sex"];?></td>
        <td><?php echo $_GET ["alamat"];?></td>
        <td><?php echo $_GET ["disease"];?></td>
        <td><?php echo $_GET ["email"];?></td>
        <td><?php echo $_GET ["no_telp"];?></td>
        <td><?php echo $_GET ["agama"];?></td>
    </tr>
</body>
<html>