<?php

    include('../../admin/database/index.php');

    session_start();

?>

<!DOCTYPE html>

<html lang = "en" dir = "ltr">

    <head>
    
        <meta charset="UTF-8">
    
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="../css/stylesheet.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <title> PESO | Tulong Panghanapbuhay sa Ating Disadvantaged / Displaced Worker</title>
    
    </head>

    <body style = "background-image:  linear-gradient(to left, black,rgba(0,0,0,0.7)), url('../../img/<?php $query=$database->query("select * from `lgubaggao` where `contentID` = '1'"); while($data=$query->fetch_array()){ echo $data['background'];} ?>');">

        <div id="mySidenav" class="sidenav">

            <p href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</p>
            <a href="../" class = "active">PESO</a>
            <a href="../../BPLO/">BPLO</a>
            <a href="../../Treasury Office/">TREASURY OFFICE</a>
            <a href="../../MSWDO/">MSWDO</a>
            <a href="../../DA Office/">DA OFFICE</a>
            <a href="../../Civil Registrar Office/">CIVIL REGISTRAR OFFICE</a>
            <a href="../../Mayor's Office/">MAYORS OFFICE</a>
            <hr>            
            <a href="../../Feedback/">GIVE FEEDBACK</a>

        </div>
        
        <span onclick="openNav()">OFFICE &#9776;</span>

        <div id="header">

            <h1> 

                <img src = "../../img/<?php $query=$database->query("select * from `lgubaggao` where `contentID` = '1'"); while($data=$query->fetch_array()){ echo $data['logo'];} ?>" align = "center">
                
                LOCAL GOVERNMENT UNIT OF BAGGAO
            
            </h1>

        </div>

        <div class="fbarea">
            
            <div class="fbcontent">

                <div class="img">

                    <img src = "../../img/<?php $query=$database->query("select * from `lgubaggao` where `contentID` = '1'"); while($data=$query->fetch_array()){ echo $data['logo'];} ?>" align = "center">
                
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
        
                    <a class= "btn" href="../"><i class = 'fa fa-long-arrow-right'></i></a>

                    <span class = "label">Go Back</span>

                </div>

                <h2>

                    TULONG PANGHANAPBUHAY SA ATING DISADVANTAGED/DISPLACED WORKER (TUPAD)

                </h2>

                <hr>

                <div class="content">

                <h3>

                Frequelty Ask Questions

                </h3>

                    <p class = "dropdown-btn">What is TUPAD program? <i class = 'fa fa-caret-down'></i></p>
                        <div class="dropdown-container">
                            <p>TUPAD or Tulong Panghanapbuhay sa Ating Disadvantaged/Displaced 
                                Workers is a community based package of assistance that provides emergency
                                employment for displaced workers, underemployed and seasonal workers, 
                                for a minimal period of 10 days, but not to exceed a maximum of 30 days 
                                depending on the nature of work to be performed.</p>
                        </div>

                        <hr>
                        
                    <p class = "dropdown-btn">How to apply for TUPAD? <i class = 'fa fa-caret-down'></i></p>
                        <div class="dropdown-container">
                            <p>You can apply to the TUPAD  program by the following the steps below:
                            <br>
                            <br>
                            Step 1: Visit the DOLE  Public Employment  Office of your municipality or barangay to have your name
                            added to the beneficiaries list. Additionally, you can send an email to your local DOLE office with your name, address, and phone number,
                            along with a note that you're applying for the TUPAD program.
                            <br>
                            Step 2: DOLE will quickly validate your data with your LGU.
                            <br>
                            Step 3: Wait for a response from the LGU's.
                            <br>
                            Step 4: At this point, you can enjoy working in TUPAD.</p>
                        </div>

                    <hr>

                    <p class = "dropdown-btn">What are the requirements needed in applying TUPAD? <i class = 'fa fa-caret-down'></i></p>
                        <div class="dropdown-container">
                            <p>There are initially NO requirements when adding your name to the TUPAD beneficiary list. 
                                Once you have been approved, the designated barangay or LGU will submit the listed
                                document to the DOLE office.
                            <br>
                            <br>
                                * Letter of Intent
                            <br>
                                * List of beneficiaries
                            <br>
                                * Memorandum of Agreement (MOA) or contract of Service between DOLE and the barangay
                                or LGU.</p>
                        </div>

                    <hr>

                    <p class = "dropdown-btn">Who are qualified for TUPAD? <i class = 'fa fa-caret-down'></i></p>
                        <div class="dropdown-container">
                            <p>The following are the eligible beneficiaries:
                            <br>
                                * Underemployed
                            <br>
                                * Workers who have been dismissed or laid off because a business has permanently closed or 
                                undergone retrenchment. 
                            <br>
                                * Self-employed workers who have lost their livelihoods due to natural disasters or calamities,
                                economic downturns, armed conflicts, or the seasonal nature of their jobs, including farmers
                                and fishermen.
                            <br>
                            <br>
                                The following, however, Do Not Qualify for the TUPAD Program:
                            <br>
                                * Age 17 and below.
                            <br>
                                *Individuals who received financial assistance from the Department of Social Welfare and 
                                Development.
                            <br>
                                * Government workers.</p>
                        </div>

                    <hr>

                    <p class = "dropdown-btn">What do TUPAD workers do? <i class = 'fa fa-caret-down'></i></p>
                        <div class="dropdown-container">
                            <p>Local Government Units participating in SPES assign students to clerical, encoding,
                                and messengerial duties, as well as other computer and programming jobs.</p>
                        </div>

                    <hr>

                    <p class = "dropdown-btn">How many hours can you work in the TUPAD program? <i class = 'fa fa-caret-down'></i></p>
                        <div class="dropdown-container">
                            <p>Social community projects, such as repair, maintenance, and/or improvement 
                                of common public facilities and infrastructure such as schools and health centers, 
                                debris clearing, de-clogging of canals, debris segregation and materials 
                                recovery, stockpiling and cleaning.</p>
                        </div>

                    <hr>

                    <p class = "dropdown-btn">How many working days are there in TUPAD? <i class = 'fa fa-caret-down'></i></p>
                        <div class="dropdown-container">
                            <p>The beneficiaries of TUPAD rendered 10 days of work.</p>
                        </div>

                    <hr>

                    <p class = "dropdown-btn">How much is TUPAD salary? <i class = 'fa fa-caret-down'></i></p>
                        <div class="dropdown-container">
                            <p>The beneficiaries will receive P3,500.00 for 10 days of work( which is based on 
                                the minimum wage rate in Cagayan) as their salary of service.</p>
                        </div>

                    <hr>

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
