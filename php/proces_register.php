<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validasi input (contoh sederhana)
    if (empty($name) || empty($phone) || empty($email) || empty($password) || empty($confirm_password)) {
        echo "Semua field harus diisi.";
        exit;
    }

    if ($password !== $confirm_password) {
        echo "Password dan konfirmasi password tidak cocok.";
        exit;
    }

    // Simpan data ke file atau database (contoh menyimpan ke file)
    $filename = "register.txt";
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $data = "$email|$hashed_password|$name|$phone\n";
    file_put_contents($filename, $data, FILE_APPEND | LOCK_EX);

    // Redirect atau pesan sukses
    echo "Registrasi berhasil! Klik <a href='../login.html'>di sini</a> untuk kembali ke halaman utama.";
    //header("Location: ./login.html"); // Redirect ke halaman login jika diperlukan
}
?>
