<html lang = "en" dir = "ltr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/index.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <title> LGU Baggao | Logged Out</title>
    </head>
    <body>
        <?php
            if(isset($_SESSION['admin'])){
                header("location:../Login/");
            }
            if(isset($_SESSION['queue'])){
                header("location:../Queue/");
            }
            echo "<script type = 'text/javascript'>alert('Successfully Logged Out!'); window.location = 'logging out/'</script>";
        ?>
    </body>
</html>