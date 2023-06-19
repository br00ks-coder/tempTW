<?php
session_start();
$dbconn = pg_connect("host=webgardeningrds.cepe7iq3kfqk.eu-north-1.rds.amazonaws.com port=5432 dbname=webgardening user=postgres password=paroladb");
if (!$dbconn) {
    // Handle connection error
    die("Connection failed: " . pg_last_error());
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/GeneralStyle.css" />
    <link rel="stylesheet" href="css/style.css" />
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

 <nav class="nav_bar">
        <ul class="login_list">
            <!-- HTML code -->
                <a href="logout.php">
                    <li class="logout">Log out</li>
                </a>
           
        </ul>
    </nav>
<main style="height: 50vh;">
   


   <div id="user-container">
        <?php
 $query = "SELECT id, username FROM users";
    $result = pg_query($dbconn, $query);

    if (!$result) {
        // Handle query error
        die("Query failed: " . pg_last_error());
    }

    // Display users and options in a div
    echo '<div>';
    while ($row = pg_fetch_assoc($result)) {
        $userId = $row['id'];
        $username = $row['username'];

      echo '<p>' . $username . '</p>';
echo '<form method="post" action="delete_user.php">';
echo '<input type="hidden" name="user_id" value="' . $userId . '">';
echo '<button type="submit" name="delete">Delete</button>';
echo '</form>';

echo '<form method="post" action="change_password.php">';
echo '<input type="hidden" name="user_id1" value="' . $userId . '">';
echo '<input type="password" name="new_password1" placeholder="New Password">';
echo '<button type="submit" name="change_password">Change Password</button>';
echo '</form>';

    }
    echo '</div>';
        ?>
    </div>


</main>

  <?php
  include_once './view/Footer.php';
  ?>

  </body>

</html>
