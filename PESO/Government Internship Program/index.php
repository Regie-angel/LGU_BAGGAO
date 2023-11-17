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

        <title> PESO | Government Internship Program</title>
    
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

                    GOVERNMENT INTERNSHIP PROGRAM (GIP)

                </h2>

                <hr>

                <div class="content">

                <h3>

                    Frequelty Ask Questions

                </h3>

                    <p class = "dropdown-btn">What is GIP program? <i class = 'fa fa-caret-down'></i></p>
                        <div class="dropdown-container">
                            <p>The DOLE-Government Internship Program provides three to six (3-6) month's
                                internship opportunity for high school, technical- vocational, or college graduates 
                                who wants to pursue a career in public service in either local or national government.</p>
                        </div>

                        <hr>
                        
                    <p class = "dropdown-btn">How to apply for GIP? <i class = 'fa fa-caret-down'></i></p>
                        <div class="dropdown-container">
                            <p>Via Personal Visit: Visit the nearest DOLE Field Office in your area form
                                Monday- Friday, 8:00 AM to 5:00 PM and submit all the requirements.</p>
                        </div>

                    <hr>

                    <p class = "dropdown-btn">What are the requirements needed in applying GIP? <i class = 'fa fa-caret-down'></i></p>
                        <div class="dropdown-container">
                            <p>a. Transcript of Records (TOR), or
                            <br>
                                b. Form 137/Form 138, or 
                            <br>
                                c. Diploma or Certificate of Graduation of
                            <br>
                                d. Certification from the School/Institution or any document proof equivalent to
                                this effect.</p>
                        </div>

                    <hr>

                    <p class = "dropdown-btn">Who are qualified for GIP? <i class = 'fa fa-caret-down'></i></p>
                        <div class="dropdown-container">
                            <p>*Individuals aged 18-30 years old, except those as may be determined by DOLE
                                Regional Offices. Individuals aged 31 years and above may qualify as beneficiaries
                                on the following conditions.
                            <br>
                                ( Those with no experience or intermittent work experience; except those identified
                                under Section 2 (d) and (e) of the Department Order (DO) No. 204-A.)
                            <br>
                                ( Those who were displaced or to be displaced due to natural or man-made disasters.
                            <br>
                                * At least graduate of High School or Senior High School, or it's equivalent level under
                                the Alternative Learning System, or Technical-Vocational graduate; and
                            <br>
                                * Without work experience except those identified under Section 2 (d) and (e) of the 
                                DO No. 204-A.)
                            <br>
                                The Program may also be extended to the following groups of disadvantaged persons 
                                provided that they meet the qualifications:
                            <br>
                                *Victims of armed conflicts;
                            <br>
                                *Rebel Returnees
                            <br>
                                *Persons with Disabilities (PWD's); and
                            <br>
                                * Indigenous </p>
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
