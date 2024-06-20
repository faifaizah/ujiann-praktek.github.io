<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<h2>Form Pemesanan</h2>

<form action="daftar.php" method="post">
    <div class="form-group">
        <label>Nama:</label>
        <input type="text" name="name" class="form-control" placeholder="Masukan Nama" required />
    </div>
    <div class="form-group">
        <label>No HP:</label>
        <input type="text" name="nohp" class="form-control" placeholder="Masukan No Hp" required />
    </div>
    <div class="form-group">
        <label>Produk:</label>
        <select id="namaproduk" name="namaproduk" class="form-control" required>
            <option value="">Pilih Pemesanan</option>
            <option value="Honda Vario 125 cbs">Honda Vario 125 cbs</option>
            <option value="Honda Vario 125 iss se">Honda Vario 125 iss se</option>
           
        </select>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    <a href="home.php" class="btn btn-info text-white">Kembali</a>
</form>
</div>
</body>
</html>