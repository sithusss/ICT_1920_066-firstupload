<?php
function signUpUser($nic, $password1, $password2, $email, $connection) {
    if ($password1 !== $password2) {
        echo "<script>alert('Passwords do not match.')</script>";
        return false;
    } else {
        $sql = "INSERT INTO signup (nic, password, email) VALUES (?, ?, ?)";
        $statement = $connection->prepare($sql);
        $statement->bind_param("sss", $nic, $password1, $email);

        if ($statement->execute()) {
            echo '<script>alert("Record inserted successfully")</script>';
        } else {
            $error=$statement->error;
            echo '<script>alert("Error: ' . $error . '");</script>';
        }

        $statement->close();
        return true;
    }
}

function signInUser($nic, $password, $connection) {
    // Query to check if the user exists with the provided NIC and password
    $sql = "SELECT * FROM signup WHERE nic = ?";
    
    $statement = $connection->prepare($sql);
    $statement->bind_param("s", $nic);
    $statement->execute();
    
    $result = $statement->get_result();
    
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if ($user['password'] === $password) {
            // Password matches, perform necessary actions (e.g., set session)
            echo '<script>alert("sign in successfully")</script>';
            header('location:welcome.php');
            // You can set session variables here to indicate user is signed in
        } else {
            echo '<script>alert("Invalid password")</script>';
        }
    } else {
        echo '<script>alert("user not found")</script>';
    }
    
    $statement->close();
}

function fetchData($nic,$connection){
    $sql = "SELECT * FROM booking WHERE nic = '$nic'";

    $result = $connection->query($sql);
    if ($result->num_rows > 0) {
        echo '<table border="1">';
        echo '<tr>
                <th>Booking ID</th>
                <th>NIC</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Citizenship</th>
                <th>Category</th>
                <th>Booking Date</th>
                <th>No of Bookings</th>
              </tr>';
    
        while ($row = $result->fetch_assoc()) {
            echo '<tr>
                    <td>' . $row['booking_no'] . '</td>
                    <td>' . $row['nic'] . '</td>
                    <td>' . $row['fname'] . '</td>
                    <td>' . $row['lname'] . '</td>
                    <td>' . $row['nationality'] . '</td>
                    <td>' . $row['age_range'] . '</td>
                    <td>' . $row['booking_date'] . '</td>
                    <td>' . $row['no_booking'] . '</td>
                  </tr>';
        }
    
        echo '</table>';
    } else {
        echo "<br />No data available.";
    }
    
}


function validateInput($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

function validateName($name) {
    if (empty($name)) {
        return "Name is required";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        return "Only letters and spaces are allowed";
    }
    return "";
}

function validateEmail($email) {
    if (empty($email)) {
        return "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "Invalid email format";
    }
    return "";
}
    

function validateMessage($message) {
    if (empty($message)) {
        return "Message is required";
    }
    // You can add additional validation rules for the message content if needed
    return "";
}

function sanitizeMessage($message) {
    // Remove potentially harmful HTML tags and entities
    $sanitizedMessage = strip_tags($message);
    // If needed, you can also use htmlspecialchars to encode special characters
    $sanitizedMessage = htmlspecialchars($sanitizedMessage, ENT_QUOTES, 'UTF-8');
    return $sanitizedMessage;
}
?>




