<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php include "bootstrap.php";?>
    <title>iForum - Home</title>
    <style>
        /* Reset CSS */
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
            overflow-x: hidden; /* Hide horizontal overflow */
        }

     <?php include "navcss.php";?>


        /* Community Cards */
        .community-card {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: 20px 10px;
            padding: 20px;
            text-align: center;
            width: 300px; /* Adjusted width */
            height: auto; /* Adjusted height */
            cursor: pointer; /* Added cursor pointer */
        }

        .community-card:hover { /* Highlight on hover */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .community-card img {
            width: 120px; /* Adjust image size */
            height: 120px;
            object-fit: cover; /* Maintain aspect ratio */
            border-radius: 50%; /* Rounded corners */
            margin-bottom: 10px; /* Spacing below image */
        }

        .community-card h3 {
            color: #007bff;
            margin-bottom: 10px;
        }

        .community-card p {
            color: #666;
            margin-bottom: 10px;
        }

        .community-card .arrow-button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .community-card .arrow-button:hover {
            background-color: #0056b3;
        }

        /* Footer */
        footer {
            background-color: #007bff;
            padding: 20px;
            color: #fff;
            text-align: center;
            width: 100%;
            margin-top: 20px;
        }

        footer p {
            margin: 0;
        }

        /* Responsive Styling */
        @media (max-width: 768px) {
            .community-card {
                width: calc(100% - 40px); /* Full width with margins */
            }
        }
    </style>
    <script>
        function redirectTo(to,url) {
            window.location.href = to+"-screen.php?Pid="+url;
        }
    </script>
</head>
<body>
    <?php include "navbar.php";?>
    <div class="container">
        <div class="row">
            
            <?php
                include "server/conn.php";
                $sql = "SELECT * from posts ORDER BY Pid DESC LIMIT 10 ";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                         <div class="community-card" >
                            <img src="community2.jpg" alt="Community 2">
                            <h3><?php echo $row['name'];?></h3>
                            <p><?php echo $row['description'];?></p>
                            <button class="arrow-button" onclick="redirectTo('chat',<?php echo $row['Pid'];?>)"><i class="fa-brands fa-rocketchat"></i> Chat</button>
                            <button class="arrow-button" onclick="redirectTo('discuss',<?php echo $row['Pid'];?>)"><i class="fa-solid fa-comments"></i> Discuss</button>
                        </div>
                    <?php
                }
                mysqli_close($conn);
            ?>
           
           
        </div>
        <!-- Add more community cards here -->
    </div>
    <footer>
        <p>&copy; 2024 iForum Network. All rights reserved.</p>
    </footer>

