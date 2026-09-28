
<?php
       include("database.php");
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $name=$_POST['username'];
            $password=$_POST['password'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $cpassword=$_POST['cpassword'];
            $emailsql="SELECT *FROM register WHERE email='$email'";
            $result_email=mysqli_query($conn,$emailsql);
            $email_user=$result_email->fetch_assoc();
            if($conn){
                if($email_user)
                {
                    echo'<script> alert ("Email already in use") </script>';
                    return;
                }
                $phnsql="SELECT *FROM register WHERE phone=$phone";
                $result_phn=mysqli_query($conn,$phnsql);
                $phn_user=$result_phn->fetch_assoc();
                if($phn_user)
                {
                    echo'<script> alert ("Phone Number already in use") </script>';
                    return;
                }
                if(strlen($password)<8)
                {
                    echo'<script> alert ("Your password must be 8 characters long.")</script>';
                    return;
                }
                 if(!preg_match("/[a-z]/i",$password))
                {
                    echo'<script> alert ("password must contain at least one letter")</script>';
                    return;
                }
                if(!preg_match("/[0-9]/",$password))
                {
                    echo'<script> alert("password must contain at least one number")  </script>';
                    return;
                }
                if($password != $cpassword)
                {
                   echo'<script> alert("Passwords must match") </script>';
                   return;
                }
                if($conn->connect_errno)
                {
                    die("connection error");
                }
               
                $hash= password_hash($password, PASSWORD_DEFAULT);
                $sql="INSERT INTO register(name,password,email,phone)VALUES('$name','$hash','$email',$phone)";
                $result=mysqli_query($conn,$sql);
                if($result){
                    echo '<script> alert("Signed Up Succesfully>You can Now login") </script>';
                    header('location:login.php');
                }
                else
                    echo'<script> alert("Failed to Sign up")</script>';
            }
                else
                    echo '<script> alert( "Failed to Connect")</script>';
                    return $conn;
           
        }
?>