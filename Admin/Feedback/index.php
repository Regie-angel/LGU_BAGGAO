<?php include('../database/index.php'); session_start(); if(!isset($_SESSION['admin'])){ header("location:../Login/"); } ?>
<!DOCTYPE html>
<html lang = "en" dir = "ltr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/stylesheet.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <title> Admin | Feedback </title>
    </head>
    <body style = "background-image: linear-gradient(to left, rgba(0, 0, 0, 0.364),rgba(0, 0, 0, 0.042)), url('../../img/<?php $query=$database->query("select * from `lgubaggao` where `contentID` = '1'"); while($data=$query->fetch_array()){ echo $data['background'];} ?>');">
        <div class="header">
            <h1> 
                <img src = "../../img/<?php $query=$database->query("select * from `lgubaggao` where `contentID` = '1'"); while($data=$query->fetch_array()){ echo $data['logo'];} ?>" align = "center">
                LOCAL GOVERNMENT UNIT OF BAGGAO
                <a href="../Logout/"> Logout <i class = 'fa fa-sign-out'></i></a>
            </h1>
        </div>
        <div class="content">
            <div id="mySidenav" class="sidenav">
                <a href="../../Admin/" class = "active">Dashboard</a>  
                <a href="../Photos/">Logo and Background</a>      
                <a href="../History/">History</a>   
                <a href="../Mission/">Mission</a>  
                <a href="../Vision/">Vision</a>   
                <a href="../Service Pledge/">Service Pledge</a>      
                <hr>       
                <a href="../Profile/">Admin Profile</a>
            </div>
            <div class="feedback">
                <a class = "close" href="../"><i class = 'fa fa-close'></i></a>
                <center>
                    <table class = "table" CELLSPACING=0>
                        <?php
                            $id = $_GET['id'];
                            $name = $_GET['name'];
                            $type = $_GET['feedback'];
                            $date = $_GET['date'];
                            $fetchfeedback = "SELECT * FROM feedback WHERE CONCAT(date) LIKE '%$date%' AND CONCAT(feedback_type) LIKE '%$type%'AND CONCAT(date) LIKE '%$date%' AND  CONCAT(feedbackID) LIKE '%$id%'";
                            $feedback = mysqli_query($database, $fetchfeedback);
                            if(mysqli_num_rows($feedback) > 0) {
                                foreach($feedback as $data) {
                                    ?>
                                        <tr>  
                                            <th colspan = "6" class = "header" style = "text-align: center;"><?php echo $data['feedback_type']; ?></th>
                                        </tr>
                                        <tr>
                                            <th style = "padding: 10px; font-size: 18px; width: 20%;">NAME:</th>
                                            <td style = "padding: 10px; font-size: 16px;"> <?php echo $data['fullname']; ?> </td>
                                            <th style = "padding: 10px; font-size: 18px; width: 10%;">DATE:</th>
                                            <td style = "padding: 10px; font-size: 16px;"> <?php echo $data['date']; ?> </td> 
                                            <th style = "padding: 10px; font-size: 18px; width: 10%;">TIME:</th>
                                            <td style = " padding: 10px; font-size: 16px;"> <?php echo $data['time']; ?> </td>
                                        </tr>
                                        <tr style = "height:150px;">  
                                            <th style = "padding: 10px; font-size: 18px; width: 10%;">FEEDBACK:</th>
                                            <td colspan = "5" style = "padding: 10px; font-size: 16px; text-align: justify;"> <?php echo $data['feedback_content']; ?></td>
                                        </tr>
                                    <?php
                                }
                            }
                        ?>
                    </table>
                </center>
            </div>
        </div>
    </body>
</html>