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
  <!-- Image for background -->
  <div id="background"
       style="
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    position: fixed;
    background-image: url('resources/background_lavender.jpeg');
    background-size: cover;
    filter: blur(4px);
    z-index: -1;
    ">
      >
  </div>
  <!-- Declared here to load as fast as possible -->

  <?php
  include_once './view/Header.php';
  ?>

<main style="height: 75vh;">

<div class="about-us">
  <h2>About Us</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac blandit eros. Curabitur suscipit leo ligula, vel posuere lorem malesuada sit amet. Nam vitae sapien auctor, lacinia tellus vel, bibendum mauris. Sed ac nisi mauris. Aliquam bibendum, metus a varius imperdiet, metus lectus elementum arcu, sit amet fermentum est sapien sit amet libero. Ut ac consectetur mauris, a accumsan elit. Pellentesque convallis, nulla at varius efficitur, est urna ultrices ex, sit amet rutrum quam eros vel arcu. Vivamus a lobortis justo, at tristique eros. Donec fermentum augue a felis faucibus, ut feugiat tellus hendrerit. Fusce posuere consequat nibh, in euismod dolor imperdiet nec. Aenean dapibus erat et magna suscipit laoreet.</p>
  <p>Nullam mollis ipsum libero, eu tempus enim sollicitudin ut. Phasellus fermentum turpis in tortor malesuada, in bibendum quam dapibus. Ut ut velit odio. Maecenas a quam et mauris dapibus tincidunt. Nunc ut ex sed felis dignissim vehicula vel vel purus. Nunc malesuada varius luctus. Curabitur vestibulum elit at elit luctus eleifend. Ut blandit eleifend velit, sit amet consequat orci iaculis vitae. Integer convallis lacinia odio, eu tempor enim bibendum vel. Nam sagittis nisi nec arcu egestas venenatis. Suspendisse porttitor dolor vitae neque maximus, eu interdum magna euismod.</p>
</div>
<div class="flower-div" style="z-index: 2;" >
  
</div>
    

</main>

  <?php
  include_once './view/Footer.php';
  ?>

</body>

</html>
