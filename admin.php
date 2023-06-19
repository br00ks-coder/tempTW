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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
    <!-- User data will be loaded dynamically here -->
</div>

<script>
$(document).ready(function() {
    // Make AJAX request to fetch user data
    $.ajax({
        url: "fetch_users.php",
        method: "GET",
        dataType: "html",
        success: function(response) {
            // Update the user container div with the fetched data
            $("#user-container").html(response);
        },
        error: function(xhr, status, error) {
            console.log("AJAX request error:", error);
        }
    });

    // Handle password change form submission
    $(document).on("submit", "#change-password-form", function(event) {
        event.preventDefault(); // Prevent form submission

        var form = $(this);
        var url = form.attr("action");
        var formData = form.serialize(); // Serialize form data

        $.ajax({
            url: url,
            method: "POST",
            data: formData,
            success: function(response) {
                // Display success message
                console.log(response);

                // Reload user data after successful password change
                $.ajax({
                    url: "fetch_users.php",
                    method: "GET",
                    dataType: "html",
                    success: function(response) {
                        // Update the user container div with the fetched data
                        $("#user-container").html(response);
                    },
                    error: function(xhr, status, error) {
                        console.log("AJAX request error:", error);
                    }
                });
            },
            error: function(xhr, status, error) {
                console.log("AJAX request error:", error);
            }
        });
    });
});
</script>



</main>

  <?php
  include_once './view/Footer.php';
  ?>

  </body>

</html>
