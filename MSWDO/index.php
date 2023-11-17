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

        <title> LGU Baggao | Municipal Social Welfare and Development Office </title>
    
    </head>

    <body style = "background-image:  linear-gradient(to left, black,rgba(0,0,0,0.7)), url('../img/<?php $query=$database->query("select * from `lgubaggao` where `contentID` = '1'"); while($data=$query->fetch_array()){ echo $data['background'];} ?>');">

        <div id="mySidenav" class="sidenav">

            <p href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</p>
            <a href="../PESO/">PESO</a>
            <a href="../BPLO/">BPLO</a>
            <a href="../Treasury Office/">TREASURY OFFICE</a>
            <a href="../MSWDO/" class = "active">MSWDO</a>
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

                    MUNICIPAL SOCIAL WELFARE AND DEVELOPMENT OFFICE (MSWDO)

                </h2>

                <br>

                <p>

                    PROVISION OF ASSISTANCE TO INDIVIDUALS IN CRISIS SITUATION (AICS)

                    <br>

                    ABOUT THE SERVICE:

                    <br>
                    <br>

                    Provision of timely and appropriate aid to individuals/ families who are in crisis situation to 
                    avail financial assistance in order to cope up with present problems brought about by dysfunctional
                    situations that may be caused by poor health conditions, natural and manmade calamities.

                </p>

                <hr>

                <div class="content">

                <h3>

                    Frequelty Ask Questions

                </h3>

                    <p class = "dropdown-btn">STEPS <i class = 'fa fa-caret-down'></i></p>
                    <div class="dropdown-container">

                        <p>

                            1. Sign client logbook
                            <br>
                            2. Verification of requirements
                            <br>
                            3. Assessment and Endorsement
                            <br>
                            4. Proceed to Mayor’s Office for recommendation
                            <br>
                            5. Intake interview and preparation of vouchers
                            <br>
                            6. Release of vouchers
                            <br>
                            7. Processing of vouchers
                            <br>
                            8. Release of Financial Assistance


                        </p>

                    </div>
                    
                    <p class = "dropdown-btn">YOU NEED TO PRESENT <i class = 'fa fa-caret-down'></i></p>
                    <div class="dropdown-container">

                        <p>

                            A. Certificate of Indigency

                            <br>

                            B. Photocopy of 2 valid ID’s

                            <br>

                            C. Referral Slip from SWAD (optional)

                            <br>

                            <br>

                            Additional Requirements:

                            <br>

                            <br>

                            *MEDICAL ASSISTANCE

                            <br>

                            <br>

                            -Certificate of Confinement/ Medical Certificate

                            <br>

                            -Hospital Bill and/or Promissory Note

                            <br>

                            -Clinical Abstract

                            <br>

                            -Medical Treatment Protocol

                            <br>

                            -Laboratory Request

                            <br>

                            -Charge Slip/Price Quotation

                            <br>

                            -Official Receipt of medicines and prescription
                            
                            <br>
                            
                            <br>

                            *BURIAL ASSISTANCE

                            <br>
                            
                            <br>

                            -Death Certificate

                            <br>

                            -Funeral Contract

                            <br>
                            
                            <br>

                            *FIRE VICTIMS

                            <br>
                            
                            <br>

                            -Spot report

                            <br>

                            -Pictures

                            <br>
                            
                            <br>

                            *CEDC/CICL/VAWC/WEDC/Balik Probinsya

                            <br>
                            
                            <br>

                            -Request letter

                            <br>

                            -Police Report

                            <br>
                            
                            <br>

                            *DRUG SURRENDEREES

                            <br>
                            
                            <br>

                            -Request letter

                            <br>

                            -Court Order

                        </p>

                    </div>

                </div>

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

            var dropdown = document.getElementsByClassName("dropdown-btn");
            var i;

            for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
                } else {
                dropdownContent.style.display = "block";
                }
            });
            }
            
        </script>

    </body>

</html>
