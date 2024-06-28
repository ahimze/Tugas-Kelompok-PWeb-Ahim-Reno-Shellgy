<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'] ?? '';
    $harga = $_POST['harga'] ?? '';
    
    if (!empty($nama) && !empty($harga)) {
        $data = "Nama: $nama, Harga: $harga\n";
        file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
        echo 'Data berhasil disimpan.';
    } else {
        echo 'Data tidak lengkap.';
    }
} else {
    http_response_code(405); // Method Not Allowed
    echo 'Metode request tidak diizinkan.';
}
?>
