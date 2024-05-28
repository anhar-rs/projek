<?php
require "function.php";
require "login.php";
if (isset($_POST["login"])){
  if(login($_POST)>0)
  echo " <script>
         alert ('user login ke halaman');
         </alert> ";
}else {
  echo mysqli_error($conn);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>beras unram</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
    rel="stylesheet">

  <!-- Feather Icons -->
  <script src="https://unpkg.com/feather-icons"></script>

  <!-- My Style -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <!-- Navbar start -->
  <nav class="navbar">
    <a href="#" class="navbar-logo">padi<span>unram</span>.</a>

    <div class="navbar-nav">
      <a href="#home">Home</a>
      <a href="#about">Tentang Kami</a>
      <a href="#menu">Menu</a>
      <a href="#products">Produk</a>
      <a href="#contact">Kontak</a>
    </div>

    <div class="navbar-extra">
      <a href="#" id="search-button"><i data-feather="search"></i></a>
      <a href="#" id="shopping-cart-button"><i data-feather="shopping-cart"></i></a>
      <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
       <a href="#" id="button-login"><i data-feather="users"></i></a>
    </div>

    <!-- Search Form start -->
    <div class="search-form">
      <input type="search" id="search-box" placeholder="search here...">
      <label for="search-box"><i data-feather="search"></i></label>
    </div>
    <!-- Search Form end -->

    <!-- Shopping Cart start -->
    <div class="shopping-cart">
      <div class="cart-item">
        <img src="img/products/1.jpg" alt="Product 1">
        <div class="item-detail">
          <h3>Product 1</h3>
          <div class="item-price">IDR 30K</div>
        </div>
        <i data-feather="trash-2" class="remove-item"></i>
      </div>
      <div class="cart-item">
        <img src="img/products/1.jpg" alt="Product 1">
        <div class="item-detail">
          <h3>Product 1</h3>
          <div class="item-price">IDR 30K</div>
        </div>
        <i data-feather="trash-2" class="remove-item"></i>
      </div>
      <div class="cart-item">
        <img src="img/products/1.jpg" alt="Product 1">
        <div class="item-detail">
          <h3>Product 1</h3>
          <div class="item-price">IDR 30K</div>
        </div>
        <i data-feather="trash-2" class="remove-item"></i>
      </div>
    </div>
    <!-- Shopping Cart end -->

  </nav>
  <!-- Navbar end -->

  <!-- Hero Section start -->
  <section class="hero" id="home">
    <div class="mask-container">
      <main class="content">
        <h1>Mari Nikmati  beras <span>unram</span></h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, enim.</p>
      </main>
    </div>
  </section>
  <!-- Hero Section end -->

  <!-- About Section start -->
  <section id="about" class="about">
    <h2><span>Tentang</span> Kami</h2>

    <div class="row">
      <div class="about-img">
        <img src="img/tentang-kami.jpeg" alt="Tentang Kami">
      </div>
      <div class="content">
        <h3>Kenapa memilih beras  kami?</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur ducimus voluptatum dolor. Et, voluptatum
          accusantium!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic deserunt iure amet facilis eos a quo cum
          voluptates molestias nihil.</p>
      </div>
    </div>
  </section>
  <!-- About Section end -->

  <!-- Menu Section start -->
  <section id="menu" class="menu">
    <h2><span>Menu</span> Kami</h2>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita, repellendus numquam quam tempora voluptatum.
    </p>

    <div class="row">
      <div class="menu-card">
        <img src="img/menu/11.jpg" alt="Espresso" class="menu-card-img">
        <h3 class="menu-card-title">- master -</h3>
        <p class="menu-card-price">IDR 150K</p>
      </div>
      <div class="menu-card">
        <img src="img/menu/11.jpg" alt="Espresso" class="menu-card-img">
        <h3 class="menu-card-title">- master -</h3>
        <p class="menu-card-price">IDR 250K</p>
      </div>
      <div class="menu-card">
        <img src="img/menu/11.jpg" alt="Espresso" class="menu-card-img">
        <h3 class="menu-card-title">- master -</h3>
        <p class="menu-card-price">IDR 520K</p>
      </div>
      <div class="menu-card">
        <img src="img/menu/11.jpg" alt="Espresso" class="menu-card-img">
        <h3 class="menu-card-title">- master -</h3>
        <p class="menu-card-price">IDR 205K</p>
      </div>
      <div class="menu-card">
        <img src="img/menu/11.jpg" alt="Espresso" class="menu-card-img">
        <h3 class="menu-card-title">- master -</h3>
        <p class="menu-card-price">IDR 250K</p>
      </div>
      <div class="menu-card">
        <img src="img/menu/11.jpg">
        <h3 class="menu-card-title">- master -</h3>
        <p class="menu-card-price">IDR 250K</p>
      </div>
      
    </div>
  </section>
  <!-- Menu Section end -->

  <!-- Products Section start -->
  <section class="products" id="products">
    <h2><span>Produk Unggulan</span> Kami</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo unde eum, ab fuga possimus iste.</p>

    <div class="row">
      <div class="product-card">
        <div class="product-icons">
          <a href="#"><i data-feather="shopping-cart"></i></a>
          <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
        </div>
        <div class="product-image">
          <img src="img/products/1.jpg" alt="Product 1">
        </div>
        <div class="product-content">
          <h3>beras  1</h3>
          <div class="product-stars">
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star"></i>
          </div>
          <div class="product-price">IDR 30K <span>IDR 55K</span></div>
        </div>
      </div>
      <div class="product-card">
        <div class="product-icons">
          <a href="#"><i data-feather="shopping-cart"></i></a>
          <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
        </div>
        <div class="product-image">
          <img src="img/products/1.jpg" alt="Product 1">
        </div>
        <div class="product-content">
          <h3>beras  1</h3>
          <div class="product-stars">
            <i data-feather="star"></i>
            <i data-feather="star"></i>
            <i data-feather="star"></i>
            <i data-feather="star"></i>
            <i data-feather="star"></i>
          </div>
          <div class="product-price">IDR 30K <span>IDR 55K</span></div>
        </div>
      </div>
      <div class="product-card">
        <div class="product-icons">
          <a href="#"><i data-feather="shopping-cart"></i></a>
          <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
        </div>
        <div class="product-image">
          <img src="img/products/1.jpg" alt="Product 1">
        </div>
        <div class="product-content">
          <h3>beras 1</h3>
          <div class="product-stars">
            <i data-feather="star"></i>
            <i data-feather="star"></i>
            <i data-feather="star"></i>
            <i data-feather="star"></i>
            <i data-feather="star"></i>
          </div>
          <div class="product-price">IDR 30K <span>IDR 55K</span></div>
        </div>
      </div>
    </div>
  </section>
  <!-- Products Section end -->

  <!-- Contact Section start -->
  <section id="contact" class="contact">
    <h2><span>Kontak</span> Kami</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, provident.
    </p>

    <div class="row">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d63121.96604156556!2d116.05064038210749!3d-8.584182747887635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x2dcdbf7e3eff3f5b%3A0x34f884b732836131!2sJl.%20Majapahit%20No.62%2C%20Gomong%2C%20Kec.%20Selaparang%2C%20Kota%20Mataram%2C%20Nusa%20Tenggara%20Bar.%2083115!3m2!1d-8.5869073!2d116.0921869!5e0!3m2!1sen!2sid!4v1716347429628!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        

      <form action="">
        <div class="input-group">
          <i data-feather="user"></i>
          <input type="text" placeholder="nama   ">
        </div>
        <div class="input-group">
          <i data-feather="mail"></i>
          <input type="text" placeholder="email">
        </div>
        <div class="input-group">
          <i data-feather="phone"></i>
          <input type="text" placeholder="no hp">
        </div>
        <button type="submit" class="btn">kirim pesan</button>
      </form>

    </div>
  </section>
  <!-- Contact Section end -->

  <!-- Footer start -->
  <footer>
    <div class="socials">
      <a href="#"><i data-feather="instagram"></i></a>
      <a href="#"><i data-feather="twitter"></i></a>
      <a href="#"><i data-feather="facebook"></i></a>
    </div>

    <div class="links">
      <a href="#home">Home</a>
      <a href="#about">Tentang Kami</a>
      <a href="#menu">Menu</a>
      <a href="#contact">Kontak</a>
    </div>

    <div class="credit">
      <p>Created by <a href="https://www.instagram.com/">muhammad anhar solihin</a>. | &copy; 2024.</p>
    </div>
  </footer>
  <!-- Footer end -->

  <!-- Modal Box Item Detail start -->
  <div class="modal" id="item-detail-modal">
    <div class="modal-container">
      <a href="#" class="close-icon"><i data-feather="x"></i></a>
      <div class="modal-content">
        <img src="img/products/1.jpg" alt="Product 1">
        <div class="product-content">
          <h3>Product 1</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident, tenetur cupiditate facilis obcaecati
            ullam maiores minima quos perspiciatis similique itaque, esse rerum eius repellendus voluptatibus!</p>
          <div class="product-stars">
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star"></i>
          </div>
          <div class="product-price">IDR 30K <span>IDR 55K</span></div>
          <a href="#"><i data-feather="shopping-cart"></i> <span>add to cart</span></a>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Box Item Detail end -->
 <div class="wrapper" id="wrap-detail">
 <div class=modal-cont>
     <a href="#" class="close-icon"><i data-feather="x"></i></a>
    <div class="title-text">
      <div class="title login">
        Account 
      </div>
      <div class="title signup">
        Account
      </div>
    </div>
    <div class="form-container">
      <div class="slide-controls">
        <input type="radio" name="slide" id="login" checked>
        <input type="radio" name="slide" id="signup">
        <label for="login" class="slide login">Login</label>
        <label for="signup" class="slide signup">SignUp</label>
        <div class="slider-tab"></div>
      </div>
      <div class="form-inner">
        <form action="index.php" class="login" method="post">
          <div class="field">
            <input type="text" placeholder="Email Address" required name="email">
          </div>
          <div class="field">
            <input type="password" placeholder="Password" required name="password">
          </div>
          <div class="pass-link">
            <a href="#">Forget password?</a>
          </div>
          <div class="field btn">
            <div class="btn-layer"></div>
            <input type="submit" value="Login" name="login">
          </div>
          <div class="signup-link">
            Don't Have Account? <a href="">Create A New</a>
          </div>
        </form>
        <form action="index.php" class="signup" method="post">
          <div class="field">
            <input type="text" placeholder="Email Address" required name="email">
          </div>
          <div class="field">
            <input type="password" placeholder="Password" required name="password">
          </div>
          <div class="field">
            <input type="password" placeholder="Confirm Password" required name=" konfirpassword">
          </div>
          <div class="field btn">
            <div class="btn-layer"></div>
            <input type="submit" value="SignUp" name="register">
          </div>
        </form>
      </div>
    </div>
  </div>
  <div>

  </div>
  <script src="styleform.js"></script>
  <!-- Feather Icons -->
  <script>
    feather.replace()
  </script>

  <!-- My Javascript -->
  <script src="js/script.js"></script>
</body>

</html>