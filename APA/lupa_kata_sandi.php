<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.typekit.net/oov2wcw.css">
    
    <style>
        body{
            background-image: url("gambar/background-login.jpg");"
            background-repeat: no-repeat;
            background-size: cover;
            font-family: century-gothic;
        }
        input[type=email] {
            width: 50%;
            padding: 10px 20px;
            margin: 8px 0;
            margin-left: auto;
            margin-right: auto;
            display: block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 63px;
        }
         
        button{
            background-color: #750101;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 50%;
            border-radius: 13px;
            font-family: century-gothic;
        }

        .logo {
            float:left;
            display:block;
            width: 40px;
            position: absolute; 
            margin-left: 25%;
            bottom: 130px;
        }

        h1.judul{
            float:left;
            font-size: 40px;
            color: #FFFFFF; 
            text-align: center;
            position: absolute; 
            left: 35%; 
            bottom: 100px;
        }
        
        .center{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        </style>
</head>

<body>

    <form method="post" action="" target="_self"> 
        <div class = "container"
            style =
            "padding: 20px;
            width: 40%;
            height: 100%;
            background-color: #970C10;
            margin-left: 25%;
            margin-right: 25%;
            position: fixed;
            top: 0;"
        >
    <center><h1>Form Lupa Kata Sandi</h1>

    <b><h4>Masukkan email yang sudah pernah terdaftar sebelumnya.</h4></b></center>
    <table align="center"> 
    <tr>
        <td><b>Email</b><td><b>:</b><td><input type="text" name="email"> 
    </tr>
    <tr>
        <td>
        <input type="submit" value="Cek Password">
    </tr>
    </table> 
    </form> 
    <img class="logo" src="gambar/logoweb.png"/>
    <h1 class="judul">SKUYYNATIVE</h1>
</body>
</html>
