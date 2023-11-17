<?php

include('../admin/database/index.php');

session_start();

?>

<!DOCTYPE html>

<html lang = "en" dir = "ltr">

    <head>
    
        <meta charset="UTF-8">

        <link rel="stylesheet" href="../Queuing Ticket Machine/css/queue.css">

        <link rel="stylesheet" href="style.css">
    
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title> LOCAL GOVERNMENT UNIT OF BAGGAO</title>

        <style>

            body{
                align-items:left;
            }

            .queue-content h1{

                font-size: 48px;

            }

            .container{

                display: inline-block;
                margin: 20px;
                padding: .2%;
                width: 16%;
                font-weight: 600;
                font-size: 20px;
                border-radius: 5px;
                color: black;
                background-color: white;

            }

            .container h1{

                font-size: 24px;
                color: black;

            }

            span{

                right: 40px;
                bottom: 40px;
                position: absolute;
                text-align: center;
                padding: .2%;
                width: 18%;
                font-weight: 600;
                font-size: 24px;
                border-radius: 5px;
                color: black;
                background-color: white;
                padding: 20px;

            }

        </style>
    
    </head>

    <body style = "background-image:  linear-gradient(rgba(0, 0, 0, 0.9),rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0)), url('../img/<?php $query=$database->query("select * from `lgubaggao` where `contentID` = '1'"); while($data=$query->fetch_array()){ echo $data['background'];} ?>');">

        <div class="queue-content">

            <h1>LOCAL GOVERNMENT UNIT OF BAGGAO</h1>

            <center>

                <div class="container">

                    <h1>

                        Counter 1

                    </h1>

                    <p>

                        <hr>

                        <?php 

                            $fetchqueue = "SELECT * FROM queuing WHERE office = 'Public Employment Service Office' AND type = 'P' ORDER BY queueID ASC LIMIT 1";
                            
                            $queue = mysqli_query($database, $fetchqueue);

                            if(mysqli_num_rows($queue) > 0) {

                                foreach($queue as $data) {

                                    $queueNum = $data['queueID'];

                                    echo "P_$queueNum";

                                }

                            }

                            else 
                            
                            {

                                echo "Waiting!";

                            } 

                        ?> 

                        <hr>

                    </p>

                </div>

                <div class="container">

                    <h1>

                        Counter 2

                    </h1>

                    <p>

                        <hr>

                        <?php 

                            $fetchqueue = "SELECT * FROM queuing WHERE office = 'Public Employment Service Office' AND type = 'NP' ORDER BY queueID ASC LIMIT 1";
                            
                            $queue = mysqli_query($database, $fetchqueue);

                            if(mysqli_num_rows($queue) > 0) {

                                foreach($queue as $data) {

                                    $queueNum = $data['queueID'];

                                    echo "$queueNum";

                                }

                            }

                            else 
                            
                            {

                                echo "Waiting!";

                            } 

                        ?> 

                        <hr>

                    </p>

                </div>

                <div class="container">

                    <h1>

                        Counter 3

                    </h1>

                    <p>

                        <hr>

                        <?php 

                            $fetchqueue = "SELECT * FROM queuing WHERE office='Business Permit and Licensing Office' AND type='P' ORDER BY queueID ASC LIMIT 1";
                            
                            $queue = mysqli_query($database, $fetchqueue);

                            if(mysqli_num_rows($queue) > 0) {

                                foreach($queue as $data) {

                                    $queueNum = $data['queueID'];

                                    echo " P_$queueNum";

                                }

                            }

                            else 
                            
                            {

                                echo "Waiting!";

                            } 

                        ?> 

                        <hr>

                    </p>

                </div>

                <div class="container">

                    <h1>

                        Counter 4

                    </h1>

                    <p>

                        <hr>

                        <?php 

                            $fetchqueue = "SELECT * FROM queuing WHERE office='Business Permit and Licensing Office' AND type='NP' ORDER BY queueID ASC LIMIT 1";
                            
                            $queue = mysqli_query($database, $fetchqueue);

                            if(mysqli_num_rows($queue) > 0) {

                                foreach($queue as $data) {

                                    $queueNum = $data['queueID'];

                                    echo "$queueNum";

                                }

                            }

                            else 
                            
                            {

                                echo "Waiting!";

                            } 

                        ?> 

                        <hr>

                    </p>

                </div>

                <div class="container">

                    <h1>

                        Counter 5

                    </h1>

                    <p>

                        <hr>

                        <?php 

                            $fetchqueue = "SELECT * FROM queuing WHERE office='Treasury Office' AND type='P' ORDER BY queueID ASC LIMIT 1";
                            
                            $queue = mysqli_query($database, $fetchqueue);

                            if(mysqli_num_rows($queue) > 0) {

                                foreach($queue as $data) {

                                    $queueNum = $data['queueID'];

                                    echo " P_$queueNum";

                                }

                            }

                            else 
                            
                            {

                                echo "Waiting!";

                            } 

                        ?> 

                        <hr>

                    </p>

                </div>

                <div class="container">

                    <h1>

                        Counter 6

                    </h1>

                    <p>

                        <hr>

                        <?php 

                            $fetchqueue = "SELECT * FROM queuing WHERE office='Treasury Office' AND type='NP' ORDER BY queueID ASC LIMIT 1";
                            
                            $queue = mysqli_query($database, $fetchqueue);

                            if(mysqli_num_rows($queue) > 0) {

                                foreach($queue as $data) {

                                    $queueNum = $data['queueID'];

                                    echo "$queueNum";

                                }

                            }

                            else 
                            
                            {

                                echo "Waiting!";

                            } 

                        ?> 

                        <hr>

                    </p>

                </div>

                <div class="container">

                    <h1>

                        Counter 7

                    </h1>

                    <p>

                        <hr>

                        <?php 

                            $fetchqueue = "SELECT * FROM queuing WHERE office='Municipal Social Welfare and Development Office' AND type='P' ORDER BY queueID ASC LIMIT 1";
                            
                            $queue = mysqli_query($database, $fetchqueue);

                            if(mysqli_num_rows($queue) > 0) {

                                foreach($queue as $data) {

                                    $queueNum = $data['queueID'];

                                    echo " P_$queueNum";

                                }

                            }

                            else 
                            
                            {

                                echo "Waiting!";

                            } 

                        ?> 

                        <hr>

                    </p>

                </div>

                <div class="container">

                    <h1>

                        Counter 8

                    </h1>

                    <p>

                        <hr>

                        <?php 

                            $fetchqueue = "SELECT * FROM queuing WHERE office='Municipal Social Welfare and Development Office' AND type='NP' ORDER BY queueID ASC LIMIT 1";
                            
                            $queue = mysqli_query($database, $fetchqueue);

                            if(mysqli_num_rows($queue) > 0) {

                                foreach($queue as $data) {

                                    $queueNum = $data['queueID'];

                                    echo "$queueNum";

                                }

                            }

                            else 
                            
                            {

                                echo "Waiting!";

                            } 

                        ?> 

                        <hr>

                    </p>

                </div>

                <div class="container">

                    <h1>

                        Counter 9

                    </h1>

                    <p>

                        <hr>

                        <?php 

                            $fetchqueue = "SELECT * FROM queuing WHERE office='Department of Agriculture Office' AND type='P' ORDER BY queueID ASC LIMIT 1";
                            
                            $queue = mysqli_query($database, $fetchqueue);

                            if(mysqli_num_rows($queue) > 0) {

                                foreach($queue as $data) {

                                    $queueNum = $data['queueID'];

                                    echo " P_$queueNum";

                                }

                            }

                            else 
                            
                            {

                                echo "Waiting!";

                            } 

                        ?> 

                        <hr>

                    </p>

                </div>

                <div class="container">

                    <h1>

                        Counter 10

                    </h1>

                    <p>

                        <hr>

                        <?php 

                            $fetchqueue = "SELECT * FROM queuing WHERE office='Department of Agriculture Office' AND type='NP' ORDER BY queueID ASC LIMIT 1";
                            
                            $queue = mysqli_query($database, $fetchqueue);

                            if(mysqli_num_rows($queue) > 0) {

                                foreach($queue as $data) {

                                    $queueNum = $data['queueID'];

                                    echo "$queueNum";

                                }

                            }

                            else 
                            
                            {

                                echo "Waiting!";

                            } 

                        ?> 

                        <hr>

                    </p>

                </div>

                <div class="container">

                    <h1>

                        Counter 11

                    </h1>

                    <p>

                        <hr>

                        <?php 

                            $fetchqueue = "SELECT * FROM queuing WHERE office = 'Civil Registrar Office' AND type = 'P' ORDER BY queueID ASC LIMIT 1";
                            
                            $queue = mysqli_query($database, $fetchqueue);

                            if(mysqli_num_rows($queue) > 0) {

                                foreach($queue as $data) {

                                    $queueNum = $data['queueID'];

                                    echo "P_$queueNum";

                                }

                            }

                            else 
                            
                            {

                                echo "Waiting!";

                            } 

                        ?> 

                        <hr>

                    </p>

                </div>

                <div class="container">

                    <h1>

                        Counter 12

                    </h1>

                    <p>

                        <hr>

                        <?php 

                            $fetchqueue = "SELECT * FROM queuing WHERE office = 'Civil Registrar Office' AND type = 'NP' ORDER BY queueID ASC LIMIT 1";
                            
                            $queue = mysqli_query($database, $fetchqueue);

                            if(mysqli_num_rows($queue) > 0) {

                                foreach($queue as $data) {

                                    $queueNum = $data['queueID'];

                                    echo "$queueNum";

                                }

                            }

                            else 
                            
                            {

                                echo "Waiting!";

                            } 

                        ?> 

                        <hr>

                    </p>

                </div>

                <div class="container">

                    <h1>

                        Counter 13

                    </h1>

                    <p>

                        <hr>

                        <?php 

                            $fetchqueue = "SELECT * FROM queuing WHERE office='Mayors Office' AND type='P' ORDER BY queueID ASC LIMIT 1";
                            
                            $queue = mysqli_query($database, $fetchqueue);

                            if(mysqli_num_rows($queue) > 0) {

                                foreach($queue as $data) {

                                    $queueNum = $data['queueID'];

                                    echo " P_$queueNum";

                                }

                            }

                            else 
                            
                            {

                                echo "Waiting!";

                            } 

                        ?> 

                        <hr>

                    </p>

                </div>

                <div class="container">

                    <h1>

                        Counter 14

                    </h1>

                    <p>

                        <hr>

                        <?php 

                            $fetchqueue = "SELECT * FROM queuing WHERE office='Mayors Office' AND type='NP' ORDER BY queueID ASC LIMIT 1";
                            
                            $queue = mysqli_query($database, $fetchqueue);

                            if(mysqli_num_rows($queue) > 0) {

                                foreach($queue as $data) {

                                    $queueNum = $data['queueID'];

                                    echo "$queueNum";

                                }

                            }

                            else 
                            
                            {

                                echo "Waiting!";

                            } 

                        ?> 

                        <hr>

                    </p>

                </div>

            </center>

            <a href = "../Queuing/" id = "refresh" style = "display:none;"><button>Refresh</button></a>

        </div>
        
        <br>

        <br>

            <span id="datetime"></span>

        <script>

            function updateDateTime() {

            const now = new Date();

            const currentDateTime = now.toLocaleString();

            document.querySelector('#datetime').textContent = currentDateTime;
            }

            setInterval(updateDateTime, 0);

        </script>

        <script type = "text/javascript">

            window.onload = function(){
                var button = document.getElementById('refresh');
                setInterval(function(){
                    button.click();
                }, 1);
            };

        </script>
        
    </body>

</html>

