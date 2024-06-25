<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Periksa apakah email ada dalam $_POST
    if (!isset($_POST['email'])) {
        echo "Email tidak ditemukan.";
        exit;
    }

    $email = trim($_POST['email']);

    // Membaca data pengguna dari file
    $filename = "register.txt";
    $users = file($filename, FILE_IGNORE_NEW_LINES);
    $found = false;

    foreach ($users as $user) {
        // Pemeriksaan format data sebelum menggunakan explode
        if (strpos($user, '|') !== false) {
            list($user_email, $hashed_password) = explode("|", $user);
            // Bandingkan email yang ditemukan dengan input email
            if ($user_email === $email) {
                $found = true;
                // Generate kata sandi baru
                $new_password = bin2hex(random_bytes(4));
                $new_hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

                // Update kata sandi di file register.txt
                $new_user = "$user_email;$new_hashed_password";
                file_put_contents($filename, str_replace($user, $new_user, $users));

                // Simulasi pengiriman email (ganti dengan logika pengiriman email sesungguhnya)
                echo "Kata sandi baru telah dikirim ke email Anda: $new_password";
                break;
            }
        }
    }

    if (!$found) {
        echo "Email tidak ditemukan.";
    }
}
?>
