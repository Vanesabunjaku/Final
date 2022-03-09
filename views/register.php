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
    <link rel="stylesheet" href="style3.css">   
    <link rel="stylesheet" href="style2.css"> 
</head>
<body>
    <header class="rclass">
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
        <!--REGISTER FORMA-->
        <div class="register-text">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" class ="register" method="post">
              <div class="register">
             <br><label>Name</label>
            <br><input type="text" placeholder= "Enter your name" id="Name" name="name"/>
            <br><small for="Username" id="usernameMessage"></small><br>
            <br><label>Surname</label>
            <br><input type="text" placeholder= "Enter your surname" id="Surname" name="surname"/>
            <br><small for="Username" id="usernameMessage"></small><br>
            <br><label>E-mail</label>
            <br><input type="email" placeholder= "Enter your e-mail" id="Email" name="email"/>
            <br><small for="Email" id="emailMessage"></small><br>
            <br><label>Username</label>
            <br><input type="text" placeholder= "Enter your username" id="Username" name="username"/>
            <br><small for="Username" id="usernameMessage"></small><br>
        <br><label>Create password</label>
            <br><input type="password" placeholder="Enter your password" id="Password" name="password"/>
            <br><small for="Password" id="passMessage"></small><br>
            <br>       <input id="submit" type="submit" value="Register Now" name="registerBtn">
      <br><br><br> <p>Already have an account?<a href="login.php">Login here</a></p>
              </div>
          </form>
          <script src="register.js"></script>
          <?php include_once '../controller/registerController.php'; ?>
      </div>
      </header>
    </body>
    </html>