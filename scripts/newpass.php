<!DOCTYPE html>
<html>
    <head>
        <title>
            Mijn account - geheimesite.nl
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="../css/main.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
            include "../includable/nindo_header.php";
            include("../connection.php");

            if($_SESSION['login19'] == true) {
                if(isset($_POST['newpass'])) {
                    $password = strip_tags($_POST['newpassword']);
                    $username = $_SESSION['n_name'];
                    $id = $_SESSION['id'];

                    $password= $conn->real_escape_string($password);
                    $username= $conn->real_escape_string($username);

                    $sql = "UPDATE userinfo SET password='$password' WHERE loginname = '$username' AND id = '$id'";

                    $result = $conn->query($sql);

                    echo("Wachtwoord succesvol veranderd naar: $password!<br><a href='../account/index.php'>OK</a>");
                }
            }
        ?>
    </body>
</html>