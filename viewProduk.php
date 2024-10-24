<?php require 'index.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stok Produk</title>
</head>
<body>

<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 500px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h3 {
            text-align: center;
            color: #333;
        }
        input[type="text"], input[type="email"], input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #5cb85c;
            color: white;
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #4cae4c;
        }
        .output {
            margin-top: 20px;
            padding: 15px;
            background-color: #e9ecef;
            border-radius: 4px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>

    <div class="container">
    <h1 align="center">Data Customer</h1>

    <form method="POST" action="">
    <label for="nama">Nama barang : </label>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="harga">Harga barang : </label>
        <input type="number" id="harga" name="harga" required><br><br>

        <label for="stok">Stok Awal : </label>
        <input type="number" id="stok" name="stok" required><br><br>

        <label for="barcode">Barcode barang : </label>
        <input type="barcode" id="barcode" name="barcode" required><br><br>

        <label for="exp">Expired barang : </label>
        <input type="text" id="exp" name="exp" required><br><br>

        <label for="pembelian">Jumlah Pembelian : </label>
        <input type="number" id="pembelian" name="pembelian" required><br><br>

        <input type="submit" value="Hitung Stok Akhir">
    </form>
    </div>
    <?php if ($namaProduk !== null):?>
        <h2 align="center">Nama barang : <?php echo $namaProduk; ?></h2>
    <?php endif;?>

    <?php if ($Stokakhir !== null):?>
        <h2 align="center">Stok Akhir : <?php echo $Stokakhir; ?></h2>
    <?php endif;?>

</body>
</html>