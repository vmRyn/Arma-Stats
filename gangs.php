<?php
    include_once 'includes/database.inc.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Altis Stats - Gangs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,700,700i,800,800i,900,900i" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
<?php
  require "required/header.php";
?>

    <br>

    <h1>ALTIS LIFE | GANGS</h1>

    <table>
        <tr>
            <th>Gang ID</th>
            <th>Gang Name</th>
            <th>Owner</th>
            <th>Currently Online</th>
            <th>Gang Tag</th>
            <th>Gang Bank</th>
            <th>Gang Level</th>
        </tr>

        <?php
            $sql = "SELECT * FROM clgangs;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>" 
                    . $row['id'] . "</td><td>" 
                    . $row['name'] . "</td><td>" 
                    . $row['owner'] . "</td><td>" 
                    . $row['active'] . "</td><td>" 
                    . $row['tag'] . "</td><td>" 
                    . $row['bank'] . "</td><td>"
                    . $row['level'] ."</td></tr>";
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