<?php
// Start the session
session_start();
$dbconn = pg_connect("host=webgardeningrds.cepe7iq3kfqk.eu-north-1.rds.amazonaws.com port=5432 dbname=webgardening user=postgres password=paroladb");
$query = "SELECT * FROM my_harvests"; $result = pg_query($dbconn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/GeneralStyle.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/check.css" />
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
            $harvName = $row['har_name'];
            $harDatePlanted = $row['date_planted'];
            $harDateFinished = $row['harvest_date'];



            echo '<div class="flower">';
            echo '<h3>' . $harvName. '</h3>';
            echo '<p>Date Planted: ' . $harDatePlanted . '</p>';
            echo '<p>Date of Harvest: ' . $harDateFinished . '</p>';

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
