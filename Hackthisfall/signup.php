<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Create Account</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }

  .container {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    padding: 40px;
    width: 400px;
    max-width: 90%;
  }

  h2 {
    text-align: center;
    color: #333;
  }

  input[type="text"],
  input[type="password"],
  input[type="email"] {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  input[type="submit"] {
    width: 100%;
    background-color: #007bff;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
  }

  input[type="submit"]:hover {
    background-color: #0056b3;
  }

  .form-group {
    margin-bottom: 20px;
    display: flex;
    flex-direction: row;
  }

  .form-group:last-child {
    margin-bottom: 0;
  }
  .form-group input {
    margin: 0px 20px 0px;
  }
</style>
</head>
<body>
  <div class="container">
    <h2>Create Account</h2>
    <form method="post" action="./server/signup.php"> 
    <div class="form-group ">
        <input type="text"  placeholder="First name" name="fname" required>
        <input type="text"  placeholder="Last name" name="lname" required>
      </div>
      <div class="form-group">
        <input type="text" placeholder="Username" name="uname" required>
      </div>
      <div class="form-group">
        <input type="email" placeholder="Email" name="email" required>
      </div>
      <div class="form-group">
        <input type="password" placeholder="Password" name="password" required>
      </div>
      <div class="form-group">
        <input type="password" placeholder="Confirm Password" required>
      </div>
      <div class="form-group">
        <input type="submit" value="Create Account">
      </div>
      already have Account? <a href="login.php"> Log in </a>
    </form>
  </div>
</body>
</html>
