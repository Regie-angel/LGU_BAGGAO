<?php include('../database/index.php'); session_start(); if(isset($_SESSION['admin'])){ header("location:../"); } if(isset($_SESSION['queue'])){ header("location:../Queue/"); } ?>
<!DOCTYPE html>
<html lang = "en" dir = "ltr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/index.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <title> LGU Baggao | Login Account</title>
    </head>
    <body style = "background-image:  linear-gradient(rgba(0, 0, 0, 0.9),rgba(0, 0, 0, 0.6),rgba(0, 0, 0, 0)), url('../../img/<?php $query=$database->query("select * from `lgubaggao` where `contentID` = '1'"); while($data=$query->fetch_array()){ echo $data['background'];} ?>');">
        <div class="content">
            <img src = "../../img/<?php $query=$database->query("select * from `lgubaggao` where `contentID` = '1'"); while($data=$query->fetch_array()){ echo $data['logo'];} ?>">
            <p>LGU-BAGGAO <br> CITIZEN SERVICE SUPPORT</p>
            <center>
                <form method="POST" action="privacy mutation/">
                    <input class = "input" type = "text" name = "username"  onkeydown="return /[a-z0-9@_]/i.test(event.key)" onblur="if (this.value == '') {this.value = '';}" onfocus="if (this.value == '') {this.value = '';}" placeholder = "Enter Username" required>
                    <br>
                    <input class = "input" type = "password" name = "password"  onkeydown="return /[a-z0-9@_]/i.test(event.key)" onblur="if (this.value == '') {this.value = '';}" onfocus="if (this.value == '') {this.value = '';}" placeholder = "Enter Password" required>
                    <br>
                    <input type="submit" class = "sbmtbtn" name = "sbmtbtn" value = "LOGIN">
                </form>
            </center>
        </div>
    </body>
</html>

