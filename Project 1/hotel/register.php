
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="register.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        /* Reset some default styles */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Body styles */
body {
  font-family: 'Arial', sans-serif;
  background-color: #f0f0f0;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

/* Login page container styles */
.loginpage {
  background-color: #fff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Heading styles */
h1 {
  text-align: center;
  color: #333;
  margin-bottom: 20px;
}

/* Input box styles */
.inputbox {
  position: relative;
  margin-bottom: 20px;
}

.input {
  width: 100%;
  padding: 10px;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 4px;
  outline: none;
}

/* Icon styles */
i {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  right: 10px;
  color: #888;
}

/* Checkbox styles */
input[type="checkbox"] {
  margin-right: 5px;
}

/* Button styles */
.loginbtn {
  background-color: #4caf50;
  color: #fff;
  padding: 10px 20px;
  font-size: 16px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* Register text styles */
.register {
  margin-top: 20px;
  text-align: center;
  color: #555;
}

.register a {
  color: #4caf50;
  text-decoration: none;
}

/* Forgot Password link styles */
.forget {
  display: block;
  margin-top: 10px;
  color: #888;
  text-decoration: none;
  text-align: right;
}

.forget:hover {
  color: #4caf50;
}
</style>
</head>
<body>
    <div class="loginpage">
        <h1>Sign Up</h1>
        <form action="register_process.php" method="post">
         <div class="inputbox">
            <input class="input" type="text" placeholder="Enter Your Name" name="username" required>
            <i class='bx bx-user-circle'></i>
         </div>
         <div class="inputbox">
            <input class="input" type="password" placeholder=" New Password" name="password" required>
            <i class='bx bxs-lock-alt'></i>
         </div>
         <div class="inputbox">
           <input class="input" type="password" placeholder=" Confirm New Password" name="cpassword" required>
           <i class='bx bxs-lock-alt'></i>
        </div>
        <div class="inputbox">
          <input class="input" type="email" placeholder="Email(someone@examole.com)"  name="email"required>
       </div>
       <div class="inputbox">
         <input class="input" type="text" placeholder="Phone Number"  name="phone"required>
       </div>
       <div class="inputbox">
            <label><input type="checkbox" required>Accept all terms and conditions</label>
            <br>
            <a class="forget" href="login.php">Forgot Password?</a>
        </div>
        <button type="submit" class="loginbtn">Sign Up</button>
        <div class="register">
            <p>Already have an account?<a href="login.php">Log In</a></p>
        </div>
        </form>
    </div>
</body>
</html>