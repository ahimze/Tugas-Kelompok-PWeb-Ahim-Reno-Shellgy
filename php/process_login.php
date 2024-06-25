<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $input_email = trim($_POST['email']);
    $input_password = trim($_POST['password']);

    $file = 'register.txt';
    if (!file_exists($file)) {
        echo "No registered users. Please <a href='../register.html'>register</a> first.";
        exit();
    }

    $users = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($users as $user) {
        $user_data = explode('|', $user);
        if (count($user_data) !== 4) {
            // Skip lines that do not have the correct format
            continue;
        }

        list($stored_email, $stored_password, $stored_name, $stored_phone) = $user_data;

        if ($input_email == $stored_email && password_verify($input_password, $stored_password)) {
            $_SESSION['user'] = $stored_name;
            file_put_contents('login_data.txt', "$stored_name\n", FILE_APPEND | LOCK_EX);
            header("Location: welcome.php");
            exit();
        }
    }

    echo "Email atau password salah. Silakan <a href='../login.html'>coba lagi</a> atau <a href='../register.html'>daftar</a>.";
}
?>
