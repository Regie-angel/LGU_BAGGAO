<?php

    include('../../database/index.php');
    session_start();

    

    if(isset($_POST['sbmtbtn'])) {

        $name = $_POST['fullname'];
        $email = $_POST['email'];
        $type = "Concern";


        $authconcern = $_POST['concern'];
        $concern = htmlspecialchars($authconcern, ENT_QUOTES, 'UTF-8');


        date_default_timezone_set('Asia/Manila');
        $time = date("g:i a"); 
        $date = date("Y-m-d"); 
        

        $database->query("insert into feedback(fullname, email, feedback_type, feedback_content, time, date) values ('$name', '$email', '$type', '$concern', '$time',' $date')");

        echo "<script type = 'text/javascript'>alert('Thank you for the feedback!'); window.location='../'</script>";

    }

    else {

        header("location:../");

    }


?>