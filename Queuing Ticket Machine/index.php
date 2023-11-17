<?php

include('../admin/database/index.php');

session_start();

?>

<!DOCTYPE html>
<html lang = "en" dir = "ltr">

    <head>
    
        <meta charset="UTF-8">

        <link rel="stylesheet" href="css/queue.css">
    
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <title> LGU Baggao | </title>
    
    </head>

    <body style = "background-image: linear-gradient(rgba(0, 0, 0, 0.9),rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0)), url('../img/<?php $query=$database->query("select * from `lgubaggao` where `contentID` = '1'"); while($data=$query->fetch_array()){ echo $data['background'];} ?>');">

        <div class = "header">

            <h1>LOCAL GOVERNMENT UNIT OF BAGGAO</h1>

        </div>

        <div class="content">

            <img src = "../img/<?php $query=$database->query("select * from `lgubaggao` where `contentID` = '1'"); while($data=$query->fetch_array()){ echo $data['logo'];} ?>">

            <p>LGU-BAGGAO <br> CITIZEN SERVICE SUPPORT</p>

            <a href = "Offices/">Get Started</a>

        </div>

        <div class="footer">

            <marquee behavior = "scroll" direction = "left"> 
                
                <p>
                    

                    <a>Contact Us : </a>
                    
                    <a><?php $query=$database->query("select * from `lgubaggao` where `contentID` = '1'"); while($data=$query->fetch_array()){ echo $data['contact'];} ?> <i class = "fa fa-phone"></i></a>

                    <a>||</a>
                    
                    <a href = "https://www.<?php $query=$database->query("select * from `lgubaggao` where `contentID` = '1'"); while($data=$query->fetch_array()){ echo $data['email'];} ?>"><?php $query=$database->query("select * from `lgubaggao` where `contentID` = '1'"); while($data=$query->fetch_array()){ echo $data['email'];} ?> <i class = "fa fa-envelope"></i></a>

                    <a>||</a>
                    
                    <a href = "https://<?php $query=$database->query("select * from `lgubaggao` where `contentID` = '1'"); while($data=$query->fetch_array()){ echo $data['website'];} ?>"><?php $query=$database->query("select * from `lgubaggao` where `contentID` = '1'"); while($data=$query->fetch_array()){ echo $data['website'];} ?> <i class = "fa fa-globe"></i></a>

                    <a>||</a>
                    
                    <a href = "https://www.<?php $query=$database->query("select * from `lgubaggao` where `contentID` = '1'"); while($data=$query->fetch_array()){ echo $data['facebook'];} ?>"> Baggao Information Office <i class = "fa fa-facebook-official"></i></a>

                    <a>||</a>
                    
                    <a><?php $query=$database->query("select * from `lgubaggao` where `contentID` = '1'"); while($data=$query->fetch_array()){ echo $data['location'];} ?> <i class = "fa fa-map-marker"></i></a>
                    
                    <a>| All Rights Reserve @ LGU Baggao 2023</a>

                    <span></span>

                    <a>Contact Us : </a>
                    
                    <a><?php $query=$database->query("select * from `lgubaggao` where `contentID` = '1'"); while($data=$query->fetch_array()){ echo $data['contact'];} ?> <i class = "fa fa-phone"></i></a>

                    <a>||</a>
                    
                    <a href = "https://www.<?php $query=$database->query("select * from `lgubaggao` where `contentID` = '1'"); while($data=$query->fetch_array()){ echo $data['email'];} ?>"><?php $query=$database->query("select * from `lgubaggao` where `contentID` = '1'"); while($data=$query->fetch_array()){ echo $data['email'];} ?> <i class = "fa fa-envelope"></i></a>

                    <a>||</a>
                    
                    <a href = "https://<?php $query=$database->query("select * from `lgubaggao` where `contentID` = '1'"); while($data=$query->fetch_array()){ echo $data['website'];} ?>"><?php $query=$database->query("select * from `lgubaggao` where `contentID` = '1'"); while($data=$query->fetch_array()){ echo $data['website'];} ?> <i class = "fa fa-globe"></i></a>

                    <a>||</a>
                    
                    <a href = "https://www.<?php $query=$database->query("select * from `lgubaggao` where `contentID` = '1'"); while($data=$query->fetch_array()){ echo $data['facebook'];} ?>"> Baggao Information Office <i class = "fa fa-facebook-official"></i></a>

                    <a>||</a>
                    
                    <a><?php $query=$database->query("select * from `lgubaggao` where `contentID` = '1'"); while($data=$query->fetch_array()){ echo $data['location'];} ?> <i class = "fa fa-map-marker"></i></a>
                    
                    <a>| All Rights Reserve @ LGU Baggao 2023</a>
                
                </p>
            
            </marquee>

        </div>
        
    </body>

</html>

