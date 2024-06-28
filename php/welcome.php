<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - Toko Sepeda Bekas Online</title>
</head>

<body>
    <h1>Welcome, <?php echo htmlspecialchars($_SESSION['user']); ?> di Toko Sepeda Bekas Online UAD!</h1>
    <p><a href='#link home?'>HOME</a></p>
</body>

</html>