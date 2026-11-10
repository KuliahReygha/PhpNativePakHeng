<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Barang</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php include 'navbar.php' ?>

    <!-- FORM TAMBAH BARANG -->
    <div class="container">

        <h1>Tambah Data</h1>

        <a href="barang.php">Kembali</a>

        <h2>Input Data Barang</h2>

        <form action="" method="post">

            <label>Kode Barang</label>
            <input type="text" name="kode_barang">

            <label>Nama Barang</label>
            <input type="text" name="nama_barang">

            <label>Harga</label>
            <input type="number" name="harga">

            <label>Stok</label>
            <input type="number" name="stok">

            <label>Satuan</label>
            <input type="text" name="satuan">

            <label>Kode Supplier</label>
            <select name="kode_supplier">
                <option value="">-- Pilih Kode Supplier --</option>
            </select>

            <button type="submit">Simpan</button>

        </form>

    </div>

</body>

</html>