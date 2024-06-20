<?php
session_start();

$selected_products = isset($_SESSION['selected_products']) ? $_SESSION['selected_products'] : [];

function format_currency($amount) {
    return "Rp " . number_format($amount, 0, ',', '.');
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran Sepeda Bekas UAD</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comforter+Brush&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="pembayaran.css">
</head>
<body>
    <div class="navbar">
        <a href="#" class="navbar-logo">TOKOSEPEDA<span>UAD</span></a>
        <div class="navbar-nav">
            <a href="index.html">HOME</a>
            <a href="sepedabekas.html">SEPEDA BEKAS</a>
            <a href="about_us.html">ABOUT US</a>
            <a href="login.html">LOGIN</a>
        </div>
    </div>

    <div class="container" id="payment-form-container">
        <h1>Formulir Pembayaran</h1>
        <form id="payment-form" action="submit_payment.php" method="post">
            <label for="name">Nama Penerima</label>
            <input type="text" id="name" name="name" required>

            <label for="phone">Nomor Telepon</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="address">Alamat Pengiriman</label>
            <textarea id="address" name="address" required></textarea>

            <label for="shipping">Pilih Jasa Kirim</label>
            <select id="shipping" name="shipping" required>
                <option value="jne">JNE</option>
                <option value="j&t">J&T</option>
                <option value="sicepat">SiCepat</option>
            </select>

            <div class="product-list">
                <h2>Daftar Produk</h2>
                <div id="product-container">
                    <?php
                    $total_price = 0;
                    foreach ($selected_products as $product) {
                        list($name, $price) = explode(',', $product);
                        $total_price += $price;
                        echo "
                        <div class='product-item'>
                            <span>$name - " . format_currency($price) . "</span>
                        </div>";
                    }
                    ?>
                </div>
            </div>

            <div class="total">
                <h3>Total Pembayaran: <span id="total-price"><?= format_currency($total_price) ?></span></h3>
            </div>

            <label for="payment-method">Metode Pembayaran</label>
            <select id="payment-method" name="payment-method" required>
                <option value="qris">QRIS</option>
                <option value="dana">DANA</option>
            </select>

            <div id="qris-info" class="payment-info">
                <h2>Pembayaran QRIS</h2>
                <img src="qris-code.jpg" alt="QRIS Code">
            </div>

            <div id="dana-info" class="payment-info" style="display: none;">
                <h2>Pembayaran DANA</h2>
                <label for="dana-phone">Nomor DANA</label>
                <input type="tel" id="dana-phone" name="dana-phone">
            </div>

            <button type="submit">Bayar Sekarang</button>
        </form>
    </div>

    <div class="container success-container" id="success-page" style="display: none;">
        <h1>Pembayaran Berhasil!</h1>
        <p>Terima kasih telah melakukan pembayaran. Berikut adalah detail transaksi Anda:</p>
        <div id="payment-details" class="payment-details"></div>
        <a href="index.html" class="btn-home">Kembali ke Beranda</a>
    </div>

    <script>
        // JavaScript to handle payment method selection and toggle the payment info display
        document.getElementById('payment-method').addEventListener('change', function() {
            var selectedMethod = this.value;
            document.getElementById('qris-info').style.display = selectedMethod === 'qris' ? 'block' : 'none';
            document.getElementById('dana-info').style.display = selectedMethod === 'dana' ? 'block' : 'none';
        });
    </script>
</body>
</html>
