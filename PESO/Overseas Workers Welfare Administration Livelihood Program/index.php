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

        <title> PESO | Overseas Workers Welfare Aministration Livelihood</title>
    
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

                    OVERSEAS WORKERS WELFARE ADMINISTRATION  LIVELIHOOD PROGRAM

                </h2>

                <hr>

                <div class="content">

                <h3>

                Frequelty Ask Questions

                </h3>

                    <p class = "dropdown-btn">What is OWWA Livelihood program? <i class = 'fa fa-caret-down'></i></p>
                        <div class="dropdown-container">
                            <p>The program is a joint undertaking of OWWA and the National Livelihood Support
                                Fund (NLSF). It provides entrepreneurial development services and credit facilities to 
                                OFWs, their families and organizations.  The enterprises under this program 
                                are categorized under.</p>
                        </div>

                        <hr>
                        
                    <p class = "dropdown-btn">What are the qualifications for OWWA Livelihood program? <i class = 'fa fa-caret-down'></i></p>
                        <div class="dropdown-container">
                            <p>Who are the qualified to OWWA Livelihood program, please follow the guidelines below:
                            <br>
                            <br>
                                - OFW who lost their job due to the economic downturn in their country of residence 
                                and returned to the Philippines.
                            <br>
                                - OFW who has not left the Philippines to work abroad since they were repatriated.
                            <br>
                                - There are pending money claims filed in the court of the country of employment.
                            <br>
                                - The relative of a qualified OFW who has passed away can also avail. </p>
                        </div>

                    <hr>

                    <p class = "dropdown-btn">What are the requirements needed? <i class = 'fa fa-caret-down'></i></p>
                        <div class="dropdown-container">
                            <p>- Accomplished application form
                                <br>
                                -At least two (2) valid I.D. of OFW 
                                <br>
                                - Certification from OWWA-POLO of OFW's job sites
                                <br>
                                - In case of stranded BM, 1-3 requirements apply and to include:
                                <br>
                                    -( Return ticket or boarding pass of last arrival to Philippines)
                                <br>
                                    - ( Valid Visa)
                                <br>
                                - OWWA membership ID
                                <br>
                                - Original Medical certificate / Abstract with PTR No. of Attending physician 
                                <br>
                                    ( if you are suffering from health issues)
                                <br>
                                - Passport or travel document
                                <br>
                                - Proof of loss of Employment
                                <br>
                                        ( Notice/Certificate of termination of employment by employer or Foreign/Philippine
                                            recruitment agency )
                                <br>
                                - Proof of Overseas Employment:
                                <br>
                                    (Copy of Overseas Employment Contract;)
                                <br>
                                    ( Residence ID)
                                <br>
                                    ( Visa/ Re-entry Visa); and /or
                                <br>
                                    ( others as may be determined by the evaluating office.)
                                <br>
                                - Proof of return to the Philippines
                                <br>
                                    ( Boarding Pass); and or
                                <br>
                                    ( Air ticket)</p>
                        </div>

                    <hr>

                    <p class = "dropdown-btn">Where to secure the requirements? <i class = 'fa fa-caret-down'></i></p>
                        <div class="dropdown-container">
                            <p>In case you are wondering where to secure the requirement documents mentioned above, you 
                            <br>
                                may get some of these documents from your:
                            <br>
                            <br>
                                - Employer
                            <br>
                                - Government-issued 
                            <br>
                                - OFW member
                            <br>
                                - OWWA office or POLO office</p>
                        </div>

                    <hr>

                    <p class = "dropdown-btn">How to claim the OWWA assistance? <i class = 'fa fa-caret-down'></i></p>
                        <div class="dropdown-container">
                            <p>Step 1. Visit the PESO Office that covers the permanent address 
                                of the OFW.
                            <br>
                                Step 2. Get priority number (ticket) and wait to be accommodated.
                            <br>
                                Step 3. Present OFW I.D. or info to the membership verification desk, based on 
                                status of membership; get an application form and checklist of requirements.
                            <br>
                                Step 4. Submit the completed application form together with any supporting papers
                                for validation and evaluation.
                            <br>
                                Step 5. Proceed to request financial help or job offers for approved applicants.</p>
                        </div>

                    <hr>

                    <p class = "dropdown-btn">How much can I get in Financial Assistance Program? <i class = 'fa fa-caret-down'></i></p>
                        <div class="dropdown-container">
                            <p>OWWA members who are meant to be repatriated can receive PHP 10,000 as an financial relief help.</p>
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
