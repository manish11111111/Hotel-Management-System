<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
   * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Body styles */
body {
  font-family: 'Arial', sans-serif;
  background-color: #f4f4f4;
}

/* Login page styles */
.loginpage {
  max-width: 400px;
  margin: 50px auto;
  background-color: #fff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Form styles */
form {
  display: flex;
  flex-direction: column;
}

h1 {
  text-align: center;
  margin-bottom: 20px;
  color: #333;
}

/* Input box styles */
.inputbox {
  position: relative;
  margin-bottom: 20px;
}

.input {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  outline: none;
}

i {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  right: 10px;
  color: #666;
}

/* Remember me and Forgot Password styles */
.rem-forget {
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 10px;
  color: #555;
}

/* Login button styles */
.loginbtn {
  background-color: #3498db;
  color: #fff;
  padding: 10px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.loginbtn:hover {
  background-color: #2980b9;
}

/* Register link styles */
.register {
  text-align: center;
  color: #555;
}

.register a {
  color: #3498db;
  text-decoration: none;
}

.register a:hover {
  text-decoration: underline;
}
</style>
</head>
<body>
    <div class="loginpage">
        <form action="process_login.php" method="post">
        <h1>Login</h1>
        <div class="inputbox">
            <input class="input" type="email" placeholder="Email" name="email" required>
            <i class='bx bx-user-circle'></i>
        </div>
        <div class="inputbox">
            <input class="input" type="password" placeholder="Password" name="password" required>
            <i class='bx bxs-lock-alt'></i>
        </div>
        <div class="rem-forget">
            <label><input type="checkbox">Remember me</label>
            <br>
            <a class="forget" href="login.php">Forgot Password?</a>
        </div>
        <button type="submit" class="loginbtn">Login</button>
        <div class="register">
            <p>Don't have an account?<a href="register.php">Register Now</a></p>
        </div>
        </form>
    </div>
    <!-- <form action="action_page.php" method="post">
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form> -->
</body>
</html>