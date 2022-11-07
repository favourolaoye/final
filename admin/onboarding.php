<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit();
}
else if(!isset($_SESSION[''])){
//check if root admin;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <link rel="stylesheet" href="remix-icon/remixicon.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sofia&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/883dde1e22.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Annals of reasearch journals</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <h3>Annals of Research Journals</h3>
        <div class="user">
            <i class="fa fa-user-o" aria-hidden="true"></i>
            <p>Owoade anu</p>
        </div>
    </nav>

    <div class="main-body">
        <!-- bars====================================================================== -->
        <div class="title-button">
            <p class="sp">Journals</p>

            <a href="Logout.php">Logout</a>
        </div>

        <!-- boxess =====================================================================-->

        <div class="boxes">
            <div class="box-1">
                <span><i class="fa fa-folder-o" aria-hidden="true"></i></span>
                <div class="wrapper">
                    <h3>EFFECTS ON MILK YIELD AND MILK COMPOSITION TRAITS OF HOLSTEIN-FRIESIAN COWS IN KANO STATE,
                        NIGERIA</h3>
                    <p>Moshood Abiola, Akinosho G</p>
                </div>
                <div class="date">
                    <p>30th, of june 2022</p>
                </div>
            </div>


            <!-- boxes 2=============================================================-->

            <div class="box-1">
                <span><i class="fa fa-folder-o" aria-hidden="true"></i></span>
                <div class="wrapper">
                    <h3>EFFECTS ON MILK YIELD AND MILK COMPOSITION TRAITS OF HOLSTEIN-FRIESIAN COWS IN KANO STATE,
                        NIGERIA</h3>
                    <p>Moshood Abiola, Akinosho G</p>
                </div>
                <div class="date">
                    <p>30th, of june 2022</p>
                </div>
            </div>


            <!-- boxes 3=============================================================-->

            <div class="box-1">
                <span><i class="fa fa-folder-o" aria-hidden="true"></i></span>
                <div class="wrapper">
                    <h3>EFFECTS ON MILK YIELD AND MILK COMPOSITION TRAITS OF HOLSTEIN-FRIESIAN COWS IN KANO STATE,
                        NIGERIA</h3>
                    <p>Moshood Abiola, Akinosho G, Abulkareem F.T, Esuola E.O, Akinbile A.S</p>
                </div>
                <div class="date">
                    <p>30th, of june 2022</p>
                </div>
            </div>

        </div>

        <!--input title ==============================================================-> -->


        <!--input form===================================================================-->
        <div class="input-forms">
            <div class="a">
                <div class="tita">
                    <p class="I"> Add article</p>
                </div>
                <form action="upload.inc.php" method="post" enctype="multipart/form-data">
                    <input type="text" name="title" placeholder="journal's title" required>
                    <input type="text" name="author" placeholder="journal's author" required>
                    <input type="text" name="ref" placeholder="journal's refrence" required>
                    <input type="file" name="" placeholder="" required>
                    <input type="date" name="datein" required>
                    <textarea name="preface" cols="30" rows="10" placeholder="Journals abstract"></textarea>
                    <button name="article" type="submit">Post journal</button>
                    <div class="spaces">
                         <?php
                     if(!isset($_GET['error'])){
                        exit();
                     }
                     else{
                        $signupCheck = $_GET['error'];

                        if($signupCheck == "exists"){
                            echo "<p style='text-align:center;color:red;' class='error'>This article exists in the database</p>";
                            exit();
                        }
                    
                        elseif($signupCheck == "sqlerror"){
                            echo "<p style='text-align:center;color:red;' class='error'>Error inserting data</p>";
                            exit();                        
                        }
                        
                        elseif($signupCheck == "sucess"){
                            echo "<p style='text-align:center;color:green;padding-top:10px;' class='error'>upload sucessful</p>";
                            exit();
                        }
                       
                     }

                    ?>
                    </div>
                   
                </form>
            </div>

            <!-- admin================================================================== -->

            <div class="b">
                <div class="tital">
                    <p class="II"> Add new admin</p>
                </div>
                <form action="signup.inc.php" method="post">
                    <input type="text" name="" placeholder="Admin username" required>
                    <input type="password" name="" placeholder="Password" required>
                    <input type="password" name="" id="" placeholder="Confirm password" required>
                    <button type="submit" name="signup-submit">Add admin</button>
                </form>
                <div class="b-all-admins">
                    <h3>All Admins</h3>
                    <form action="" method="get">
                        <div class="names">
                            <p class="name">Moshood Abiola
                                <a href="">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </a>
                            </p>

                        </div>

                    </form>
                </div>
            </div>
            <!-- ========================================================================-->
        </div>
    </div>
</body>

</html>