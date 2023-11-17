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

        <title> LGU Baggao | Civil Registrar Office</title>
    
    </head>

    <body style = "background-image:  linear-gradient(to left, black,rgba(0,0,0,0.7)), url('../img/<?php $query=$database->query("select * from `lgubaggao` where `contentID` = '1'"); while($data=$query->fetch_array()){ echo $data['background'];} ?>');">

        <div id="mySidenav" class="sidenav">

            <p href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</p>
            <a href="../PESO/">PESO</a>
            <a href="../BPLO/">BPLO</a>
            <a href="../Treasury Office/">TREASURY OFFICE</a>
            <a href="../MSWDO/">MSWDO</a>
            <a href="../DA Office/">DA OFFICE</a>
            <a href="../Civil Registrar Office/" class = "active">CIVIL REGISTRAR OFFICE</a>
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

                    CIVIL REGISTRAR OFFICE

                </h2>

                <p style = "text-align: justify;">The Office of the Municipal Civil Registrar is responsible for the registration program 
                    in the municipality, which is a continuing process. It shall continuously carry out the 
                    duties and program responsibilities provided for in the pertinent laws, revised rules 
                    and regulations governing the application and enforcement of the 
                    Civil Registry Law (Act 3753), as incorporated in Rule 5, Administrative Order 
                    No. 1 Series 1993. It shall be responsible for the recording in appropriate registers,
                    events that affect the civil status of individuals which are birth, marriage, death, 
                    annulment of marriage, declaration of void marriage, foundling, legal separation,
                    legitimation, and judicial determination of filiations and emancipation of minors. 
                    The laws of this country provides that such recording be compulsory. </p>

                <hr>

                <div class="content">

                <h3>

                    Frequelty Ask Questions

                </h3>

                    <p class = "dropdown-btn">Birth Certificate : <i class = 'fa fa-caret-down'></i></p>
                    <div class="dropdown-container">

                        <p>

                            Information to be provided 
                            <br>
                            <br>
                            1. Complete name of the child (first, middle, last)
                            <br>
                            2. Complete name of the father
                            <br>
                            3. Complete maiden name of the mother
                            <br>
                            4. Date of birth (month, day, year)
                            <br>
                            5. Place of birth (city/municipality, province)
                            <br>
                            6. Whether or not registered late.
                            <br>
                            If registered late, please state the year when it was registered.
                            <br>
                            7. Complete name and address of the requesting party
                            <br>
                            8. Relationship to the child
                            <br>
                            9. Number of copies needed
                            <br>
                            10. Purpose of the certification NOTE: ISSUANCE OF CERTIFICATION OF BIRTH
                            IS SUBJECT TO THE CONFIDENTIALITY CLAUSE OF ARTICLE 7 OF THE CHILD
                            AND YOUTH WELFARE CODE (P.D. 603) WHICH PROVIDES:
                            <br>
                            <br>
                            Article 7. Non-disclosure of birth records. The records of a person’s birth shall be kept 
                            strictly confidential and no information relating thereto shall be issued except on the 
                            request of any of the following:
                            <br>
                            <br>
                            1. The person himself, or any person authorized by him;
                            <br>
                            2. His spouse, his parent or parents, his direct descendants, or the guardian or institution 
                            legally in-charge of him, if he is a minor;
                            <br>
                            3. The court or proper public official whenever absolutely necessary in administrative,
                            judicial or other official proceedings to determine the identity of the child’s parent or 
                            other circumstances surrounding his birth; and
                            <br>
                            4. In case of the person’s death, the nearest of kin. Any person violating the prohibition
                            shall suffer the penalty of imprisonment of at least two months or a fine in an amount 
                            not exceeding five hundred pesos, or both, in the discretion of the court.
                            <br>
                            1. Complete name of the owner (first, middle, last)
                            <br>
                            2. Complete name of the father
                            <br>
                            3. Complete maiden name of the mother
                            <br>
                            4. Date of Birth (month, day, year)
                            <br>
                            5. Place of birth (city/municipality, province)
                            <br>
                            6. Whether or not registered late.
                            <br>
                            If registered late, please state the year when it was registered.
                            <br>
                            7. Complete name and address of the requesting party
                            <br>
                            8. Number of copies needed 
                            <br>
                            9. Purpose of the certification

                        </p>

                    </div>

                    <p class = "dropdown-btn"> *Certificate of No Marriage (CENOMAR) : <i class = 'fa fa-caret-down'></i></p>

                    <div class="dropdown-container">

                        <p>

                            Information to be provided
                            <br>
                            <br>
                            1. Complete name of the owner (first, middle, last)
                            <br>
                            2. Complete name of the father
                            <br>
                            3. Complete maiden name of the mother
                            <br>
                            4. Date of birth (month, date, year)
                            <br>
                            5. Place of birth (city/municipality, province)
                            <br>
                            6. Whether or not registered late.
                            <br>
                            If registered late, please state the year when it was registered.
                            <br>
                            7. Complete name and address of the requesting party
                            <br>
                            8. Number of copies needed
                            <br>
                            9. Purpose of the certification

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
