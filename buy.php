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
    <link rel="stylesheet" href="css/buy.css" />
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

  <?php include_once "./view/Header.php"; ?>

<main style="height: fit-content">
    <h2>Featured Flowers</h2>
    <section class="flowers">
        <div class="flower">
            <img src="/resources/tulip.jpg" alt="Tulip" class="flower-image" />
            <h3>Tulip</h3>
            <p>Price: apelarebd</p>
            <p>Description: apelarebd </p>
            <p>Quantity: apelarebd
            <p>Difficulty to Maintain and Grow: apelarebd</p>
        </div>
        <div class="flower">
            <img src="/resources/lily.jpg" alt="Lily" class="flower-image" />
            <h3>Lily</h3>
            <p>Price: apelarebd</p>
            <p>Description: apelarebd </p>
            <p>Quantity: apelarebd
            <p>Difficulty to Maintain and Grow: apelarebd</p>
        </div>
        <div class="flower">
            <img src="/resources/roseBuy.jpg" alt="Rose" class="flower-image" />
            <h3>Rose</h3>
            <p>Price: apelarebd</p>
            <p>Description: apelarebd </p>
            <p>Quantity: apelarebd
            <p>Difficulty to Maintain and Grow: apelarebd</p>
        </div>
        <div class="flower">
            <img src="/resources/sunflower.jpg" alt="Sunflower" class="flower-image" />
            <h3>Sunflower</h3>
            <p>Price: apelarebd</p>
            <p>Description: apelarebd </p>
            <p>Quantity: apelarebd
            <p>Difficulty to Maintain and Grow: apelarebd</p>
        </div>
    </section>

</main>

<?php
  include_once './view/Footer.php';
?>

</body>

</html>
