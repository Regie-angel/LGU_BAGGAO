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

        <title> LGU Baggao | Treasury Office</title>
    
    </head>

    <body style = "background-image:  linear-gradient(to left, black,rgba(0,0,0,0.7)), url('../img/<?php $query=$database->query("select * from `lgubaggao` where `contentID` = '1'"); while($data=$query->fetch_array()){ echo $data['background'];} ?>');">

        <div id="mySidenav" class="sidenav">

            <p href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</p>
            <a href="../PESO/">PESO</a>
            <a href="../BPLO/">BPLO</a>
            <a href="../Treasury Office/" class = "active">TREASURY OFFICE</a>
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

                    TREASURY OFFICE

                </h2>

                <p>The Office of the Municipal Treasurer is mandated to collect taxes, fees and other revenues and to take custody and exercise proper management if LGU funds</p>

                <hr>

                <div class="content">

                <h3>

                    Frequelty Ask Questions

                </h3>

                    <p class = "dropdown-btn">What are the services offered by the office of Municipal Treasury? <i class = 'fa fa-caret-down'></i></p>
                    <div class="dropdown-container">

                        <p> 1. <u>PAYMENT OF BUSINESS TAXES, PERMIT AND REGULATORY TAXES ON BUSINESS</u>
                            <br>
                            <br>
                            -The Business Taxes, shall be paid once within the first twenty (20) days of January or
                            in quarterly installments within the first twenty (20) days of January, April, July, and
                            October of each year. The Sangguniang Bayan may, for a justifiable reason or cause, 
                            extend the time of payment of such taxes without surcharges or penalties, but only for
                            a period not exceeding six (6) months.
                            <br>
                            <br>
                            <br>
                            2. <u>PAYMENT OF PERMIT FEE FOR COCKPIT</u>
                            <br>
                            <br>
                            -The Annual Cockpit permit fee is payable upon application for a permit before a 
                            cockpit shall be allowed to operate and within the first twenty (20) days of January
                            of each year.
                            <br>
                            <br>
                            <br>
                            3. <u>PAYMENT OF PERMIT FEE FOR COCKPIT MANAGERS, PROMOTERS AND COCKPIT PERSONNEL</u>
                            <br>
                            <br>
                            -The permit fees on cockpit personnel shall be paid before they participate in a cockfight
                            and shall be paid annually upon renewal of the permit on the birth month of the permittee.
                            <br>
                            <br>
                            <br>
                            4. <u>PAYMENT OF SPECIAL PERMIT FEE FOR HOLDING COCKFIGHTS AND DERBIES</u>
                            <br>
                            <br>
                            -The special permit fees on holding cockfights and derbies shall be paid before the special
                            cockfights and derbies can be lawfully held. Regular cockfights i.e. those held during
                            Sundays, Legal Holidays and Local Fiestas and International Derbies shall be included
                            from the payment of fees herein imposed.
                            <br>
                            <br>
                            <br>
                            5. <u>PAYMENT OF TAX ON AMBULANT AND ITINERANT AMUSEMENT OPERATORS</u>
                            <br>
                            <br>
                            -A tax imposed on Ambulant and Itinerant Amusement Operators during fiestas.
                            <br>
                            <br>
                            <br>
                            6. <u>PAYMENT FOR REGISTRATION FEES ON BICYCLE AND PRIVATE TRICYCLE</u>
                            <br>
                            <br>
                            -This is the annual registration fee from the owners of the following means of 
                            transportation used within the locality.
                            <br>
                            <br>
                            <br>
                            7. <u>PAYMENT FOR LARGE CATTLE REGISTRATION AND TRANSFER FEES</u>
                            <br>
                            <br>
                            -The owner of large cattle is required to register his ownership, which a Certificate 
                            of Ownership shall be issued to the owner upon payment.
                            <br>
                            <br>
                            <br>
                            8. <u>PAYMENTS FOR ANNUAL FRANCHISE FEE ON TRICYCLE OPERATION AND OTHER FEES</u>
                            <br>
                            <br>
                            -An Annual Franchise Fee shall be paid on or before January 20 of the year for the 
                            operation of each tricycle-for-hire.
                            <br>
                            <br>
                            <br>
                            9. <u>PAYMENT OF PERMIT FEE ON OCCUPATION/CALLING NOT REQUIRING GOVERNMENT EXAMINATION</u>
                            <br>
                            <br>
                            -This is a fee collected for securing a permit by persons engaged in the practice occupation
                            or calling not requiring government examination.
                            <br>
                            <br>
                            <br>
                            10. <u>PAYMENT OF BUILDING PERMIT FEE</u>
                            <br>
                            <br>
                            -This is a fee collected for securing a permit by person applying for building construction
                            and renovation pursuant to Department Order 155, series of 1992 of the DPWH.
                            <br>
                            <br>
                            <br>
                            11. <u>PAYMENT OF ZONING/LOCATIONAL CLEARANCE, ZONING CERTIFICATION</u>
                            <br>
                            <br>
                            -Locational Clearance and Zoning Certification fee is collected at rates fixed by and in 
                            accordance with the applicable rules and regulations prescribed by the Housing and
                            Land Use Regulatory Board (HLURB), CLUP and Zoning Ordinance.
                            <br>
                            <br>
                            <br>
                            12. <u>PAYMENT OF PERMIT FEE FOR THE CONDUCT OF GROUP ACTIVITIES</u>
                            <br>
                            <br>
                            -This is a fee collected for securing a permit from the Office of the Mayor by a group
                            of people requesting to conduct or hold any program, activity or occasion of not more
                            than twenty-four (24) hours within the jurisdiction of the Municipality.
                            <br>
                            <br>
                            <br>
                            13. <u>PAYMENT OF PERMIT FEE FOR TEMPORARY USE OF ROADS, STREETS, SIDEWALKS, ALLEYS, PARKS, PLAZA AND PLAYGROUND</u>
                            <br>
                            <br>
                            -This is a fee collected for securing a permit from the Office of the Mayor by any person who 
                            requests to temporarily use or occupy a street, sidewalk or alley or portion thereof for 
                            a purpose.
                            <br>
                            <br>
                            <br>
                            14. <u>PAYMENT OF PERMIT FEE ON BUILDING OCCUPANCY</u>
                            <br>
                            <br>
                            -This is a fee collected from building occupants for securing a permit prior to the occupancy 
                            of a newly constructed house, building and other structures.
                            <br>
                            <br>
                            <br>
                            15. <u>RENTAL & PERMIT FEE FOR USING COVERED COURT</u>
                            <br>
                            <br>
                            -This is a fee collected for securing a permit from Office of the Mayor requesting the use 
                            of covered court owned by the municipality.
                            <br>
                            <br>
                            <br>
                            16. <u>PAYMENT FOR SECRETARY’S FEES</u>
                            <br>
                            <br>
                            -A service fee collected from every person/business entity requesting for copies of 
                            official records and documents from the Office of the Mayor.
                            <br>
                            <br>
                            <br>
                            17. <u>PAYMENT FOR LOCAL CIVIL REGISTRY FEES</u>
                            <br>
                            <br>
                            -A service fee collected from every person/business entity requesting for copies of official
                            records and documents from the Local Civil Registry Office.
                            <br>
                            <br>
                            <br>
                            18.<u>PAYMENT FOR BURIAL FEE</u>
                            <br>
                            <br>
                            -This is a fee collected for securing a permit for burial of cadaver.
                            <br>
                            <br>
                            <br>
                            19. <u>PAYMENT FOR MAYOR’S CLEARANCE FEE</u>
                            <br>
                            <br>
                            -This is a fee collected for securing Mayor’s Clearance required for local employment, abroad,
                            other legal purpose, and others obtained from the Municipal Mayor.
                            <br>
                            <br>
                            <br>
                            20. <u>PAYMENT FOR POLICE CLEARANCE FEE</u>
                            <br>
                            <br>
                            -This is a fee collected for securing Police Clearance as a requirement for employment, 
                            scholarship, study grants, change of name, passport or visa application, for firearm permit 
                            application, PLEB Clearance, obtained from the Station Commander of the Philippine
                            National Police.
                            <br>
                            <br>
                            <br>
                            21. <u>PAYMENT FOR CERTIFICATION FEE FOR POLICE BLOTTER</u>
                            <br>
                            <br>
                            -This is a fee collected for securing a certification of Police Blotter, obtained from the 
                            Station Commander of the Philippine National Police.
                            <br>
                            <br>
                            <br>
                            22. <u>PAYMENT FOR SANITARY INSPECTION FEE</u>
                            <br>
                            <br>
                            -This is a fee collected for Sanitary Inspection on house for rent, business, industrial or 
                            agricultural establishment for the purpose of supervision and enforcement of existing rules 
                            and regulations and public safety.
                            <br>
                            <br>
                            <br>
                            23. <u>PAYMENT FOR MEDICAL CERTIFICATE/HEALTH CERTIFICATE</u>
                            <br>
                            <br>
                            -There shall be collected fees for Medical Certificate/ Health Certificate from any person 
                            who is given a physical examination by the Municipal Health Officer or his duly authorized 
                            representative.
                            <br>
                            <br>
                            <br>
                            24. <u>PAYMENT FOR CERTIFIED COPY OF TAX DECLARATION</u>
                            <br>
                            <br>
                            -This is a fee collected for the issuance of a Certified Copy of Tax Declaration.
                            <br>
                            <br>
                            <br>
                            25. <u>PAYMENT FOR CERTIFICATION FEE FOR IMPROVEMENT/ NO IMPROVEMENT</u>
                            <br>
                            <br>
                            -This is a fee collected for the issuance of Certification for Improvement /No Improvement 
                            of a specific real property.
                            <br>
                            <br>
                            <br>
                            26. <u>PURCHASE AND LEASE OF CEMETERY LOTS</u>
                            <br>
                            <br>
                            -This is a fee collected for the purchase and/or lease of cemetery lot owned by the Municipality.
                            <br>
                            <br>
                            <br>
                            27. <u>PAYMENT FOR CHARGES FOR TRAFFIC VIOLATIONS</u>
                            <br>
                            <br>
                            -This is a fee collected as charges for every traffic violation such as overcapacity, over speeding,
                            driving without driver’s license, disregarding traffic signs, refusal to convey passengers, 
                            driving a vehicle while drunk/under the influence of liquor, driving tricycle for passengers 
                            without proper color scheme.
                            <br>
                            <br>
                            <br>
                            28. <u>ISSUANCE FOR CASH TICKETS ON GOODS FOR SALE ENTERED IN THE PUBLIC MARKET</u>
                            <br>
                            <br>
                            -This is a fee collected for every good that is entered in the public market premises for sale 
                            with intention to occupy space or table inside the market place.
                            <br>
                            <br>
                            <br>
                            29. <u>PAYMENT FOR COMMUNITY TAX CERTIFICATE (CTC)</u>
                            <br>
                            <br>
                            -This is a community tax imposed on persons, natural or juridical, residing in the municipality,
                            eighteen years of age or over who has been regularly employed, engaged in business, or 
                            who owns real property with an aggregate assessed value of 1,000.00 or more, or who is 
                            required by law to pay an annual community tax of Five (5) pesos and additional tax of one
                            (1) peso for every one thousand pesos of income which in no case shall exceed Five thousand 
                            Pesos. For corporation, an annual community tax of five hundred pesos (500.00) and additional
                            tax which in no case shall exceed Ten Thousand Pesos (10,000.00).
                            <br>
                            <br>
                            <br>
                            30. <u>PAYMENT FOR REAL PROPERTY TAX (RPT)</u>
                            <br>
                            <br>
                            -This is a tax payment for the Real Property such as lands, buildings and other improvements,
                            and machineries which is due every year based on the assessment level and fair market value
                            of the Real Property. Payments can be made in annual, semi-annual, or quarterly basis. 
                            A twenty percent (20%) may be availed if the land owner or its authorized representative 
                            will pay in advance on or before the last working day of the year.
                            <br>
                            <br>
                            <br>
                            31. <u>RELEASING OF CHECKS AS PAYMENT OF OBLIGATIONS TO CLAIMANT</u>
                            <br>
                            <br> 
                            -Payables like medical, educational and financial assistance to individuals, groups,
                            associations or organizations and services rendered by national government agencies, 
                            GOCCs, contractors entered into or made by the Municipality are all paid in check.</p>
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
