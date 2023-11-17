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

        <title> BPLO | Business or Mayor's Permit Issuance (New)</title>
    
    </head>

    <body style = "background-image: linear-gradient(to left, black,rgba(0,0,0,0.7)), url('../../img/<?php $query=$database->query("select * from `lgubaggao` where `contentID` = '1'"); while($data=$query->fetch_array()){ echo $data['background'];} ?>');">

        <div id="mySidenav" class="sidenav">

            <p href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</p>
            <a href="../../PESO/">PESO</a>
            <a href="../" class = "active">BPLO</a>
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

                    Business or Mayor's Permit Issuance (New)

                </h2>
                
                <p>The Business Permit and Licensing Section is tasked to issue permit to Business Establishments 
                    operating within the Municipality in coordination with various line offices of the
                    Government Unit and concerned National Agencies.</p>

                <hr>

                <div class="content">

                <h3>

                    Frequelty Ask Questions

                </h3>

                    <p class = "dropdown-btn">What is Business Permit for? <i class = 'fa fa-caret-down'></i></p>
                        <div class="dropdown-container">
                            <p>A business permit is a certification that your business is legitimate, meaning
                                it's authorized to operate in the city or municipality where it's registered.</p>
                        </div>

                    <hr>
                        
                    <p class = "dropdown-btn">What are the requirements for Business Permit? <i class = 'fa fa-caret-down'></i></p>
                        <div class="dropdown-container">
                            <p>1. Business Name Registration
                            <br>
                                    ----a. Single Propietorship/Department of Trade and Industry/Negosyo Center
                                    (DTI) Registration (1 copy original) 
                            <br>
                                    ----b. Corporation/Partnership/Foundaion
                                        Securities and Exchange Commission
                                        (SEC) Registration (1 copy original)
                            <br>
                                    ----c. Cooperative
                                        Cooperative Development Authority
                                        (CDA) Registration (1 copy original)
                            <br>
                                2. Occupancy Permit
                                    (1 copy original)
                            <br>
                                3. Barangay Business Clearance
                                    (1 original copy)
                            <br>
                                4. Contract of Lease (if lessee) (1 copy original)
                            <br>
                            <br>
                                OTHER ANCILLARY REQUIREMENTS:
                            <br>    
                            <br>
                                ----a. Sanitary Permit/Health Clearance
                                (1 copy original)
                            <br>
                                ----b. Municipal Environment Certificate
                                (1 copy original)
                            <br>
                                ----c. Fire Safety Inspection Certificate (FSIC)
                                (1 copy original)
                            <br>
                                ----d. Treasury Clearance (for market stall holders)
                                (1 copy original)
                            <br>
                                ----e. BSP Registration (for Financial Institutions)
                                (1 copy original)
                            <br>
                                ----f. NTC Permit (for mobile phone resellers, retailers,
                                dealers and service centers)
                                (1 copy original)
                            <br>
                                ----g. NFA Permit (Rice Retailers)
                                (1 copy original)
                            <br>
                                ----h. License to Operate from Department of Agriculture
                                    (Retailer of Feeds and Veterinary Medicines)
                                    (1 copy original)</p>
                        </div>

                    <hr>

                    <p class = "dropdown-btn">What are the steps/procedures in the issuance of Business Permit? <i class = 'fa fa-caret-down'></i></p>
                        <div class="dropdown-container">
                            <p> - Go to the Business Permit and Licensing Office (BPLO) in the city/municipality town hall where your business is located
                            <br>
                                - Fill out the application form
                            <br>
                                - Submit the application form and the initial requirements
                            <br>
                                - An assessor will assess your application for tax and fees
                            <br>
                                - Pay the necessary taxes and fees
                            <br>
                                - Submit the remaining requirements (should there be any)
                            <br>
                                - Claim your business or mayor’s permit</p>
                        </div>

                    <hr>

                    <p class = "dropdown-btn">List of requirements to get a Business Permit or Mayor’s Permit <i class = 'fa fa-caret-down'></i></p>
                        <div class="dropdown-container">
                            <p> - Certificate of Business Name Registration from Department of Trade and Industry 
                                (Sole Proprietorships); 
                            <br>
                                Articles of Partnership (Partnerships) or Articles for Incorporation 
                                (Corporations) from Securities and Exchange Commission; 
                            <br>
                                Certificate of Registration (Cooperatives) from the Cooperative Development Authority
                            <br>
                                - Barangay Business Clearance
                            <br>
                                - Authorization letter of owner with ID
                            <br>
                                - Contract of lease (If leased) or Certificate of Title/Tax Declaration (If owned)
                            <br>
                                - Sketch of the business location
                            <br>
                                - Occupancy permit
                            <br>
                                - Community Tax Certificate (CTC or Cedula)
                            <br>
                                - Public Liability Insurance (for Restaurants, Cinemas, Malls, etc)
                            <br>
                                - Locational/Zoning Clearance
                            <br>
                                - Fire Permit
                            <br>
                                - Sanitary Permit</p>
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
