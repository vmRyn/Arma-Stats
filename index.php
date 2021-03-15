<?php
    include_once 'includes/database.inc.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Altis Stats</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,700,700i,800,800i,900,900i" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
    <div class="topnav">
        <a href="index.php" class="active">ALTIS LIFE STATS</a>
        <div id="myLinks">
            <a href="gangs.php">Gangs</a>
            <a href="wanted.php">Wanted</a>
            <a href="cartels.php">Cartel Captures</a>
        </div>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>

    <br>

    <form action="index.php" method="post">
        <input type="text" name="search" placeholder="Search"/>
        <input type="submit" value="Find"/>

    <table>
        <tr>
            <th>Name</th>
            <th>Aliases</th>
            <th>SteamID</th>
            <th>Cash</th>
            <th>Bank Account</th>
            <th>Admin Level</th>
            <th>Cop Level</th>
            <th>Medic Level</th>
        </tr>

        <?php
            $sql = "SELECT * FROM clclients;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>" 
                    . $row['name'] . "</td><td>" 
                    . $row['aliases'] . "</td><td>" 
                    . $row['playerid'] . "</td><td>" 
                    . $row['cash'] . "</td><td>" 
                    . $row['bankacc'] ."</td><td>" 
                    . $row['adminlevel'] . "</td><td>" 
                    . $row['coplevel'] . "</td><td>" 
                    . $row['mediclevel'] . "</td></tr>";
                }
            }
        ?>
    </table>


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
</body>
</html>