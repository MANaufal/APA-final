<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/navbar.css">
        <link rel="stylesheet" href="https://use.typekit.net/oov2wcw.css">
        <link rel="stylesheet" type="text/css" href="css/belajar.css">
    </head>

    <style>
        body{
            font-family: century-gothic;
        }

        label{
            display: flex;
            justify-content: space-around;
            align-items: center;
            font-family: century-gothic;
        }
    </style>
    
    <body>
        <?php
        session_start();

        include 'config.php';
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

        <h1><br></h1>

        <div class = "left">
            <h2 style="text-align:center">Menu Belajar</h2>
            <li style="padding: 25px 1px"><a href=belajar.php>Latihan</a></li>
            <li><a href=materi.php>Materi</a></li>
        </div>

        <div class ="right">
            <h1><img src="gambar/door.jpg" style="top:100%; left: 35%; position: absolute; width: 200px; height: 205px;"></h1>
            <p><br></p>
            <h1 style="right: 49%; bottom: -600%; position: absolute">What is this?</h1>
            <div class="wrapper" style="top: 500px; right: -17%; position: absolute">
                <form method="post" action="level1.php">
                    <button name="answer" type="submit" value="2">Door</button>
                    <button name="answer" type="submit" value="1">Refrigerator</button>
                    <button name="answer" type="submit" value="3">Cupboard</button>
                    <button name="answer" type="submit" value="4">Chair</button>
                </form>
                
            </div>

            <script>
                if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                }
            </script>
        </div>

        <?php
            $sql ="SELECT answer FROM question WHERE question_id = 1";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_row($result);

            if(isset($_POST['answer'])){

                if($_POST['answer'] == $row[0]){
                    ?>
                    <script>alert("Jawaban Benar!")</script>
                    <div class="wrapper" style="bottom: 0%;">
                        <a href="level1soal2.php" style="background-color: red; color: white; border-radius: 10px; padding: 5px 10px">lanjut</a>
                    </div>
                    <?php
                }else{
                    ?>
                    <script>alert("Jawaban Salah!")</script>
                    <?php
                }
            }
        ?>
    </html>
<body>