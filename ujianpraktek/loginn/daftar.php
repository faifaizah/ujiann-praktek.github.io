<?php
// Include file koneksi, untuk koneksi ke database
include "db_conn.php";

// Fungsi untuk mencegah inputan karakter yang tidak sesuai
function input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Cek apakah ada kiriman form dari method post
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    // Retrieve form data
    $username = input($_POST["name"]);
    $nohp = input($_POST["nohp"]);
    $namaproduk = input($_POST["namaproduk"]);

    // Query untuk menginput data ke dalam tabel pembelian
    $sql = "INSERT INTO pembelian (username, noHP, namaproduk)
            VALUES ('$username', '$nohp', '$namaproduk')";

    // Mengeksekusi/menjalankan query diatas
    $hasil = mysqli_query($conn, $sql);

    // Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
    if ($hasil) {
        $last_id = mysqli_insert_id($conn);
        
        header("Location: cetak.php?id=$last_id");
        exit; // Prevent further execution
    } else {
        echo "<div class='alert alert-danger'>Data Gagal disimpan.</div>";
    }
}
?>