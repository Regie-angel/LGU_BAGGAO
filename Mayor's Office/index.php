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

        <title> LGU Baggao | Mayor's Office</title>
    
    </head>

    <body style = "background-image:  linear-gradient(to left, black,rgba(0,0,0,0.7)), url('../img/<?php $query=$database->query("select * from `lgubaggao` where `contentID` = '1'"); while($data=$query->fetch_array()){ echo $data['background'];} ?>');">

        <div id="mySidenav" class="sidenav">

            <p href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</p>
            <a href="../PESO/">PESO</a>
            <a href="../BPLO/">BPLO</a>
            <a href="../Treasury Office/">TREASURY OFFICE</a>
            <a href="../MSWDO/">MSWDO</a>
            <a href="../DA Office/">DA OFFICE</a>
            <a href="../Civil Registrar Office/">CIVIL REGISTRAR OFFICE</a>
            <a href="../Mayor's Office/" class = "active">MAYORS OFFICE</a>
            
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

                    MAYORS OFFICE

                </h2>

                <p style = "text-align: justify;">The Office of the City Mayor (OCM) enforces all laws and ordinances relative to the 
                    governance of the city and implements all approved policies, programs, projects, services
                    , and activities of the city; initiates and maximizes the generation of sources and applies 
                    the same to the implementation of development plans, programs, objectives; and ensures
                    the delivery of basic services and the provision of adequate facilities for the city.</p>

                <hr>

                <div class="content">

                <h3>

                    Frequelty Ask Questions

                </h3>

                    <p class = "dropdown-btn">REQUEST FOR ISSUANCE OF MAYOR’S CLEARANCE AND/OR CERTIFICATION <i class = 'fa fa-caret-down'></i></p>
                    <div class="dropdown-container">

                        <p> 

                            Issuance of clearance and/or certification from the Office of the Mayor for purposes of 
                            the following:
                            <br>
                            <br>
                            Local employment
                            <br>
                            Business Requirement
                            <br>
                            PNP/AFP/PMA/Reservist/BFP Admissions
                            <br>
                            Travel Abroad
                            <br>
                            Record check
                            <br>
                            Marriage requirement
                            <br>
                            Correction of Entry (Birth Certificate)
                            <br>
                            License to own firearms/sell firecrackers
                            <br>
                            Certification to Solemnize Marriage
                            <br>
                            Municipality Certification of Unemployment (DepEd, SHS Voucher, and ESC)
                            <br>
                            Authentication and/or Certification of Residency (DFA req)
                            <br>
                            Affidavit and/or Certification of Support
                            <br>
                            <br>
                            <br>
                            GUIDES
                            <br>
                            <br>
                            How To Process Late Registration For Certificate Of Live Birth
                            <br>
                            Free Late registration of Certificate of Live Birth from ages zero to seventeen years old
                            (0 to 17) for indigent parents whose child was born in Quezon City.
                            <br>
                            <br>
                            <br>
                            Requirements:
                            <br>
                            <br>
                            Fully accomplished Certificate of Live Birth Form (Municipal Form No. 102)
                            <br>
                            Signed Affidavit for Delayed Registration (at the back of the Certificate of Live Birth Form)
                            <br>
                            Negative Certification of Birth from the Philippine Statistics Authority- (PSA)
                            <br>
                            Certificate of No Record (CNR) from the Local Civil Registry
                            <br>
                            1 photocopy of the Marriage Certificate of Parents (if married)
                            <br>
                            Signed Affidavit to Use the Surname of the Father (if parents are not married)
                            <br>
                            Signed Joint Affidavit of Two Disinterested Persons (if parents are not married)
                            <br>
                            1 photocopy of Valid ID (preferably QCitizen ID) or Cedula
                            <br>
                            <br>
                            <br>
                            Additional requirements:
                            <br>
                            <br>
                            <br>
                            For 6 years old and below, any of the following:
                            <br>
                            <br>
                            1 photocopy of the immunization chart (baby book)
                            <br>
                            1 original and 1 photocopy of medical certificate (if hospital born)
                            <br>
                            <br>
                            For 7 to 17 years old, 2 of the following:
                            <br>
                            <br>
                            1 photocopy of the immunization chart
                            <br>
                            1 photocopy of medical record
                            <br>
                            1 photocopy of the school record (Form 137)
                            <br>
                            Notarized Affidavit of Abandonment (If applicable)
                            <br>
                            <br>
                            Reminder:
                            <br>
                            <br>
                            Bring the original copies of the required documents for verification
                            <br>
                            <br>
                            Process:
                            <br>
                            <br>
                            Get the Certificate of Live Birth form at the City Civil Registry Department.
                            <br>
                            Submit the fully accomplished Certificate of Live Birth and all necessary requirements to 
                            the Birth Division of the Civil Registry Department.
                            <br>
                            Wait for the release of the registered Certificate of Live Birth after the mandatory posting
                            period of 10 days. 

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
