<?php include "ClientAuth.php";?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ADD project</title>
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
  .form-group input ,textarea{
    margin: 0px 20px 0px;
  }
  <?php include "navcss.php";?>
</style>
</head>
<body>
  <div class="container">
    <?php include "navbar.php";?>
    <h2> New Post</h2>
    <form method="post" action="./server/createpost.php"> 
    
      <div class="form-group">
        <input type="text" placeholder="Name" name="Pname" required>
      </div>
      
      <div class="form-group">
        <textarea name="desc" id="" cols="30" rows="10" placeholder="Short info about it"></textarea>
      </div>
      <div class="form-group">
        <input type="submit" value="Create Post">
    </form>
  </div>
</body>
</html>
