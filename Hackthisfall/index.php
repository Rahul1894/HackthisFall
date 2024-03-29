<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iForum - About</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f9fafb;
            margin: 0;
            padding: 0;
            overflow-x: hidden; 
        }

        .header {
            position: relative;
            height: 100vh;
            background: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)), url('bg.jpg');
            background-size: cover;
            background-position: center center;
            display: flex;
            flex-direction: row;
            justify-content: flex-start;
            align-items: center;
            color: #fff;
        }
        .header-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        }

        .text-container {
            max-width: 700px;
            margin: 0 auto;
        }

        .main-content {
            padding: 15px;
            border-radius: 10px; 
        }

        .main-content h1 {
            color: yellowgreen;
            font-size: 36px;
            margin-bottom: 15px;
        }

        .main-content p {
            color: #fff;
            font-size: 20px;
            line-height: 1.6;
            padding-bottom: 20px;
        }
        
        .logo-container {
            position: absolute;
            top: 20px;
            left: 20px;
            display: flex;
            align-items: center;
        }

        .logo-container a {
            text-decoration: none;
            color: inherit;
        }

        .logo-container img.logo {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 50%;
            margin-right: 20px;
        }

        .nav-buttons {
            position: absolute;
            top: 20px;
            right: 20px;
            display: flex;
            align-items: center;
        }

        .nav-buttons button {
            background-color: #2c3e50; 
            color: #ecf0f1;
            border: none; 
            padding: 10px 20px;
            border-radius: 5px;
            margin-left: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease;
            font-size: 15px;
        }

        .nav-buttons button:hover {
            background-color: #34495e; 
            color: #fff; 
        }

        .footer {
            background-color: #2c3e50; 
            color: #fff;
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: center;
            padding: 50px 0;
            box-sizing: border-box;
        }

        .footer-section {
            flex: 1;
            padding: 0 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .footer-section h3 {
            margin-bottom: 20px;
            font-size: 24px;
        }

        .footer-section p {
            margin-bottom: 10px;
            font-size: 18px;
        }

        .footer-section ul {
            list-style: none;
            padding: 0;
        }

        .footer-section ul li {
            margin-bottom: 10px;
        }

        .footer-section ul li a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-section ul li a:hover {
            color: #ffd700;
        }

        .footer-bottom {
            width: 100%;
            text-align: center;
            padding-top: 20px;
        }

        .footer-bottom p {
            font-size: 16px;
        }

        .social-icons {
            margin-top: 20px;
        }

        .social-icons a {
            color: #fff;
            margin: 0 10px;
            font-size: 24px;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .social-icons a:hover {
            color: #ffd700;
        }

        .image-container {
            padding-top: 0px;
            overflow-x: autox; 
            white-space: nowrap;
            padding-left: 15px; 
        }

        .image-container img {
            width: 150px;
            height: 150px;
            margin-right: 25px;
        }
        .clienthead{
            padding-top: 5px;
            font-weight: bold;
            font-size: 30px;
            color: yellowgreen;
            padding-bottom: 30px;
        }


<?php include "navcss.php";?>
    </style>
</head>
<body>
    <?php include "navbar.php";?>
    <header class="header">
        
        <div class="header-content">
            <div class="text-container">
                <div class="main-content">
                    <h1>About iForum</h1>
                    <p>iForum is a platform for users to connect, share ideas, and engage in meaningful discussions. Our mission is to create a vibrant community where individuals can express themselves freely and learn from one another. Whether you're a seasoned professional or a newcomer, iForum welcomes you to join our diverse community and be part of the conversation.</p>
                    <hr>
                    <!-- <h2 class="clienthead">Our Happy Client's  </h2> -->
                    <!-- <div class="image-container">
                        <img src="microsoft.png" alt="Image 1">
                        <img src="apple.png" alt="Image 2">
                        <img src="google.jpg" alt="Image 3">
                        <img src="netflix.png" alt="Image 4">
                    </div> -->
                </div>
            </div>
        </div>
    </header>   
    <footer class="footer">
        <div class="footer-section">
            <h3>Company Info</h3>
            <p>iForum is a platform for users to connect, share ideas, and engage in meaningful discussions.</p>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
        <div class="footer-section">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>Contact Info</h3>
            <p>123 Street Name, City, Country</p>
            <p>Email: info@example.com</p>
            <p>Phone: +1234567890</p>
        </div>
    </footer>
</body>
</html>