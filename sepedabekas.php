<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SEPEDA BEKAS UAD</title>
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-BJpbczV5TbokpNzKv3eD/xhKx4iZNKEj1yJbQckqE3qRg/9bg5ib9pr6D7kksft2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap"
      rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
>
    <!-- icon -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Comforter+Brush&family=Luckiest+Guy&family=Rubik:wght@300;400;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link href="style.css" rel="stylesheet" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js"></script>
    <link rel="stylesheet" href="style/style2.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-BJpbczV5TbokpNzKv3eD/xhKx4iZNKEj1yJbQckqE3qRg/9bg5ib9pr6D7kksft2" crossorigin="anonymous">
  </head>
  <body>
    <div class="navbar">
      <a href="#" class="navbar-logo">TOKOSEPEDA<span>UAD</span></a>
      <div class="navbar-nav">
        <a href="home.php">HOME</a>
        <a href="#menu"style="text-decoration: underline;">SEPEDA BEKAS</a>
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
    <main class = "container">
      <h1>Sepeda Bekas UAD</h1>
      <h2>Sepeda Popular</h2>
      <ul>
          <li><a href="#promo" class="active">Promo</a></li>
          <li><a href="#BMX">BMX</a></li>
          <li><a href="#lipat">LIPAT</a></li>
          <li><a href="#gunung">GUNUNG</a></li>
      </ul>
<div class="label">
    Promo%
</div>
<section class="menu" id="promo">
      <!--Batas-->
      <div class="item">
          <div class="badge">new</div>
          <nav>
              <a href="#" title="Checkout Mase" class="add-to-cart"
                 data-nama="Pacific"
                 data-harga="800.000">
                  <span class="material-icons">
                      shopping_basket
                    </span>
              </a>
              <a href="#" title="Tambahkan favorite">
                  <span class="material-icons">
                      favorite
                      </span>
              </a>
              <a href="#" title="Lihat gambar" class="zoom-button">
                  <span class="material-icons">
                      visibility
                      </span>
              </a>
          </nav>
          <div class ="foto">
              <img src="gambar/sepeda bekas/promo1.webp" alt="sepeda bmx" class="zoomable"/>
              </div>
                  <div class="keterangan">Sepeda Gunung Promo</div>
                  <div class="nama">Pacific</div>
                  <div class="harga">
                       Harga : <span class="merah"> Rp.800.000</span> / 
                      <span class="coret">Rp.1.500.000</span>
               </div>
          </div>
          <!--Batas-->
          <div class="item">
            <div class="badge">new</div>
            <nav>
                <a href="#" title="Checkout Mase" class="add-to-cart"
                 data-nama="Thrill"
                 data-harga="999.000">
                    <span class="material-icons">
                        shopping_basket
                      </span>
                </a>
                <a href="#" title="Tambahkan favorite">
                    <span class="material-icons">
                        favorite
                        </span>
                </a>
                <a href="#" title="Lihat gambar" class="zoom-button">
                    <span class="material-icons">
                        visibility
                        </span>
                </a>
            </nav>
            <div class ="foto">
                <img src="gambar/sepeda bekas/promo2.webp" alt="sepeda bmx" class="zoomable"/>
                </div>
                    <div class="keterangan">Sepeda Gunung Promo</div>
                    <div class="nama">Thrill</div>
                    <div class="harga">
                         Harga : <span class="merah"> Rp.999.000</span> / 
                        <span class="coret">Rp.1.999.000</span>
                 </div>
            </div>
            <!--Batas-->
            <div class="item">
                <div class="badge">new</div>
                <nav>
                    <a href="#" title="Checkout Mase" class="add-to-cart"
                 data-nama="Pacific bmx"
                 data-harga="750.000">
                        <span class="material-icons">
                            shopping_basket
                          </span>
                    </a>
                    <a href="#" title="Tambahkan favorite">
                        <span class="material-icons">
                            favorite
                            </span>
                    </a>
                    <a href="#" title="Lihat gambar" class="zoom-button">
                        <span class="material-icons">
                            visibility
                            </span>
                    </a>
                </nav>
                <div class ="foto">
                    <img src="gambar/sepeda bekas/promo3.jpeg" alt="sepeda bmx" class="zoomable"/>
                    </div>
                        <div class="keterangan">Sepeda BMX Murah Bekas</div>
                        <div class="nama">Pacific bmx</div>
                        <div class="harga">
                             Harga : <span class="merah"> Rp.750.000</span> / 
                            <span class="coret">Rp.1.000.000</span>
                     </div>
                </div>
                <!--Batas-->
</section>
<div class="label" id="BMX">
    BMX
</div>
<section class="menu" >
    <!--Batas-->
    <div class="item">
        <div class="badge">new</div>
        <nav>
            <a href="#" title="Checkout Mase" class="add-to-cart"
                 data-nama="Mongoose L40"
                 data-harga="999.000">
                <span class="material-icons">
                    shopping_basket
                  </span>
            </a>
            <a href="#" title="Tambahkan favorite">
                <span class="material-icons">
                    favorite
                    </span>
            </a>
            <a href="#" title="Lihat gambar" class="zoom-button">
                <span class="material-icons">
                    visibility
                    </span>
            </a>
        </nav>
        <div class ="foto">
            <img src="gambar/sepeda bekas/bmx1.jpg" alt="sepeda bmx" class="zoomable"/>
            </div>
                <div class="keterangan">Sepeda BMX Murah Bekas</div>
                <div class="nama">Mongoose L40</div>
                <div class="harga">
                     Harga : <span> Rp.999.000</span> 
             </div>
        </div>
        <!--Batas-->
        <div class="item">
            <div class="badge">new</div>
            <nav>
                <a href="#" title="Checkout Mase" class="add-to-cart"
                 data-nama="Pacific bmx"
                 data-harga="750.000">
                    <span class="material-icons">
                        shopping_basket
                      </span>
                </a>
                <a href="#" title="Tambahkan favorite">
                    <span class="material-icons">
                        favorite
                        </span>
                </a>
                <a href="#" title="Lihat gambar" class="zoom-button">
                    <span class="material-icons">
                        visibility
                        </span>
                </a>
            </nav>
            <div class ="foto">
                <img src="gambar/sepeda bekas/bmx2.jpg" alt="sepeda bmx" class="zoomable"/>
                </div>
                    <div class="keterangan">Sepeda BMX Murah Bekas</div>
                    <div class="nama">Pacific bmx</div>
                    <div class="harga">
                         Harga : <span> Rp.750.000</span> 
                 </div>
            </div>
            <!--Batas-->
            <div class="item">
                <div class="badge">new</div>
                <nav>
                    <a href="#" title="Checkout Mase" class="add-to-cart"
                 data-nama="Freestyle 12T"
                 data-harga="850.000">
                        <span class="material-icons">
                            shopping_basket
                          </span>
                    </a>
                    <a href="#" title="Tambahkan favorite">
                        <span class="material-icons">
                            favorite
                            </span>
                    </a>
                    <a href="#" title="Lihat gambar" class="zoom-button">
                        <span class="material-icons">
                            visibility
                            </span>
                    </a>
                </nav>
                <div class ="foto">
                    <img src="gambar/sepeda bekas/bmx3.avif" alt="sepeda bmx" class="zoomable"/>
                    </div>
                        <div class="keterangan">Sepeda BMX Murah Bekas</div>
                        <div class="nama">Freestyle 12T</div>
                        <div class="harga">
                             Harga : <span> Rp.850.000</span> 
                     </div>
                </div>
                <!--Batas-->
</section>
<div class="label"  id="lipat">
    Lipat
</div>
<section class="menu">
    <!--Batas-->
    <div class="item">
        <div class="badge">new</div>
        <nav>
            <a href="#" title="Checkout Mase" class="add-to-cart"
                 data-nama="Element Ecosmo Z9"
                 data-harga="500.000">
                <span class="material-icons">
                    shopping_basket
                  </span>
            </a>
            <a href="#" title="Tambahkan favorite">
                <span class="material-icons">
                    favorite
                    </span>
            </a>
            <a href="#" title="Lihat gambar" class="zoom-button">
                <span class="material-icons">
                    visibility
                    </span>
            </a>
        </nav>
        <div class ="foto">
            <img src="gambar/sepeda bekas/lipat1.jpg" alt="sepeda bmx" class="zoomable"/>
            </div>
                <div class="keterangan">Sepeda Lipat Murah Bekas</div>
                <div class="nama">Element Ecosmo Z9</div>
                <div class="harga">
                     Harga : <span> Rp.500.000</span> 
             </div>
        </div>
        <!--Batas-->
        <div class="item">
            <div class="badge">new</div>
            <nav>
                <a href="#" title="Checkout Mase" class="add-to-cart"
                 data-nama="Pacific Noris 2.5"
                 data-harga="950.000">
                    <span class="material-icons">
                        shopping_basket
                      </span>
                </a>
                <a href="#" title="Tambahkan favorite">
                    <span class="material-icons">
                        favorite
                        </span>
                </a>
                <a href="#" title="Lihat gambar" class="zoom-button">
                    <span class="material-icons">
                        visibility
                        </span>
                </a>
            </nav>
            <div class ="foto">
                <img src="gambar/sepeda bekas/lipat2.jpg" alt="sepeda bmx" class="zoomable"/>
                </div>
                    <div class="keterangan">Sepeda Lipat Murah Bekas</div>
                    <div class="nama">Pacific Noris 2.5</div>
                    <div class="harga">
                         Harga : <span> Rp.950.000</span> 
                 </div>
            </div>
            <!--Batas-->
            <div class="item">
                <div class="badge">new</div>
                <nav>
                    <a href="#" title="Checkout Mase" class="add-to-cart"
                 data-nama="Pacific Noris 2.1"
                 data-harga="750.000">
                        <span class="material-icons">
                            shopping_basket
                          </span>
                    </a>
                    <a href="#" title="Tambahkan favorite">
                        <span class="material-icons">
                            favorite
                            </span>
                    </a>
                    <a href="#" title="Lihat gambar" class="zoom-button">
                        <span class="material-icons">
                            visibility
                            </span>
                    </a>
                </nav>
                <div class ="foto">
                    <img src="gambar/sepeda bekas/lipat3.jpg" alt="sepeda bmx" class="zoomable"/>
                    </div>
                        <div class="keterangan">Sepeda Lipat Murah Bekas</div>
                        <div class="nama">Pacific Noris 2.1</div>
                        <div class="harga">
                             Harga : <span> Rp.750.000</span> 
                     </div>
                </div>
                <!--Batas-->
</section>
<div class="label" id="gunung" style="margin-bottom: -27px;">
   Gunung
</div>
<section class="menu" id="gunung">
    <!--Batas-->
    <div class="item">
        <div class="badge">new</div>
        <nav>
            <a href="#" title="Checkout Mase" class="add-to-cart"
                 data-nama="Trex XT-780"
                 data-harga="1.750.000">
                <span class="material-icons">
                    shopping_basket
                  </span>
            </a>
            <a href="#" title="Tambahkan favorite">
                <span class="material-icons">
                    favorite
                    </span>
            </a>
            <a href="#" title="Lihat gambar" class="zoom-button">
                <span class="material-icons">
                    visibility
                    </span>
            </a>
        </nav>
        <div class ="foto">
            <img src="gambar/sepeda bekas/gunung1.jpg" alt="sepeda bmx" class="zoomable"/>
            </div>
                <div class="keterangan">Sepeda Gunung Bekas</div>
                <div class="nama">Trex XT-780</div>
                <div class="harga">
                     Harga : <span> Rp.1.750.000</span>
             </div>
        </div>
        <!--Batas-->
        <div class="item">
            <div class="badge">new</div>
            <nav>
                <a href="#" title="Checkout Mase" class="add-to-cart"
                 data-nama="Storm Shark 3.0"
                 data-harga="1.500.000">
                    <span class="material-icons">
                        shopping_basket
                      </span>
                </a>
                <a href="#" title="Tambahkan favorite">
                    <span class="material-icons">
                        favorite
                        </span>
                </a>
                <a href="#" title="Lihat gambar" class="zoom-button">
                    <span class="material-icons">
                        visibility
                        </span>
                </a>
            </nav>
            <div class ="foto">
                <img src="gambar/sepeda bekas/gunung2.jpg" alt="sepeda bmx" class="zoomable"/>
                </div>
                    <div class="keterangan">Sepeda Gunung Bekas</div>
                    <div class="nama">Storm Shark 3.0</div>
                    <div class="harga">
                         Harga : <span> Rp.1.500.000</span>
                 </div>
            </div>
            <!--Batas-->
            <div class="item">
                <div class="badge">new</div>
                <nav>
                    <a href="#" title="Checkout Mase" class="add-to-cart"
                 data-nama="Aviator 2689 XT VT"
                 data-harga="2.000.000">
                        <span class="material-icons">
                            shopping_basket
                          </span>
                    </a>
                    <a href="#" title="Tambahkan favorite">
                        <span class="material-icons">
                            favorite
                            </span>
                    </a>
                    <a href="#" title="Lihat gambar" class="zoom-button">
                        <span class="material-icons">
                            visibility
                            </span>
                    </a>
                </nav>
                <div class ="foto">
                    <img src="gambar/sepeda bekas/gunung3.jpg" alt="sepeda bmx" class="zoomable"/>
                    </div>
                        <div class="keterangan">Sepeda Gunung Bekas</div>
                        <div class="nama">Aviator 2689 XT VT</div>
                        <div class="harga">
                             Harga : <span> Rp.2.000.000</span>
                     </div>
                </div>
                <!--Batas-->
</section>
  <div class="zoom-overlay" id="zoomOverlay">
    <img src="" alt="Gambar Zoom" id="zoomImage"/>
</div>
    <script src="js/script.js"></script>
    <script>
     document.addEventListener('DOMContentLoaded', function() {
        const zoomButtons = document.querySelectorAll('.zoom-button');
        const zoomOverlay = document.getElementById('zoomOverlay');
        const zoomImage = document.getElementById('zoomImage');

        zoomButtons.forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault(); // Mencegah aksi default
                const img = button.closest('.item').querySelector('.zoomable');
                zoomImage.src = img.src; // Setel sumber gambar
                zoomOverlay.classList.add('active');
            });
        });

        zoomOverlay.addEventListener('click', function() {
            zoomOverlay.classList.remove('active');
        });
      });
    </script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const addToCartButtons = document.querySelectorAll('.add-to-cart');

        addToCartButtons.forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault(); // Mencegah aksi default (pindah halaman)
                
                // Ambil data dari atribut data
                const nama = button.getAttribute('data-nama');
                const harga = button.getAttribute('data-harga');
                
                // Kirim data ke server menggunakan Ajax
                const xhr = new XMLHttpRequest();
                xhr.open('POST', 'process.php', true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.onload = function() {
                    if (xhr.status === 200) {
                        console.log('Data terkirim ke server.');
                    } else {
                        console.error('Gagal mengirim data ke server.');
                    }
                };
                xhr.send('nama=' + encodeURIComponent(nama) + '&harga=' + encodeURIComponent(harga));
            });
        });
     });
    </script>
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
                <li><a href="#">Home</a></li>
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
