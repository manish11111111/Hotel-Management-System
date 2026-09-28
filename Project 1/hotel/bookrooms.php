<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BookRoom</title>
  <link rel="stylesheet" href="bookrooms.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <div class="bookform">
      <h1>Booking Form</h1>
      <form action="process_booking.php" method="post">
       <div class="input">
         <label forname="name">Full Name</label>
         <input type="text" class="inputbox" placeholder="Enter Full Name" name="name" required>
       </div>
       <div calss="input">
         <label forname="address">Address</label>
         <input type="text" class="inputbox" placeholder="Enter Your Address" name="address" required>
       </div>
       <div calss="input">
         <label forname="email">E-mail</label>
         <input type="email" class="inputbox" placeholder="Enter Your E-mail(e.g.someone@gmail.com)" name="email" required>
       </div>
       <div calss="input">
         <label forname="phone">Phone</label>
         <input type="text" class="inputbox" placeholder="Enter Your phone number" name="phone" required>
       </div>
       <div calss="input">
         <label forname="age">Age</label>
         <input type="number" class="inputbox" placeholder="Enter Your Age" name="age" required>
       </div>
       <div calss="input">
         <label forname="gender">Gender</label>
              <select id="rooms" name="gender" required>
                 <option value="male" >Male</option>
                 <option value="female">Female</option>
                 <option value="other">Other</option>
              </select>
       </div>
       <div calss="input">
         <label forname="id">Id</label>
              <select id="id" name="id" required>
                 <option value="citizenship">Citizenship</option>
                 <option value="passpost">Passport</option>
                 <option value="liscence">liscence</option>
              </select>
       </div>
       <div calss="input">
         <label forname="roomtype">Room Type</label>
              <select id="roomtype" name="roomtype" required>
                 <option value="Single">Single</option>
                 <option value="Double">Double</option>
                 <option value="Couple">Couple</option>
                 <option value="Family">Family</option>
                 <option value="Group">Group</option>
              </select>
              <script>
              if(document.getElementById(roomtype)=='Single'){
              <?php
              echo"Cost:1000";
              ?>}
              elseif(document.getElementById(roomtype)=='Double'){
              <?php
              echo"Cost:1200";
              ?>
              }
              elseif(document.getElementById(roomtype)=='Family'){
              <?php
              echo"Cost:1800";
              ?>
              }
              else{
              <?php
              echo"Cost:2000";
              ?>
              }
</script>
       </div>
       <div calss="input">
         <label forname="extrafeatures">Additional Features</label>
              <select id="extrafeatures" name="extrafeatures" required>
                 <option value="normal">Normal</option>
                 <option value="ac">Ac</option>
              </select>
       </div>
       <div class="input">
        <label forname="cindate">Check-in Date</label>
        <input type="date" placeholder="cindate" class="inputbox" name="cindate" required>
       </div>
       <div class="input">
        <label forname="coutdate">Check-out Date</label>
        <input type="date" placeholder="coutdate" class="inputbox" name="coutdate" required>
       </div>
        <div class="input">
        <button type="submit" id="booknow">Book Now</a></button>
      </div>
      </form>
</div>

</body>
</html>