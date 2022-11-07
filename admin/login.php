<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sofia&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/883dde1e22.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login - Annals of research journals</title>
</head>
<body>
    <nav>
        <h3>Annals of research journals</h3>

        <ul>
            <li> <a href="">Journals</a> </li>
            <li> <a href="">About</a> </li>
        </ul>
    </nav>

    <div class="wrapper">
        <div class="login">
            <form action="login.inc.php" method="post">
                <h3>Admin Login</h3>
                <!-- <i class="fa fa-user-o" aria-hidden="true"></i> -->
                <input type="text" name="uid" id="" placeholder="Admin username" required>
                <!-- <i class="fa fa-lock" aria-hidden="true"></i> -->
                <input type="password" name="pwd" id="" placeholder="password" required>
                
                <button type="submit">Login</button>   
                <?php
                     if(!isset($_GET['error'])){
                        exit();
                     }
                     else{
                        $signupCheck = $_GET['error'];

                        if($signupCheck == "empty"){
                            echo "<p style='text-align:center;color:red;' class='error'>Fill in all fields</p>";
                            exit();
                        }
                    
                        elseif($signupCheck == "invalid"){
                            echo "<p style='text-align:center;color:red;' class='error'>invalid credentials</p>";
                            exit();                        
                        }
                        
                        elseif($signupCheck == "sqlerror"){
                            echo "<p style='text-align:center;color:red;padding-top:10px;' class='error'>error validating data db</p>";
                            exit();
                        }
                       
                     }

                    ?>
            </form>

         
        </div>
    </div>
    
</body>
</html>