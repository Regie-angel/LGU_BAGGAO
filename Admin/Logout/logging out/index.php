<?php
    if(!isset($_SESSION['admin'])){
        header("location:../../Login/");
    }
    else {
        header("location:../../Login/");
    }
    session_start();
    session_destroy();
    header("location: ../../Login/");
?>