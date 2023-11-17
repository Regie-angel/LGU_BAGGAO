<!DOCTYPE html>
<html lang = "en" dir = "ltr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/index.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <title> LGU Baggao | Logging In</title>
    </head>
    <body>
        <?php
            include('../../database/index.php');
            session_start();
            if(isset($_REQUEST['sbmtbtn'])){
                $username = $_REQUEST['username'];
                $password = $_REQUEST['password'];
                $fetchadmin = "SELECT * FROM admin WHERE username='$username'";
                $admin = mysqli_query($database, $fetchadmin);
                if(mysqli_num_rows($admin) > 0) {
                    foreach($admin as $data) {
                        $adminID = $data['adminID'];
                        if($adminID == '1') {
                            $fetchadmin = "SELECT * FROM admin WHERE password='$password' AND adminID='$adminID'";
                            $admin = mysqli_query($database, $fetchadmin);
                            if(mysqli_num_rows($admin) > 0) {
                                $_SESSION['admin']="1";
                                $_SESSION['username']="$username";
                                $_SESSION['password']="$password";
                                echo "<script type = 'text/javascript'>alert('Welcome Back!'); window.location = '../../'</script>";
                            }
                            else {
                                echo "<script type = 'text/javascript'>alert('Invalid Password!'); window.location = '../'</script>";
                            }
                        }

                        else if ($adminID == '2') {
                            $fetchadmin = "SELECT * FROM admin WHERE password='$password' AND adminID='$adminID'";
                            $admin = mysqli_query($database, $fetchadmin);
                            if(mysqli_num_rows($admin) > 0) {
                                $_SESSION['c_one']="1";
                                $_SESSION['username']="$username";
                                $_SESSION['password']="$password";
                                echo "<script type = 'text/javascript'>alert('Welcome Back to Counter 1!'); window.location = '../../Queue/Counter 1/'</script>";
                            }
                            else {
                                echo "<script type = 'text/javascript'>alert('Invalid Password!'); window.location = '../'</script>";
                            }
                        }

                        else if ($adminID == '3') {
                            $fetchadmin = "SELECT * FROM admin WHERE password='$password' AND adminID='$adminID'";
                            $admin = mysqli_query($database, $fetchadmin);
                            if(mysqli_num_rows($admin) > 0) {
                                $_SESSION['c_two']="1";
                                $_SESSION['username']="$username";
                                $_SESSION['password']="$password";
                                echo "<script type = 'text/javascript'>alert('Welcome Back to Counter 2!'); window.location = '../../Queue/Counter 2/'</script>";
                            }
                            else {
                                echo "<script type = 'text/javascript'>alert('Invalid Password!'); window.location = '../'</script>";
                            }
                        }

                        else if ($adminID == '4') {
                            $fetchadmin = "SELECT * FROM admin WHERE password='$password' AND adminID='$adminID'";
                            $admin = mysqli_query($database, $fetchadmin);
                            if(mysqli_num_rows($admin) > 0) {
                                $_SESSION['c_three']="1";
                                $_SESSION['username']="$username";
                                $_SESSION['password']="$password";
                                echo "<script type = 'text/javascript'>alert('Welcome Back to Counter 3!'); window.location = '../../Queue/Counter 3/'</script>";
                            }
                            else {
                                echo "<script type = 'text/javascript'>alert('Invalid Password!'); window.location = '../'</script>";
                            }
                        }

                        else if ($adminID == '5') {
                            $fetchadmin = "SELECT * FROM admin WHERE password='$password' AND adminID='$adminID'";
                            $admin = mysqli_query($database, $fetchadmin);
                            if(mysqli_num_rows($admin) > 0) {
                                $_SESSION['c_four']="1";
                                $_SESSION['username']="$username";
                                $_SESSION['password']="$password";
                                echo "<script type = 'text/javascript'>alert('Welcome Back to Counter 4!'); window.location = '../../Queue/Counter 4/'</script>";
                            }
                            else {
                                echo "<script type = 'text/javascript'>alert('Invalid Password!'); window.location = '../'</script>";
                            }
                        }

                        else if ($adminID == '6') {
                            $fetchadmin = "SELECT * FROM admin WHERE password='$password' AND adminID='$adminID'";
                            $admin = mysqli_query($database, $fetchadmin);
                            if(mysqli_num_rows($admin) > 0) {
                                $_SESSION['c_five']="1";
                                $_SESSION['username']="$username";
                                $_SESSION['password']="$password";
                                echo "<script type = 'text/javascript'>alert('Welcome Back to Counter 5!'); window.location = '../../Queue/Counter 5/'</script>";
                            }
                            else {
                                echo "<script type = 'text/javascript'>alert('Invalid Password!'); window.location = '../'</script>";
                            }
                        }

                        else if ($adminID == '7') {
                            $fetchadmin = "SELECT * FROM admin WHERE password='$password' AND adminID='$adminID'";
                            $admin = mysqli_query($database, $fetchadmin);
                            if(mysqli_num_rows($admin) > 0) {
                                $_SESSION['c_six']="1";
                                $_SESSION['username']="$username";
                                $_SESSION['password']="$password";
                                echo "<script type = 'text/javascript'>alert('Welcome Back to Counter 6!'); window.location = '../../Queue/Counter 6/'</script>";
                            }
                            else {
                                echo "<script type = 'text/javascript'>alert('Invalid Password!'); window.location = '../'</script>";
                            }
                        }

                        else if ($adminID == '8') {
                            $fetchadmin = "SELECT * FROM admin WHERE password='$password' AND adminID='$adminID'";
                            $admin = mysqli_query($database, $fetchadmin);
                            if(mysqli_num_rows($admin) > 0) {
                                $_SESSION['c_seven']="1";
                                $_SESSION['username']="$username";
                                $_SESSION['password']="$password";
                                echo "<script type = 'text/javascript'>alert('Welcome Back to Counter 7!'); window.location = '../../Queue/Counter 7/'</script>";
                            }
                            else {
                                echo "<script type = 'text/javascript'>alert('Invalid Password!'); window.location = '../'</script>";
                            }
                        }

                        else if ($adminID == '9') {
                            $fetchadmin = "SELECT * FROM admin WHERE password='$password' AND adminID='$adminID'";
                            $admin = mysqli_query($database, $fetchadmin);
                            if(mysqli_num_rows($admin) > 0) {
                                $_SESSION['c_eight']="1";
                                $_SESSION['username']="$username";
                                $_SESSION['password']="$password";
                                echo "<script type = 'text/javascript'>alert('Welcome Back to Counter 8!'); window.location = '../../Queue/Counter 8/'</script>";
                            }
                            else {
                                echo "<script type = 'text/javascript'>alert('Invalid Password!'); window.location = '../'</script>";
                            }
                        }

                        else if ($adminID == '10') {
                            $fetchadmin = "SELECT * FROM admin WHERE password='$password' AND adminID='$adminID'";
                            $admin = mysqli_query($database, $fetchadmin);
                            if(mysqli_num_rows($admin) > 0) {
                                $_SESSION['c_nine']="1";
                                $_SESSION['username']="$username";
                                $_SESSION['password']="$password";
                                echo "<script type = 'text/javascript'>alert('Welcome Back to Counter 9!'); window.location = '../../Queue/Counter 9/'</script>";
                            }
                            else {
                                echo "<script type = 'text/javascript'>alert('Invalid Password!'); window.location = '../'</script>";
                            }
                        }

                        else if ($adminID == '11') {
                            $fetchadmin = "SELECT * FROM admin WHERE password='$password' AND adminID='$adminID'";
                            $admin = mysqli_query($database, $fetchadmin);
                            if(mysqli_num_rows($admin) > 0) {
                                $_SESSION['c_ten']="1";
                                $_SESSION['username']="$username";
                                $_SESSION['password']="$password";
                                echo "<script type = 'text/javascript'>alert('Welcome Back to Counter 10!'); window.location = '../../Queue/Counter 10/'</script>";
                            }
                            else {
                                echo "<script type = 'text/javascript'>alert('Invalid Password!'); window.location = '../'</script>";
                            }
                        }

                        else if ($adminID == '12') {
                            $fetchadmin = "SELECT * FROM admin WHERE password='$password' AND adminID='$adminID'";
                            $admin = mysqli_query($database, $fetchadmin);
                            if(mysqli_num_rows($admin) > 0) {
                                $_SESSION['c_eleven']="1";
                                $_SESSION['username']="$username";
                                $_SESSION['password']="$password";
                                echo "<script type = 'text/javascript'>alert('Welcome Back to Counter 11!'); window.location = '../../Queue/Counter 11/'</script>";
                            }
                            else {
                                echo "<script type = 'text/javascript'>alert('Invalid Password!'); window.location = '../'</script>";
                            }
                        }

                        else if ($adminID == '13') {
                            $fetchadmin = "SELECT * FROM admin WHERE password='$password' AND adminID='$adminID'";
                            $admin = mysqli_query($database, $fetchadmin);
                            if(mysqli_num_rows($admin) > 0) {
                                $_SESSION['c_twelve']="1";
                                $_SESSION['username']="$username";
                                $_SESSION['password']="$password";
                                echo "<script type = 'text/javascript'>alert('Welcome Back to Counter 12!'); window.location = '../../Queue/Counter 12/'</script>";
                            }
                            else {
                                echo "<script type = 'text/javascript'>alert('Invalid Password!'); window.location = '../'</script>";
                            }
                        }

                        else if ($adminID == '14') {
                            $fetchadmin = "SELECT * FROM admin WHERE password='$password' AND adminID='$adminID'";
                            $admin = mysqli_query($database, $fetchadmin);
                            if(mysqli_num_rows($admin) > 0) {
                                $_SESSION['c_thirteen']="1";
                                $_SESSION['username']="$username";
                                $_SESSION['password']="$password";
                                echo "<script type = 'text/javascript'>alert('Welcome Back to Counter 13!'); window.location = '../../Queue/Counter 13/'</script>";
                            }
                            else {
                                echo "<script type = 'text/javascript'>alert('Invalid Password!'); window.location = '../'</script>";
                            }
                        }

                        else {
                            $fetchadmin = "SELECT * FROM admin WHERE password='$password'";
                            $admin = mysqli_query($database, $fetchadmin);
                            if(mysqli_num_rows($admin) > 0) {
                                $_SESSION['c_fourteen']="1";
                                $_SESSION['username']="$username";
                                $_SESSION['password']="$password";
                                echo "<script type = 'text/javascript'>alert('Welcome Back to Counter 14!'); window.location = '../../Queue/Counter 14/'</script>";
                            }
                            else {
                                echo "<script type = 'text/javascript'>alert('Invalid Password!'); window.location = '../'</script>";
                            }
                        }
                    }
                }
                else {
                    echo "<script type = 'text/javascript'>alert('Invalid Username!'); window.location = '../'</script>";
                }
            }
            else {
                header('location:../');
            } 
        ?>
    </body>
</html>