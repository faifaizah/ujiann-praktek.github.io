<?php
include("db_conn.php");
?>

<?php
$id = $_GET['id'];

$sql2 = $conn->query("SELECT pembelian.*, produk.harga 
                      FROM pembelian 
                      INNER JOIN produk ON pembelian.namaproduk = produk.namaproduk 
                      WHERE pembelian.id = '" . $id . "'");
while ($data2 = $sql2->fetch_assoc()) { 
    $name = $data2['username'];
    $nohp = $data2['noHP'];
    $namaproduk = $data2['namaproduk'];
    $harga = $data2['harga'];
    
}


$token = "ugGqTJNe!YXV59WcPDja";
$target = $nohp;

$message = "
Form Pemesanan Honda  
Nama: $name

No hp: $nohp

Motor Yang Anda Beli: $namaproduk

Harga Motor Yang Anda Beli: $harga


==================================
Terima kasih Banyak Atas pesanan anda ";


$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.fonnte.com/send',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => array(
        'target' => $nohp,
        'message' => $message,
        'countryCode' => '62', //optional   
    ),
    CURLOPT_HTTPHEADER => array(
        "Authorization: ugGqTJNe!YXV59WcPDja" //change TOKEN to your actual token
    ),
));
$response = curl_exec($curl);
if (curl_errno($curl)) {
    $error_msg = curl_error($curl);
    // Jika terjadi kesalahan curl, tampilkan pesan kesalahan
    echo $error_msg;
} else {
    // Jika pengiriman pesan berhasil, lakukan redirect
    echo "<script>alert('Berhasil Mengirim Pesan Whatsapp Ke Nomor Pelanggan');window.location.href='home.php';</script>";
    exit; // Pastikan untuk keluar dari skrip setelah melakukan redirect
}
curl_close($curl);
?>