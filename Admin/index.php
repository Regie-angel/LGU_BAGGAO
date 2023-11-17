<?php include('database/index.php'); session_start(); if(!isset($_SESSION['admin'])){ header("location:Login/"); } header("refresh: 20;"); ?>
<!DOCTYPE html> 
<html lang = "en" dir = "ltr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/stylesheet.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <title> Admin | Feedbacks</title>
    </head>
    <body style = "background-image: linear-gradient(to left, rgba(0, 0, 0, 0.364),rgba(0, 0, 0, 0.042)), url('../img/<?php $query=$database->query("select * from `lgubaggao` where `contentID` = '1'"); while($data=$query->fetch_array()){ echo $data['background'];} ?>');">
        <div class="header">
            <h1> 
                <img src = "../img/<?php $query=$database->query("select * from `lgubaggao` where `contentID` = '1'"); while($data=$query->fetch_array()){ echo $data['logo'];} ?>" align = "center">
                LOCAL GOVERNMENT UNIT OF BAGGAO
                <a href="Logout/"> Logout <i class = 'fa fa-sign-out'></i></a>
            </h1>
        </div>
        <div class="content">
            <div id="mySidenav" class="sidenav">              
                <a href="../Admin/" class = "active">Dashboard</a>
                <a href="Photos/">Logo and Background</a>
                <a href="History/">History</a>   
                <a href="Mission/">Mission</a>  
                <a href="Vision/">Vision</a>   
                <a href="Service Pledge/">Service Pledge</a>           
                <hr>       
                <a href="Profile/">Admin Profile</a>
            </div>
            <div class="feedback">
                <center>
                    <table class = "table" CELLSPACING=0>
                        <thead>
                            <tr>
                                <th style = "text-align: center" class = "header" colspan = "5">
                                    FEEDBACKS
                                </th>
                            </tr>
                            <tr>
                                <th class = "datepicker" colspan = "5">
                                    <form action="../Admin/" method = "GET">
                                        <input type="date" name = "date" required>
                                        <select name = "type" required>
                                            <option value = "">Select Feedback</option>
                                            <option value = "complaint">Complaint</option>
                                            <option value = "suggestion">Suggestion</option>
                                            <option value = "concern">Concern</option>
                                        </select>
                                        <input type="submit" class = "sbmtbtn" name = "feedback" value = "Search">
                                        <span id="datetime"></span>
                                        <script>
                                            function updateDateTime() {
                                                const now = new Date();
                                                const currentDateTime = now.toLocaleString();
                                                document.querySelector('#datetime').textContent = currentDateTime;
                                            }
                                            setInterval(updateDateTime, 0);
                                        </script>
                                    </form>
                                </th>
                            </tr>
                            <tr>
                                <th style = "width: 25%;">NAME</th>
                                <th style = "width: 25%;">EMAIL</th>
                                <th style = "width: 30%;">FEEDBACK CONTENT</th>
                                <th style = "width: 10%;">TIME</th>
                                <th style = "width: 20%;">DATE</th>
                            </tr>
                        </thead>
                        <tbody>   
                            <?php
                                if (isset($_GET['feedback'])) {
                                    $date = $_GET['date'];
                                    $type = $_GET['type'];
                                    $fetchfeedback = "SELECT * FROM feedback WHERE CONCAT(date) LIKE '%$date%' AND CONCAT(feedback_type) LIKE '%$type%' ORDER BY feedbackID ASC";
                                    $feedback = mysqli_query($database, $fetchfeedback);
                                    if(mysqli_num_rows($feedback) > 0) {
                                        foreach($feedback as $data) {
                                            ?>
                                                <a class = "close" href="../Admin/"><i class = 'fa fa-close'></i></a>
                                                <tr>
                                                    <td> <?php echo $data['fullname']; ?> </td>
                                                    <td> <?php echo $data['email']; ?> </td>
                                                    <td> <?php echo $data['feedback_type']; ?>
                                                        <a class = "view" href = "../Admin/Feedback/?id=<?php echo $data['feedbackID'];?>&feedback=<?php echo $data['feedback_type'];?>&name=<?php echo $data['fullname'];?>&date=<?php echo $data['date'];?>"> View<i class = 'fa fa-eye'></i></a>
                                                    </td>
                                                    <td style = "text-align: center;"> <?php echo $data['time']; ?> </td>
                                                    <td style = "text-align: center;"> <?php echo $data['date']; ?> </td>
                                                </tr>
                                            <?php
                                        }
                                    }    
                                    else {
                                        ?>
                                            <tr>
                                                <td colspan = "5"> 
                                                    <a class = "close" href="../Admin/"><i class = 'fa fa-close'></i></a>
                                                    <center> No Feedback Found!</center> 
                                                </td>
                                            </tr>
                                        <?php
                                    }
                                }
                                else {
                                    $date = date("Y-m-d");
                                    $fetchfeedback = "SELECT * FROM feedback WHERE CONCAT(date) LIKE '%$date%' ORDER BY feedbackID DESC";
                                    $feedback = mysqli_query($database, $fetchfeedback);
                                    if(mysqli_num_rows($feedback) > 0) {
                                        foreach($feedback as $data) {
                                            ?>
                                                <tr>
                                                    <td> <?php echo $data['fullname']; ?> </td>
                                                    <td> <?php echo $data['email']; ?> </td>
                                                    <td> <?php echo $data['feedback_type']; ?>
                                                        <a class = "view" href = "../Admin/Feedback/?id=<?php echo $data['feedbackID'];?>&feedback=<?php echo $data['feedback_type'];?>&name=<?php echo $data['fullname'];?>&date=<?php echo $data['date'];?>"> View<i class = 'fa fa-eye'></i></a>
                                                    </td>
                                                    <td style = "text-align: center;"> <?php echo $data['time']; ?> </td>
                                                    <td style = "text-align: center;"> <?php echo $data['date']; ?> </td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                    else {
                                        ?>
                                            <tr>
                                                <td colspan = "5">
                                                    <center> No Feedback Today!</center> 
                                                </td>
                                            </tr>
                                        <?php    
                                    }
                                }
                            ?>
                        </tbody>
                    </table>
                </center>
            </div>
        </div>
    </body>
</html>