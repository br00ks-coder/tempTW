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
    <link rel="stylesheet" href="css/style.css" />
    <script src="login.js"></script>
    <script
      src="https://kit.fontawesome.com/fb7068e0f1.js"
      crossorigin="anonymous"
    ></script>
    <!--used for icons-->
    <title>Web Gardening</title>
  </head>

  <body>
    <div
      id="backgroundStyle">
        <!-- backgound Image -->
      </div>
    <!--Declared here to load as fast as possible-->

    <header class="header">

      <div class="logo_icon_container">
        <div class="logo_container">
          <a class="logo" href="index.php"
            ><!--Link within the logo to be redirected to the main page-->
            <img
              class="logo"
              id="logo"
              src="resources/Logo.png"
              alt="logo"
              width="130em"
              height="70em"
            />
          </a>
        </div>

        <div class="icon_container">
          <i class="fa-solid fa-bars" id="open_menu"></i>
        </div>
      </div>

      <h1 class="title">John Doe's Web Garden</h1>

      <nav class="nav_bar">
        <ul class="login_list">
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
          <a href="about.php"
            ><li class="about_us">About Us</li></a
          >
          <a href="check.php"><li class="check_flowers">Check Flowers</li></a>
          <a href="buy.php"><li class="buy_flowers">Buy Flowers</li></a>
          <a href="contact.php"><li class="contact_button">Contact Us</li></a>
        </ul>
      </nav>

      <nav id="nav_for_media">
        <ul>
          <i class="fa-solid fa-xmark" id="close_menu"></i>
          <a href="login.php"><li class="log_in">Log In</li></a>
          <a href="register.php"><li class="register">Register</li></a>
          <a href="about.php#main"><li class="about_us">About Us</li></a>
          <a href="check.php"><li class="check_flowers">Check Flowers</li></a>
          <a href="buy.php"><li class="buy_flowers">Buy Flowers</li></a>
          <a href="#footer"><li class="contact_button">Contact Us</li></a>
        </ul>
      </nav>
    </header>

<main style="height: 75vh;">

<div class="about-us">
  <h2>About Us</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac blandit eros. Curabitur suscipit leo ligula, vel posuere lorem malesuada sit amet. Nam vitae sapien auctor, lacinia tellus vel, bibendum mauris. Sed ac nisi mauris. Aliquam bibendum, metus a varius imperdiet, metus lectus elementum arcu, sit amet fermentum est sapien sit amet libero. Ut ac consectetur mauris, a accumsan elit. Pellentesque convallis, nulla at varius efficitur, est urna ultrices ex, sit amet rutrum quam eros vel arcu. Vivamus a lobortis justo, at tristique eros. Donec fermentum augue a felis faucibus, ut feugiat tellus hendrerit. Fusce posuere consequat nibh, in euismod dolor imperdiet nec. Aenean dapibus erat et magna suscipit laoreet.</p>
  <p>Nullam mollis ipsum libero, eu tempus enim sollicitudin ut. Phasellus fermentum turpis in tortor malesuada, in bibendum quam dapibus. Ut ut velit odio. Maecenas a quam et mauris dapibus tincidunt. Nunc ut ex sed felis dignissim vehicula vel vel purus. Nunc malesuada varius luctus. Curabitur vestibulum elit at elit luctus eleifend. Ut blandit eleifend velit, sit amet consequat orci iaculis vitae. Integer convallis lacinia odio, eu tempor enim bibendum vel. Nam sagittis nisi nec arcu egestas venenatis. Suspendisse porttitor dolor vitae neque maximus, eu interdum magna euismod.</p>
</div>
<div class="flower-div" style="z-index: 2;" >
  
</div>
    

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
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d958.90217648873!2d27.574490440651438!3d47.17381689411727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40cafb6227e846bd%3A0x193e4b6864504e2c!2sFacultatea%20de%20Informatic%C4%83!5e0!3m2!1sro!2sro!4v1681052319020!5m2!1sro!2sro"
        width="600"
        height="450"
        style="border: 0"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
      ></iframe>
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
