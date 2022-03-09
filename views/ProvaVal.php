<?php
    $connect=mysqli_connect("localhost","root","","projekti") or die("Connection Failed");
    if(!empty($_POST['log']))
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
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