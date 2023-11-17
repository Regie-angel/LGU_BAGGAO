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

        <title> LGU Baggao | Department of Agriculture Office</title>
    
    </head>

    <body style = "background-image:  linear-gradient(to left, black,rgba(0,0,0,0.7)), url('../img/<?php $query=$database->query("select * from `lgubaggao` where `contentID` = '1'"); while($data=$query->fetch_array()){ echo $data['background'];} ?>');">

        <div id="mySidenav" class="sidenav">

            <p href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</p>
            <a href="../PESO/">PESO</a>
            <a href="../BPLO/">BPLO</a>
            <a href="../Treasury Office/">TREASURY OFFICE</a>
            <a href="../MSWDO/">MSWDO</a>
            <a href="../DA Office/" class = "active">DA OFFICE</a>
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

                    DEPARTMENT OF AGRICULTURE (DA) OFFICE

                </h2>

                <p>The Department of Agriculture (DA) is responsible for the promotion of the country's 
                    agricultural development. The DA provides policy framework, public investment, and
                    support services needed for domestic and export-oriented businesses.</p>

                <hr>

                <div class="content">

                <h3>

                    Frequelty Ask Questions

                </h3>

                    <p class = "dropdown-btn">Who are qualified benificiaries? <i class = 'fa fa-caret-down'></i></p>
                    <div class="dropdown-container">

                        <p>- Eligible beneficiaries who have not yet received any cash assistance from any of the following
                            cash assistance programs: RFFA 2019, Financial Subsidy for Rice Farmers (FSRF) 2020, 
                            and RCEF RFFA;
                            <br>
                            - Registered in the RSBSA;
                            <br>
                            - Must be farming rice areas of two (2.0) hectares and below.
                            <br>
                            <br>
                            Procedure in claiming cash assistance:
                            <br>
                            <br>
                            - The DA through its Regional Field Offices (RFOs) shall coordinate with the Municipality/City
                            Agricultural Officers to schedule and gather farmer beneficiaries at the most convenient time 
                            and area for the face-to-face KYC validation and subsequent distribution of the Interventions 
                            Monitoring Card (IMC);
                            <br>
                            - The Financial Technology (FINTECH) partner/s shall conduct an onsite farmer verification 
                            to have a liveness check before the issuance of the IMC;
                            <br>
                            - After identity verification, the FINTECH partner/s shall print the IMC with the RSBSA
                            number, account number, full name of the beneficiary, QR code, and farmer’s photo
                            which can be given to the beneficiaries;
                            <br>
                            - For distribution and payment of the RCEF-RFFA cash assistance, the Government Financial 
                            Institutions (GFIs) may utilize any combination of the following modes:
                            IMC;
                            <br>
                            - Credit to account or E-Wallets maintained with BSP-supervised Financial Institutions; and or
                            - Conduits:
                            <br>
                            - Countryside Financial Institutions (e.g., rural banks, cooperative banks, and thrift banks);
                            <br>
                            - Cooperatives;
                            <br>
                            - Accredited Remittance Centers/Companies;
                            <br>
                            - ATMs being managed by other Rural Banks;
                            <br>
                            - Other conduits that the DA and partner GFO may agree upon</p>
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
