<?php
    include '../php/config.php';
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Welcome Page</title>

    <style>
        body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
}

.welcome-container {
    text-align: center;
    margin-top: 150px;
}

h1 {
    font-size: 36px;
    color: #333;
}

p {
    font-size: 18px;
    color: #666;
    margin-top: 10px;
}

button {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    cursor: pointer;
    font-size: 16px;
    margin-top: 20px;
}

button:hover {
    background-color: #0056b3;
}
table{
    display: block;
    justify-content: center;
    margin: 60px 80px 60px 76px;
    border-collapse: collapse;
    background-color: rgb(54,110,59);
    color: #f2f2f2;
}

th,tr,td{
    padding: 13px 40px;
    
}

    </style>
</head>
<body>
    <div class="welcome-container">
        <h1>Welcome to Our Website</h1>
        <p>You are now logged in and ready to explore your existing bookigs!</p>

        <div>
           <?php

                session_start();
                $nic = $_SESSION['nic']; // Retrieve the NIC from the session
                include '../php/functions.php'; // Include your functions file
                fetchData($nic, $connection); // Call the fetchData function

            
           ?>
        </div>
        <button id="logout-btn">Log Out</button>
    </div>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
    // Add click event listener to the logout button
        document.getElementById("logout-btn").addEventListener("click", function() {
            // Clear the session and redirect to the sign-in page
            //sessionStorage.clear();
            window.location.href = "login.php"; // Replace with your actual sign-in page URL
        });
    });

    </script>

</body>
</html>
