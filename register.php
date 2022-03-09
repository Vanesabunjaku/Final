<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Titulli-->
    <title>Pet Shop</title>
    <!--FONTI I TEXTIT-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
    <!--STYLE FILE NE CSS-->
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="style2.css">    
</head>
<body>
    <header>
      <!--AREA E NAVIGIMIT-->
      <div class="content">
        <div class="wrapper">
      <div class="logo">
      <img src="pets.png" alt="pets" style="max-width:100%;height:auto;"></a>
      </div>
    <ul class="nav-area">
        <li><a href="index.php">Home</a></li>
        <li><a href="kafshet.php">Kafshët</a></li>
        <li><a href="rreth_nesh.php">Rreth Nesh</a></li>
        <li><a href="team.php">Team</a></li>
        <li><a href="register.php">Register Now</a></li>
        </ul>
        </div>
        </div>
        <div class="register-text">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" class= "register">
        <div class="register">
            <h1>Register form</h1>
            <input type="text" name="name" class = "name" placeholder="name..."> <br><br>
            <input type="text" name="surname" class = "surname" placeholder="surname..."> <br><br>
            <input type="text" name="email" class = "email" placeholder="email..."> <br><br>
            <input type="text" name="username" class = "username" placeholder="username..."><br><br>
            <input type="text" name="password" class ="password" placeholder="password..."><br><br>
            <input type="submit" name="registerBtn" class="submit" value="register"><br><br>
        </div>
    </form>
           <!-- <script src="register.js"></script> -->
        </div>
      </header>
    </body>
    </html>