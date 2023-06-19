<?php
// Start the session
session_start();
$dbconn = pg_connect("host=webgardeningrds.cepe7iq3kfqk.eu-north-1.rds.amazonaws.com port=5432 dbname=webgardening user=postgres password=paroladb");
$query = "SELECT * FROM flowers"; $result = pg_query($dbconn, $query);
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
        <?php
        while ($row = pg_fetch_assoc($result)) {
        $flowerName = $row['name'];
        $flowerPrice = $row['price'];
        $flowerDesc = $row['description'];
        $flowerDiff = $row['difficulty'];
        $flowerAvailableQ = $row['available_quantity'];
        $flowerImg = $row['flower_images'];


        echo '<div class="flower">';
            echo '<h3>' . $flowerName . '</h3>';
            echo '<p>Color: ' . $flowerDesc . '</p>';
            echo '<p>Price: ' . $flowerPrice . '</p>';
            echo '<p>Difficulty to Maintain: ' . $flowerDiff . '</p>';
            echo '<p>Available Quantity: ' . $flowerAvailableQ . '</p>';

            echo '<img class="flower-image" src="' . $flowerImg . '.jpg" >';
            echo '</div>';
        }
        ?>
    </section>

</main>

<?php
  include_once './view/Footer.php';
?>

</body>

</html>
