<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/navbar.css">
        <link rel="stylesheet" href="https://use.typekit.net/oov2wcw.css">
    </head>

    <style>
        body{
            font-family: century-gothic;
        }

        h3.bahasaibu {
            position: absolute; 
            left: 5%; 
            top: 100px; 
            font-size: 25px; 
            color: #947360; 
            text-align: center;
        }

        .e {
            display:block;
            width: 200px;
            position: absolute;  
            top: 200px;
            left: 5%;
            
        }

        .i {
            display:block;
            width: 200px;
            position: absolute;  
            top: 200px;
            left: 23%;   
        }

        h3.bahasayangdipelajari {
            position: absolute; 
            left: 5%; 
            top: 350px; 
            font-size: 25px; 
            color: #947360; 
            text-align: center;
        }

        .e2 {
            display:block;
            width: 200px;
            position: absolute;  
            top: 450px;
            left: 5%;
            
        }

        .i2 {
            display:block;
            width: 200px;
            position: absolute;  
            top: 450px;
            left: 23%;   
        }

    </style>
    </head>
    
    <body>
        <h3 class="bahasaibu">Pick your mother language</h3> 
        <a href=pilih_bahasa.php?motherlanguage=English><img class="e" src="gambar/English.png"/></a>
        <a href=pilih_bahasa.php?motherlanguage=Indonesia><img class="i" src="gambar/Indonesia.png"/></a>
        <h3 class="bahasayangdipelajari">Bahasa yang dipelajari</h3> 
        <a href=pilih_bahasa.php?learninglanguage=English><img class="e2" src="gambar/English.png"/></a>
        <a href=pilih_bahasa.php?learninglanguage=Indonesia><img class="i2" src="gambar/Indonesia.png"/></a>
 
    <?php
    session_start();
    include 'config.php';

    $userid = $_SESSION['user_id'];

    if(isset($_GET['motherlanguage'])){
        $language = $_GET['motherlanguage'];
        $query1 = "UPDATE users SET bahasa_ibu = '$language' WHERE id = '$userid'";

        if(mysqli_query($conn, $query1)){
            ?>
                <script>alert("Mother language has been set.")</script>
            <?php
        }
    }

    if(isset($_GET['learninglanguage'])){
        $language = $_GET['learninglanguage'];
        $query2 = "UPDATE users SET bahasa_belajar = '$language' WHERE id = '$userid'";

        if(mysqli_query($conn, $query2)){
            ?>
                <script>alert("Learning language has been set.")</script>
            <?php
        }
    }
    ?>
        <div class = "navbar">
            <a href="belajar.php" style = "float:left"><b>BELAJAR</b></a>
            <a href="timeline.php" style = "float:left"><b>LINIMASA</b></a>
            <a href="chat.php" style = "float:left"><b>PESAN</b></a>

            <?php
            if(!isset($_SESSION['username'])){
                ?>
                <a href="login.php" style = "float:right">Log in</a>
                <?php
            }else{
                ?>
                <div class = "dropdown" style ="float:right">
                    <a style = "float:right"><?php echo $_SESSION['username']?></a>

                    <div class = "dropdown-content">
                        <a href="logout.php">Log Out</a>
                    </div>
                </div>
                <?php
            }
            ?>
            <a href="pilih_bahasa.php" style="float:right;"><b>Language</b></a>

        </div>
        </div>