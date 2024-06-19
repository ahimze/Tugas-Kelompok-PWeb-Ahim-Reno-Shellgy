<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SEPEDA BEKAS UAD</title>
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap"
      rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
>
    <!-- icon -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js"></script>
    <link rel="stylesheet" href="style/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-BJpbczV5TbokpNzKv3eD/xhKx4iZNKEj1yJbQckqE3qRg/9bg5ib9pr6D7kksft2" crossorigin="anonymous">

  </head>
  <body>\
    <div class="navbar">
      <a href="#" class="navbar-logo">TOKOSEPEDA<span>UAD</span></a>

      <div class="navbar-nav">
        <a href="#home" style="text-decoration: underline;">HOME</a>
        <a href="sepedabekas.php">SEPEDA BEKAS</a>
        <a href="file:///C:/Users/asus/Documents/VSCODE/project%20web/SEPEDA%20BEKAS%20UAD/about_us.html">ABOUT US</a>
        <a href="login.php" style="position: relative; color: #ffffff; text-decoration: none; display: inline-block; padding: 0 10px;">
        <?php
             session_start(); 
            $username = file_get_contents('user.txt');
            if (empty($username)) {
              echo "LOGIN";
            } else {
              echo htmlspecialchars($username);
           }
        ?>
          <span style="position: absolute; top: 0%; width: 2px; height: 20px; background-color: #ffffff; left: -10px;"></span>
          <span style="position: absolute; top: 0%; width: 2px; height: 20px; background-color: #ffffff; right: -10px;"></span>
        </a>
      </div>
      </div>
    </div>

    <section class="home" id="home">
        <div class="home">
          <video autoplay muted loop class="video-background">
            <source src="video/banner.mp4" type="video/mp4" />
        </video>
      <div class="home-text">
        <a href="#text" class="btn">CEK SELENGKAPNYA</a>
      </div>
    </div>
    </section>
    <div class="bottom" id="text">
      <h1>Pusat Jualan Sepeda Bekas Namun Berkelas <span><br>HANYA DI TOKO SEPEDA BEKAS UAD</span></h1>
      <p> CEK PRODUK TERBAIK KAMI DI BAWAH</p>
      <a href="#barang" >&#11167;</a>
    </div>
<!-- ------------------------------------------------BACKGROUND ABU----------------------------------------------------------------- -->
      <div class="container" style="display: inline-block;" id="barang">
        <div class="content1" style="display: flexbox;">
          <div class="sepeda-image">
            <img src="gambar/home/sepeda1.png" alt="Ferrari SF90 Spider">
          </div>
          <div class="text-content">
            <div class="logo">POLYGON <span class="spider">HEIST 1.0</span></div>
            <a href="#discover" class="button">&#11162; SEPEDA GUNUNG</a>
            <a href="#build" class="button">&#11162; Harga : Rp 3.000.000</a>
            <a href="#request" class="button">&#11162; CEK SELENGKAPNYA</a>
          </div>
        </div>
<!-- -------------------------------------------------------------------------------------------------------------------------------- -->
        <div class="content2">
          <div class="text-content">
            <div class="logo">TREK <span class="spider">NEKO SL 16</span></div>
            <a href="#discover" class="button">&#11162; SEPEDA GUNUNG</a>
            <a href="#build" class="button">&#11162; Harga : Rp 2.999.000</a>
            <a href="#request" class="button">&#11162; CEK SELENGKAPNYA</a>
          </div>
          <div class="sepeda-image" style="margin-left: 70px;">
            <img src="gambar/home/sepeda2.png" alt="Ferrari SF90 Spider">
          </div>
        </div>
<!-- ------------------------------------------------------------------------------------------------------------------------------- -->
      <div class="container" style="display: inline-block; margin-top: 10px;">
        <div class="content2" style="display: flexbox;">
          <div class="sepeda-image">
            <img src="gambar/home/sepeda3.png" alt="Ferrari SF90 Spider">
          </div>
          <div class="text-content">
            <div class="logo">SCOOT <span class="spider">2016</span></div>
            <a href="#discover" class="button">&#11162; SEPEDA GUNUNG</a>
            <a href="#build" class="button">&#11162; Harga : Rp 4.000.000</a>
            <a href="#request" class="button">&#11162; CEK SELENGKAPNYA</a>
          </div>
        </div>
<!-- ------------------------------------------------BACKGROUND PUTIH----------------------------------------------------------------- -->
        <div class="container2" style="display: inline-block;">
          <div class="content2P">
            <div class="text-content">
              <div class="logo2">SANTA <span class="spider">CRUZ BRONSON</span></div>
              <a href="#discover" class="button2">&#11162; SEPEDA GUNUNG</a>
              <a href="#build" class="button2">&#11162; Harga : Rp 2.500.000</a>
              <a href="#request" class="button2">&#11162; CEK SELENGKAPNYA</a>
            </div>
          <div class="sepeda-image" style="margin-left: 70px;">
            <img src="gambar/home/sepeda4.png" alt="Ferrari SF90 Spider">
          </div>
          </div>
<!-- -------------------------------------------------------------------------------------------------------------------------------- -->
          <div class="content2P">
            <div class="sepeda-image">
              <img src="gambar/home/sepeda5.png" alt="Ferrari SF90 Spider">
            </div>
            <div class="text-content">
              <div class="logo2">TREX MTB <span class="spider">GIANT</span></div>
              <a href="#discover" class="button2">&#11162; SEPEDA GUNUNG</a>
              <a href="#build" class="button2">&#11162; Harga : Rp 4.500.000</a>
              <a href="#request" class="button2">&#11162; CEK SELENGKAPNYA</a>
            </div>
            </div>
<!-- -------------------------------------------------------------------------------------------------------------------------------- -->
          <div class="content2P">
            <div class="text-content">
              <div class="logo2">SANTA CRUZ <span class="spider">NOMAD</span></div>
              <a href="#discover" class="button2">&#11162; SEPEDA GUNUNG</a>
              <a href="#build" class="button2">&#11162; Harga : Rp 1.500.000</a>
              <a href="#request" class="button2">&#11162; CEK SELENGKAPNYA</a>
            </div>
          <div class="sepeda-image" style="margin-left: 70px; margin-bottom: 10px;">
            <img src="gambar/home/sepeda6.png" alt="Ferrari SF90 Spider">
          </div>
          </div>
      </div>
<!-- -------------------------------------------------------------------------------------------------------------------------------- -->
    <script src="js/script.js"></script>
  </body>
  <footer class="footer">
    <div class="footer-container">
        <div class="footer-section">
            <h3>Tentang Kami</h3>
            <p>Toko Sepeda Bekas UAD adalah pusat jual beli sepeda bekas dengan kualitas terbaik.</p>
        </div>
        <div class="footer-section">
            <h3>Menu</h3>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="file:///C:/Users/asus/Documents/VSCODE/project%20web/SEPEDA%20BEKAS%20UAD/sepedabekas.html">Sepeda Bekas</a></li>
                <li><a href="file:///C:/Users/asus/Documents/VSCODE/project%20web/SEPEDA%20BEKAS%20UAD/about_us.html">About Us</a></li>
                <li><a href="https://www.example.com/login">Login</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>Hubungi Kami</h3>
            <div class="social-icons" >
              <a href="https://www.instagram.com/ahimze"><i class="fab fa-instagram"></i>ahimze</a>
              <a href="https://www.instagram.com/renosaputra3030"><i class="fab fa-instagram"></i>reno</a>
              <a href="https://www.instagram.com/eprudnt14r"><i class="fab fa-instagram"></i>shellgy</a>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2024 Toko Sepeda Bekas UAD. All rights reserved.</p>
    </div>
</footer>
</html>
