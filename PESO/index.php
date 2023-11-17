<?php

    include('../admin/database/index.php');

    session_start();

?>

<!DOCTYPE html>

<html lang = "en" dir = "ltr">

    <head>
    
        <meta charset="UTF-8">
    
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="../css/stylesheet.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <title> LGU Baggao | Public Employment Service Office</title>
    
    </head>

    <body style = "background-image:  linear-gradient(to left, black,rgba(0,0,0,0.7)), url('../img/<?php $query=$database->query("select * from `lgubaggao` where `contentID` = '1'"); while($data=$query->fetch_array()){ echo $data['background'];} ?>');">

        <div id="mySidenav" class="sidenav">

            <p href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</p>
            <a href="../PESO/" class = "active">PESO</a>
            <a href="../BPLO/">BPLO</a>
            <a href="../Treasury Office/">TREASURY OFFICE</a>
            <a href="../MSWDO/">MSWDO</a>
            <a href="../DA Office/">DA OFFICE</a>
            <a href="../Civil Registrar Office/">CIVIL REGISTRAR OFFICE</a>
            <a href="../Mayor's Office/">MAYORS OFFICE</a>
            
            <hr>

            <a href="../Feedback/">GIVE FEEDBACK</a>

        </div>
        
        <span onclick="openNav()">OFFICE &#9776;</span>

        <div id="header">

            <h1> 

                <img src = "../img/<?php $query=$database->query("select * from `lgubaggao` where `contentID` = '1'"); while($data=$query->fetch_array()){ echo $data['logo'];} ?>" align = "center">
                
                LOCAL GOVERNMENT UNIT OF BAGGAO
            
            </h1>

        </div>

        <div class="fbarea">
            
            <div class="fbcontent">

                <div class="img">

                    <img src = "../img/<?php $query=$database->query("select * from `lgubaggao` where `contentID` = '1'"); while($data=$query->fetch_array()){ echo $data['logo'];} ?>" align = "center">
                
                </div>
                
                <hr>

                <h2>MISSION</h2>

                    <p>

                        <?php 
                            
                            $query=$database->query("select * from `mission`"); 

                            while($data=$query->fetch_array()) { 

                                ?> 
                                
                                    <?php echo $data['mission'];?><br></br> 
                                    
                                <?php 

                            } 

                        ?>

                    </p>

                <h2>VISION</h2>

                    <p>

                        <?php 
                            
                            $query=$database->query("select * from `vision`"); 

                            while($data=$query->fetch_array()) { 

                                ?> 
                                
                                    <?php echo $data['vision'];?><br></br> 
                                    
                                <?php 

                            } 

                        ?>

                    </p>

                <h2>SERVICE PLEDGE</h2>

                    <p>

                        <?php 
                            
                            $query=$database->query("select * from `pledge`"); 

                            while($data=$query->fetch_array()) { 

                                ?> 
                                
                                    <?php echo $data['pledge'];?><br></br> 
                                    
                                <?php 

                            } 

                        ?>

                    </p>

            </div>
            
        </div>

        <div class="carea">

            <div class="ccontent">
                
                <div class="dash">
        
                    <a class= "btn" href="../Home"><i class = 'fa fa-long-arrow-right'></i></a>

                    <span class = "label-home">Exit</span>
                    
                </div>

                <h2>

                    PUBLIC EMPLOYMENT SERVICE OFFICE (PESO)

                </h2>

                <center>
                    
                    <ul>

                        <a href="Special Program for Employment of Students/"><li> Special Program for Employment of Students<i class= 'fa fa-long-arrow-right'></i></li></a>
                        <hr>
                        <a href="Tulong Panghanapbuhay sa Ating Disadvantaged o Displaced Worker/"><li> Tulong Panghanapbuhay sa Ating Disadvantaged/Displaced Worker<i class= 'fa fa-long-arrow-right'></i></li></a>
                        <hr>
                        <a href="Government Internship Program/"><li> Government Internship Program<i class= 'fa fa-long-arrow-right'></i></li></a>
                        <hr>
                        <a href="Overseas Workers Welfare Administration Livelihood Program/"><li> OWWA Livelihood Program <i class= 'fa fa-long-arrow-right'></i></li></a>

                    </ul>   

                </center>

            </div>

        </div>

        <script>
            
            function closeNav() {
            document.getElementById("mySidenav").style.display = "none";
            document.getElementById("mySidenav").style.width = "0";
            }

            function openNav() {
            document.getElementById("mySidenav").style.display = "block";
            document.getElementById("mySidenav").style.width = "280px";
            }
            
        </script>

    </body>

</html>
