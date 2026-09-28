<?php
   include("database.php");
   $user;
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $email=$_POST['email'];
        $password=$_POST['password'];
        if($conn)
        {
            $sql="SELECT *FROM register WHERE email='$email'";
            $result=mysqli_query($conn,$sql);
            $user=$result->fetch_assoc();
            if($user)
            {
                if(password_verify($password,$user["password"]))
                {
                    echo'<script> alert("Login Successful") </script>';
                    $_SESSION["id"]=$user["id"];
                    header('location:landing.php');
                }
                else
                echo '<script> alert("Incorrect password") </script>';
            }
            else
            {
                echo'<script> alert("Credentials doesnot match.") </script>';
            }
        }
    }
?>