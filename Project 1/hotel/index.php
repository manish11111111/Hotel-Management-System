<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mero Hotel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="index.css">
    <script src="index.js"></script>
   

</head>
<body>
    <header>
        <div class="navbar">
           <div class="logo border"><a href="#">Mero Hotel.com</a></div>
           <div class="border"><a href="#"><i class="fa-solid fa-house"></i>Home</a></div>
           <div  class="border"><a href="booking.php">Rooms</a></div>
           <div  class="border"><a href="services.php">Our services</a></div>
           <div  class="border"><a href="#">Help</a></div>
            <div class="border"><a href="#">Contact us</a></div>
            </div>
        </div>
        <div class="info-bar">
           <b>Mero Hotel Essentials</b>
           <i class="fa-solid fa-wifi">Free-Wifi</i>
           <i class="fa-solid fa-tv">Television</i>
           <i class="fa-solid fa-bell-concierge">Effective Service</i>
           <div class="login">
             <i class="fa-solid fa-user-plus register-icon"></i>
             <button id="register"><a href="register.php">Register</a></button>
             <i class="fa-solid fa-user login-icon"></i>
             <button id="login"><a href="login.php">Login</a></button>
            </div>
</div>

    </header>
    <main>
    <div class="main">
        <div class="welcome">"Welcome! Escape,Unwind, and Experience comfort like never before at our Hotel.<pre id="welcome"> <a id="BookNow" href="/booking.html"  >Book Now</a></pre><pre id="welcome"> for an unforgettable stay!"</pre></div>
        <div class="mainpic">
           <div id="bookbar">
            <form  id="book" action="check_availability.php" method="post">
                <P>Check-In-Date</P><input id="cidate" type="date" name="check_in_date"></input>
                <p>Check-Out-Date</p><input id="codate" type="date" name="check_out_date"></input>
                <p>Select Room Type</p>
                <select id="rooms" name="roomtype">
                 <option value="Single">Single</option>
                 <option value="Double">Double</option>
                 <option value="Couple">Couple</option>
                 <option value="Family">Family</option>
                 <option value="Group">Group</option>
                </select>
                <button id="availability">Check-Availability</button>
            </form>
          </div>
      </div>
      </div>
      </main>
    <footer>
      <div class="backtotop"><a class="btt" href="#">Back To Top</a></div>
     <div class="foot">
        <div class="contactus">
            <p id="footer">For Any Queries,<i class="fa-solid fa-phone"></i>Contact Us at:</p>
            <i class="fa-solid fa-phone"></i>+977-9829334976 
            <br>
            <i class="fa-solid fa-phone"></i>+977-9861526806
            <br>
            <i class="fa-solid fa-phone"></i>+977-9745875081
            <br>
        </div>
        <div class="policies">
            <p id="footer">Our Policies:</p>
            <a id="footerlinks" href="/privacy.html">Privacy</a>
            <br>
            <a id="footerlinks" href="/terms.html">Terms and Conditions of use</a>
        </div>
        <div class="help">
            <p id="footer">Help & Support:</p>
            <a id="footerlinks" href="terms.html">Cancel your Booking</a>
            <br>
            <a id="footerlinks" href="#">Refund Policies and Processes</a>
        </div>
        <div class="feedback">
            <i class="fa-solid fa-comment"></i>Help us Grow with your Feedbacks!!
            <input id="feedback" type="text" placeholder="Give Your Valuable Feedback here!!">
            <br>
            <button id="submit">Submit</button>
        </div>
     </div>
     <div class="copyright">
        <i class="fa-solid fa-copyright"></i>Copyright 2023 Mero Hotel.All Rights Reserved.
     </div>
    </footer>
    <script>
    // JavaScript to open and close the modal
    function openModal() {
        document.getElementById('loginModal').style.display = 'block';
    }

    function closeModal() {
        document.getElementById('loginModal').style.display = 'none';
    }

    // Close the modal if the user clicks outside of it
    window.onclick = function(event) {
        if (event.target == document.getElementById('loginModal')) {
            closeModal();
        }
    }
</script>
</body>
</html>