<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/navbar.css">
        <link rel="stylesheet" href="https://use.typekit.net/oov2wcw.css">
        <style>
            body{
                font-family: century-gothic, sans-serif;
                font-style: normal;
                font-weight: 400px;
            }

            .logo {
                float:left;
                display:block;
                width: 40px;
                position: absolute; 
                left: 135px; 
                top: 105px;
            }

            h1.judul{
                float:left;
                font-size: 40px;
                color: #970C10; 
                text-align: center;
                position: absolute; 
                left: 180px; 
                top: 90px;
            }

            .gambar {
                float:right;
                display:block;
                width: 750px;
                position: absolute;  
                top: 60px;
                right: 10px;
            }
            
            button{
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 30%;
                border-radius: 69px;
            }
            
            table {
                border-radius: 50px;
                width: 50%;
                margin-top: 20%;
                margin-left: 25%;
            }
 
            table, th, td {
                border-radius: 10px;
            }

            th, td {
                padding: 20px;
            }

            th {
                background-color: #947360;
                color: white;
            }

            tr:hover {background-color: #F7EDD0}
        </style>
    </head>
    
    <body>
        <img class="logo" src="gambar/logoweb.png"/>
        <h1 class="judul">SKUYYNATIVE</h1>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <?php
    session_start();
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
                <script>
                    swal("TODAY'S VOCABULARY!", "", "info");
                </script>
                <?php
            }
            ?>
            <a href="pilih_bahasa.php" style="float:right;"><b>Language</b></a>
        </div>
        </div>
        <div>   
        <table>
        <tr>
            <th>VOCABULARY</th>
            <th>MEANING</th>
        </tr>
        <tr>
            <td>Accompany</td>
            <td>Menemani</td>
        </tr>
        <tr>
            <td>Accuse</td>
            <td>Menuduh</td>
        </tr>
        <tr>
            <td>Accept</td>
            <td>Menerima</td>
        </tr>
    </table>
    </div>
    </body>
</html>