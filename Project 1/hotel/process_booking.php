<?php
include("database.php");
if($_SERVER['REQUEST_METHOD']=='POST')
{
  $name=$_POST['name'];
  $address=$_POST['address'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $gender=$_POST['gender'];
  $id=$_POST['id'];
  $roomtype=$_POST['roomtype'];
  $addn_features=$_POST['extrafeatures'];
  $cindate=$_POST['cindate'];
  $coutdate=$_POST['coutdate'];
  $age=$_POST['age'];
  if($conn)
  {
    if($age<18)
    {
      echo '<script>alert("Your Age must be 18 to make a booking")</script>';
      return;

    }
    else
    {
      $sql1="SELECT id FROM room_categories WHERE name like'$roomtype'";
      $cat=mysqli_query($conn,$sql1);
      $cat_id=$cat->fetch_assoc();
      $sql="INSERT INTO checked(name,contact_no,date_in,date_out,booked_cid) VALUES('$name','$phone','$cindate','$coutdate','$cat_id')";
      $result=mysqli_query($conn,$sql);
      if($result)
      {
        echo'<script> alert( "Booked Succesfully") </script>';
      }
      else
      {
        echo' <script> alert("Booking failed") </script>';
      }
    }
  }
}
?>