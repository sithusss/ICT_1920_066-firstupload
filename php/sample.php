<?php
// Initialize variables to hold error messages
$errors = [];
$name = $email = $message = "";

// Function to sanitize input data
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize name
    if (empty($_POST["name"])) {
        $errors["name"] = "Name is required";
    } else {
        $name = sanitize_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $errors["name"] = "Only letters and spaces are allowed";
        }
    }

    // Validate and sanitize email
    if (empty($_POST["email"])) {
        $errors["email"] = "Email is required";
    } else {
        $email = sanitize_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors["email"] = "Invalid email format";
        }
    }

    // Validate and sanitize message
    if (empty($_POST["message"])) {
        $errors["message"] = "Message is required";
    } else {
        $message = sanitize_input($_POST["message"]);
        // You can add additional checks to prevent malicious code here
    }

    // If no errors, proceed with further actions (e.g., sending email)
    if (empty($errors)) {
        // Perform actions like sending email or storing data in a database
        // Remember to properly sanitize and validate data before using in these actions
        // ...
        // After successful actions, you might want to redirect or display a success message
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name: <input type="text" name="name" value="<?php echo $name; ?>">
        <span class="error"><?php echo $errors["name"]; ?></span>
        <br><br>
        Email: <input type="text" name="email" value="<?php echo $email; ?>">
        <span class="error"><?php echo $errors["email"]; ?></span>
        <br><br>
        Message: <textarea name="message"><?php echo $message; ?></textarea>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>

<?php
    function insertData(){
        
    }
?>
