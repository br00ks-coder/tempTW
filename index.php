<?php
// Start the session
session_start();
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/GeneralStyle.css" />
  <link rel="stylesheet" href="css/MainPageStyle.css" />
  <script src="https://kit.fontawesome.com/fb7068e0f1.js" crossorigin="anonymous"></script>
  <!--used for icons-->
  <title>Web Gardening</title>
</head>

<body>
  <div id="backgroundStyle">
    <!-- image for backgound -->
  </div>
  <!--Declared here to load as fast as possible-->
  <header class="header">
    <div class="logo_icon_container">
      <div class="logo_container">
        <a class="logo" href="index.php">
          <!--Link within the logo to be redirected to the main page--><img class="logo" id="logo" src="resources/Logo.png" alt="logo" width="130em" height="70em" /> </a>
      </div>
      <div class="icon_container"> <i class="fa-solid fa-bars" id="open_menu"></i> </div>
    </div>
    <h1 class="title">John Doe's Web Garden</h1>
    <nav class="nav_bar">
      <ul class="login_list">
        <!-- HTML code -->

  <?php if (isset($_SESSION['username'])): ?>
    <!-- Display content for logged-in users -->
    <a href="profile.php">
          <li class="profile">Profile</li>
        </a>
        <a href="logout.php">
          <li class="logout">Log out</li>
        </a>
  <?php else: ?>
    <!-- Display content for non-logged-in users -->
    <a href="login.php">
          <li class="log_in">Log In</li>
        </a>
        <a href="register.php">
          <li class="register">Register</li>
        </a>
  <?php endif; ?>




       
      </ul>
    </nav>
    <div class="horizontal_rule"></div>
    <nav class="nav_list">
      <ul>
        <a href="about.php">
          <li class="about_us">About Us</li>
        </a>
        <a href="check.php">
          <li class="check_flowers">Check Flowers</li>
        </a>
        <a href="buy.php">
          <li class="buy_flowers">Buy Flowers</li>
        </a>
        <a href="contac.php">
          <li class="contact_button">Contact Us</li>
        </a>
      </ul>
    </nav>
    <nav id="nav_for_media">
      <ul> <i class="fa-solid fa-xmark" id="close_menu"></i>
        <a href="#">
          <li class="log_in">Log In</li>
        </a>
        <a href="#">
          <li class="register">Register</li>
        </a>
        <a href="index.php#main">
          <li class="about_us">About Us</li>
        </a>
        <a href="#">
          <li class="check_flowers">Check Flowers</li>
        </a>
        <a href="#">
          <li class="buy_flowers">Buy Flowers</li>
        </a>
        <a href="#footer">
          <li class="contact_button">Contact Us</li>
        </a>
      </ul>
    </nav>
  </header>
  <main id="main">
    <section>
      <div class="section1 text" id="About_us"> <span>
            <h2>About us</h2>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Doloribus corrupti in sapiente. Praesentium explicabo neque,
              aliquid exercit>ationem, eaque qui cupiditate corrupti quam
              aperiam commodi doloremque iure. Quibusdam reiciendis culpa
              commodi!
            </p>
          </span> </div>
      <div class="section1 image" id="Photo_1"> <img src="resources/Photo_1.jpg" alt="Flower greenhouse" /> </div>
    </section>
    <br />
    <section>
      <div class="section2 image" id="Photo_2"> <img src="resources/flower_shop.jpeg" alt="FlowerShop" /> </div>
      <div class="section2 text" id="Our_flowers"> <span>
            <h2>Our flowers</h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim,
              laboriosam doloremque ex, praesentium fuga expedita architecto
              perferendis nemo perspiciatis corporis tenetur natus repellendus
              id fugiat ab ad! Rem, voluptates voluptatibus!
            </p>
          </span> </div>
    </section>
    <br />
    <section>
      <div class="section3 text" id="Stats_text"> <span>
            <h2>With our latest technologies</h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero,
              doloribus earum perferendis voluptatum, placeat unde dolorem,
              nesciunt aperiam et illo praesentium architecto expedita aut natus
              neque adipisci voluptatem voluptas reprehenderit.
            </p>
          </span> </div>
      <div class="section3 stats" id="Stats_progress_bar"> <span style="width: 100%; height: 100%">
            <p>The humidity level in ground</p>
            <div class="progress_bar">
              <div class="progress_bar_fill" style="width: 80%">80%</div>
            </div>
            <p>The flower is % ready</p>
            <div class="progress_bar">
              <div class="progress_bar_fill" style="width: 90%">90%</div>
            </div>
            <p>One more sensor</p>
            <div class="progress_bar">
              <div class="progress_bar_fill" style="width: 60%">60%</div>
            </div>
            <br />
          </span> </div>
    </section>
    <br />
    <section>
      <div class="section4 text" id="%Ready_text"> <span>
            <h2>How much is left?</h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga,
              vitae cumque in veniam, aliquam voluptatem saepe dicta
              necessitatibus repellat provident maxime quas exercitationem
              consequuntur eos amet nemo facere perferendis consequatur!
            </p>
          </span> </div>
      <div class="section4 text" id="%Ready_diagram"> <span>
            <h1>30 Days left</h1>
            <h3>Ready on 30th April 2023</h3>
            <p>Save the date</p>
          </span> </div>
    </section>
  </main>
  <footer id="footer">
    <!--footer used to display the contact informations-->
    <div class="contact ways">
      <h3>Contact options:</h3>
      <p><i class="fa-solid fa-phone"></i> 073 add number</p>
      <p><i class="fa-brands fa-facebook"></i> WebGarden.facebook.com</p>
      <p><i class="fa-solid fa-envelope"></i> jdoewg@email.com</p>
    </div>
    <div class="contact location">
      <h3>Adress:</h3>
      <p>Strada General Henri Mathias Berthelot Nr. 16, Iași 700259</p>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d958.90217648873!2d27.574490440651438!3d47.17381689411727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40cafb6227e846bd%3A0x193e4b6864504e2c!2sFacultatea%20de%20Informatic%C4%83!5e0!3m2!1sro!2sro!4v1681052319020!5m2!1sro!2sro" width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </footer>
</body>
<script>
const openMobileMenu = document.querySelector('#open_menu');
const close_menu = document.querySelector('#close_menu');
let menu = document.querySelector("#nav_for_media");
openMobileMenu.addEventListener('click', function() {
  menu.classList.toggle('active');
});
close_menu.addEventListener('click', function() {
  menu.classList.toggle('active');
});
</script>

</html>