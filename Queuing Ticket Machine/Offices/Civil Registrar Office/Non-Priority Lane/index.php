<?php

include('../../../../admin/database/index.php');

session_start();

    $ticket = $_GET['CRO_ticket'];

    $database->query("insert into queue(queueNo, Office, type) values ('$ticket', 'Civil Registrar Office', 'NP')");

    echo "<script type = 'text/javascript'>window.print(); onafterprint=function(){window.location.href = '../../../'}</script>";

?>

<!DOCTYPE html>
<html lang = "en" dir = "ltr">

    <head>
    
        <meta charset="UTF-8">

        <link rel="stylesheet" href="style.css">
    
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <title>Civil Registrar Office</title>

        <style>

            *{
                border: 0;
                box-sizing: content-box;
                color: inherit;
                font-family: inherit;
                font-size: inherit;
                font-style: inherit;
                font-weight: inherit;
                line-height: inherit;
                list-style: none;
                margin: 0px;
                padding: 0px;
                text-decoration: none;
                vertical-align: top;
            }

            *[contenteditable]{
                border=radius: 0.25em;
                min-width: 1em;
                outline: 0;
                cursor: pointer;

            }

            *[contenteditable]:hover, *[contenteditable]:focus, td:hover *[contenteditable], td:focus *[contenteditable], img.hover{
                background: #DEF;
                box shadow: 0 0 1em 0.5em #DEF;
            }

            span[contenteditable]{
                display: inline-block;
            }

            h1 { 
                font: 8px/1 'Open Sans' , sans-serif;
                margin-top: 2px;
                font: bold sans-serif; 
                font-weight: 800;
                letter-spacing: 0.3em; 
                text-align: center; 
                text-transform: uppercase;
            }

            h5 { 
                font: 8px/1 'Open Sans' , sans-serif;
                margin-top: 2px;
                font: bold sans-serif; 
                text-align: center; 
            }

            h3 { 
                text-align: center; 
                font-weight: 900; 
                margin-top: 2px; 
            }

            html{
                font: 10px/1 'Open Sans' , sans-serif;
                overflow: auto;
                padding: 0.5in;
                background: #999;
                cursor: default;
            }

            body{
                box-sizing: border-box;
                height: 1.5in;
                margin: 240px auto;
                overflow: hidden;
                padding: 0.15in;
                width: 2.5in;
                background: #fff;
                border-radius: 1px;
                box-shadow: 0 0 1in -0.25in rgba(0,0,0,0.5);
            }

            header{
                border: 1px solid black;
                margin: 0 0 3em;
            }

            header:after{
                clear: both;
                content: "";
                display: table;
            }

            img{
                margin-top: 4px;
            }

            @media print{
                *{
                    -webkit-print-color-adjust: exact;
                }
                
                html{
                    background: none;
                    padding: 0;
                }

                body{
                    box-shadow: none;
                    margin: 0;
                }
                span:empty{
                    display: none;
                }
                @page{
                    margin: 0;
                }
            }

        </style>
    
    </head>

    <body>

        <center>

            <header>

            <img src = "../../../../img/<?php $query=$database->query("select * from `lgubaggao` where `contentID` = '1'"); while($data=$query->fetch_array()){ echo $data['logo'];} ?>" height = "25px" width = "25px"/>
                
                <h1>LOCAL GOVERNMENT UNIT OF<br>BAGGAO</h1>
                <h5>Civil Registrar Office</h5>
                <h3>
                    <?php
                        echo "$ticket"; 
                    ?>
                </h3>

            </header>

        </center>

    </body>

</html>