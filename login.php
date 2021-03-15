<?php
    include_once 'includes/database.inc.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Altis Stats - Stats</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
    <?php
  require "required/header.php";
?>

    <h1>ADMIN LOGIN</h1>

    <section>
        <div class="login">
            <div class="login-triangle"></div>
            <form class="login-container" action="includes/login.inc.php" method="POST">
                <p><input type="text" placeholder="Username"></p>
                <p><input type="password" placeholder="Password"></p>
                <p><input type="submit" value="Log in"></p>
            </form>
        </div>
    </section>

    <script>
    function myFunction() {
        var x = document.getElementById("myLinks");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }
    </script>

    <?php
  require "required/footer.php";
?>
</body>

</html>