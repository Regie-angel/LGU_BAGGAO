<?php

include('../../../admin/database/index.php');

session_start();

?>

<!DOCTYPE html>
<html lang = "en" dir = "ltr">

    <head>
    
        <meta charset="UTF-8">

        <link rel="stylesheet" href="../../css/queue.css">
    
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <title>Department of Agriculture Office</title>
    
    </head>

    <body style = "background-image: linear-gradient(rgba(0, 0, 0, 0.9),rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0)), url('../../../img/<?php $query=$database->query("select * from `lgubaggao` where `contentID` = '1'"); while($data=$query->fetch_array()){ echo $data['background'];} ?>');">

        <div class = "header">

            <h1>LOCAL GOVERNMENT UNIT OF BAGGAO</h1>

        </div>

        <div class="queue-content">
        
            <h1>DEPARTMENT OF AGRICULTURE OFFICE</h1>

            <center>

                <ul>

                    <a href = "Priority Lane/?DAO_ticket=<?php 
                        
                            $fetchqueue = "SELECT * FROM queue WHERE Office = 'Department Of Agriculture Office' AND type = 'P' ORDER BY queueNo DESC LIMIT 1"; 
                            
                            $queue = mysqli_query($database, $fetchqueue); 
                                
                            if(mysqli_num_rows($queue) > 0) { 
                                
                                foreach($queue as $data) { 
                                    
                                    $queueNum = $data['queueNo'] + 1; 
                                    
                                    echo "$queueNum";
                                
                                }
                            
                            } 
                            
                            else {

                                $fetchqueue = "SELECT * FROM queuing WHERE office = 'Department Of Agriculture Office' AND type = 'P' ORDER BY queueID DESC LIMIT 1"; 
                                
                                $queue = mysqli_query($database, $fetchqueue); 
                                
                                if(mysqli_num_rows($queue) > 0) { 
                                    
                                    foreach($queue as $data) { 
                                        
                                        $queueNum=$data['queueID'] + 1; 
                                        
                                        echo $queueNum;
                                    
                                    }
                                                    
                                } 
                                
                                else {
                                    
                                    echo "5001";
                                
                                } 
                            
                            } 
                                    
                        ?>"><li>PWD, Senior Citizen, Etc.</li></a>

                    <a href = "Non-Priority Lane/?DAO_ticket=<?php 
                        
                            $fetchqueue = "SELECT * FROM queue WHERE Office = 'Department Of Agriculture Office' AND type = 'NP' ORDER BY queueNo DESC LIMIT 1"; 
                            
                            $queue = mysqli_query($database, $fetchqueue); 
                                
                            if(mysqli_num_rows($queue) > 0) { 
                                
                                foreach($queue as $data) { 
                                    
                                    $queueNum = $data['queueNo'] + 1; 
                                    
                                    echo "$queueNum";
                                
                                }
                            
                            } 
                            
                            else {

                                $fetchqueue = "SELECT * FROM queuing WHERE office = 'Department Of Agriculture Office' AND type = 'NP' ORDER BY queueID DESC LIMIT 1"; 
                                
                                $queue = mysqli_query($database, $fetchqueue); 
                                
                                if(mysqli_num_rows($queue) > 0) { 
                                    
                                    foreach($queue as $data) { 
                                        
                                        $queueNum=$data['queueID'] + 1; 
                                        
                                        echo $queueNum;
                                    
                                    }
                                                    
                                } 
                                
                                else {
                                    
                                    echo "5001";
                                
                                } 
                            
                            } 
                                    
                        ?>"><li>Non-Priority Lane</li></a>
                
                </ul>

                <br>

            </center>

            <div class="back">

                <a href = "../">BACK</a>

            </div>

        </div>
        
    </body>

</html>