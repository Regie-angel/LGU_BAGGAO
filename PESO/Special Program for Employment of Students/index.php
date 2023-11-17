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

        <title> PESO | Special Program for Employment of Students</title>
    
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

                    SPECIAL PROGRAM FOR EMPLOYMENT OF STUDENTS (SPES)

                </h2>

                <hr>

                <div class="content">

                <h3>

                Frequelty Ask Questions

                </h3>

                    <p class = "dropdown-btn">What is SPES program? <i class = 'fa fa-caret-down'></i></p>
                        <div class="dropdown-container">
                            <p>The Special Program for Employment of Students (SPES) is DOLE's 
                                youth employment for bridging program which aims to provide 
                                temporary employment to poor but deserving students, out-of-school
                                youth, and dependents of displaced or would-be displaced workers
                                during summer and/or Christmas vacation or any time of the year to 
                                augment the family's income to help ensure that beneficiaries are able to 
                                pursue their education.</p>
                        </div>

                        <hr>
                        
                    <p class = "dropdown-btn">How to apply for SPES? <i class = 'fa fa-caret-down'></i></p>
                        <div class="dropdown-container">
                            <p> Follow these instructions to quickly apply for DOLE SPES:
                                <br>
                                <br>
                                For Students or Out-of-School Youth(OSY):
                                <br>
                                <br>
                                Step 1: Complete and gather any required documentation.
                                <br>
                                Step 2. Visit the Public Employment Service Office (PESO) in LGU
                                        Baggao and inquirer about SPES.
                                <br>
                                Step 3. Get ready for the initial screening and interview.
                                <br>
                                Step 4. The PESO will assess if you match the qualifications and 
                                            requirements of the participating employer.
                                <br>
                                Step 5. You will be recommended to the employer for consideration
                                        if you are required for a position. You will be referred to another
                                        participating employer(s) if you are not selected.
                                <br>
                                <br>
                                For Employers:
                                <br>
                                <br>
                                Step 1. Complete and gather any required documentation.
                                <br>
                                Step 2. Visit and inform the PESO for job matching.
                                <br>
                                Step 3. Wait for PESO's recommendation.</p>
                        </div>

                    <hr>

                    <p class = "dropdown-btn">What are the requirements needed in applying SPES? <i class = 'fa fa-caret-down'></i></p>
                        <div class="dropdown-container">
                            <p>The following are the requirements needed in applying SPES:
                                <br>
                                <br>
                                1. Resume with recent 2x2 picture.
                                <br>
                                2. Personal Assessment form.
                                <br>
                                3. Photocopy of PSA Birth Certificate.
                                <br>
                                4. Copy of Form 138 High School and Senior High School.
                                <br>
                                5. Recent grades and School Registration preferably in the second semester.</p>
                        </div>

                    <hr>

                    <p class = "dropdown-btn">Who are qualified for SPES? <i class = 'fa fa-caret-down'></i></p>
                        <div class="dropdown-container">
                            <p>The following are the qualifications for SPES:
                                <br>
                                <br>
                                1. Students or out-of-school youth (OSY) at least 15 but not more than 30 years of age.
                                <br>
                                2. Combined net income after tax of parents, including his/her own, if any, does not
                                exceed the regional poverty threshold.
                                <br>
                                3. Students must have obtained a passing general weighted average (GWA)
                                <br>
                                4. OSY must be certified by the local Social Welfare and Development Office
                                (SWDO) as OSY</p>
                        </div>

                    <hr>

                    <p class = "dropdown-btn">What do SPES students do? <i class = 'fa fa-caret-down'></i></p>
                        <div class="dropdown-container">
                            <p>Local Government Units participating in SPES assign students to clerical, encoding,
                                and messengerial duties, as well as other computer and programming jobs.</p>
                        </div>

                    <hr>

                    <p class = "dropdown-btn">How many hours can you work in the SPES program? <i class = 'fa fa-caret-down'></i></p>
                        <div class="dropdown-container">
                            <p>Ensure that SPES beneficiaries below 18 years of age shall work not more that eight
                                hours a day nor more than 40 hours a week and shall not be required to work from
                                10:00 pm to 6:00 am.</p>
                        </div>

                    <hr>

                    <p class = "dropdown-btn">How many working days are there in SPES? <i class = 'fa fa-caret-down'></i></p>
                        <div class="dropdown-container">
                            <p>After 20 working days, SPES beneficiaries will sign a Termination Report; this will also
                                be submitted to DOLE as part of the 40% wages requirements. SPES beneficiaries shall
                                submit their Daily Time Record (DTR) and Accomplishment report signed by the office
                                head.</p>
                        </div>

                    <hr>

                    <p class = "dropdown-btn">How much is SPES salary for students? <i class = 'fa fa-caret-down'></i></p>
                        <div class="dropdown-container">
                            <p>The students received their salaries for their 20-day employment under the SPES 
                                program of the municipality and the DOLE amounting to P9,846.40 each. Some 60
                                percent of the total salary of the SPES beneficiaries comes from the Municipal 
                                Government and the remaining 40 from the DOLE.</p>
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
