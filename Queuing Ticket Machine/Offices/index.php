<?php

    include('../../admin/database/index.php');

    session_start();

?>

<!DOCTYPE html>
<html lang = "en" dir = "ltr">

    <head>
    
        <meta charset="UTF-8">

        <link rel="stylesheet" href="../css/queue.css">
    
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <title> LGU Baggao | Offices</title>
    
    </head>

    <body style = "background-image: linear-gradient(rgba(0, 0, 0, 0.9),rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0)), url('../../img/<?php $query=$database->query("select * from `lgubaggao` where `contentID` = '1'"); while($data=$query->fetch_array()){ echo $data['background'];} ?>');">

        <div class = "header">

            <h1>LOCAL GOVERNMENT UNIT OF BAGGAO</h1>

        </div>

        <div class="queue-content">
        
            <h1>SELECT OFFICE</h1>

            <center>

                <ul>

                    <a href = "Public Employment Service Office/"><li>PESO</li></a>
                    <a href = "Business Permit and Licensing Office/"><li>BPLO</li></a>
                    <a href = "Treasury Office/"><li>TREASURY</li></a>
                    <a href = "Municipal Social Welfare and Development Office/"><li>MSWDO</li></a>
                    <a href = "Department of Agriculture Office/"><li>DA</li></a>
                    <a href = "Civil Registrar Office/"><li>CRO</li></a>
                    <a href = "Mayors Office/"><li>MAYORS OFFICE</li></a>

                </ul>

            </center>

        </div>
        
    </body>

</html>

