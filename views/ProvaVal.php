<?php
    $connect=mysqli_connect("localhost","root","","projekti") or die("Connection Failed");
    if(!empty($_POST['log']))
    {   
        $username=$_POST['username'];
        $password=$_POST['password'];
        include_once 'users.php';

           $i=0;
           foreach($users as $user){
               $i++;
               if($username == $user['username'] && $password == $user['password']){
                   echo $username;
                   echo $password;

                   session_start();
                   $_SESSION['username'] = $username;
                   $_SESSION['password'] = $password;
                   $_SESSION['role'] = $user['role'];
                  // setcookie("username","$username",time()+(30*60));
                  // setcookie("username","$username",time()-(60*60));
                   header("location:Admin.php");
                   exit();
               }
            }
        $query="select * from user where username='$username' and password='$password'";
        $result=mysqli_query($connect,$query);
        $count=mysqli_num_rows($result);
        if($count>0)
        {
            echo "Login Sucessful";
            header("location:Home.php");
        }
        else{
            echo "Login Not Successful";
        }
    }

?>