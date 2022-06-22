<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/navbar.css">
        <link rel="stylesheet" href="https://use.typekit.net/oov2wcw.css">
        <link rel="stylesheet" type="text/css" href="css/chat.css">
        <style>
            body{
                font-family: century-gothic, sans-serif;
                font-style: normal;
                font-weight: 400px;
            }

            a{
                text-decoration: none;
                color: white;
            }

            tr:hover {background-color: #F7EDD0}
        </style>
    </head>
    
    <body>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <?php
        include 'config.php';

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
            <?php
                }           
            ?>
            <a href="pilih_bahasa.php" style="float:right;"><b>Language</b></a>
        </div>
        </div>
            
        <h1><hr></h1>
        <h1><hr></h1>
        <h1><hr></h1>
        <?php
            $userid = $_SESSION['user_id'];

            $sql="SELECT * FROM users WHERE id != '$userid'";
            $result = mysqli_query($conn, $sql);

                
            if($result->num_rows>0){
                while($row = $result->fetch_assoc()){
                    ?>  
                        <div class = "contact">
                            <?php echo "$row[username]";?>
                            <a href="addfriend.php?addid=<?php echo $row['id']?>"
                            style="
                                float:right;
                                background-color: #DA8C8E;
                                border-radius: 15px;
                                padding: 5px 8px;
                            ">
                                Add Friend
                            </a>
                        </div>
                    <?php
                }
            }
        ?>

        <?php
            if(isset($_GET['addid'])){
                $addid = $_GET['addid'];
                $sql="SELECT * FROM relationship WHERE user_id = '$userid' AND friend_id = '$addid'";
                $run = mysqli_query($conn, $sql);

                if(mysqli_num_rows($run) > 0){                    
                    $sql2 = "SELECT * FROM relationship WHERE user_id = '$addid' AND friend_id = '$userid'";
                    $run2 = mysqli_query($conn, $sql);
                    
                    if(mysqli_num_rows($run2) > 0){
                        ?>
                            <script>alert("You are already friend with this user.")</script>
                        <?php
                    }else{
                        $query2 = "INSERT INTO relationship(user_id, friend_id) VALUES ('$userid', '$addid')";

                        if(mysqli_query($conn, $query3)){
                        ?>
                            <script>alert("New friend has been successfully added!")</script>
                        <?php
                    }
                    }
                }else{
                    $query3 = "INSERT INTO relationship(user_id, friend_id) VALUES ('$userid', '$addid')";

                    if(mysqli_query($conn, $query3)){
                        ?>
                            <script>alert("New friend has been successfully added!")</script>
                        <?php
                    }
                }
            }
        ?>
    </body>
</html>