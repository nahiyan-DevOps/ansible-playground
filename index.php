<!DOCTYPE html>
<html>
<head>
    <title>Input Form</title>
</head>
<body>
    <h1>Input Form</h1>

    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the user input from the form
        $name = $_POST["name"];
        
        // Display the customized message
        echo "<h2>Hello, " . $name . "!</h2>";
        echo "<p>Welcome to our website. We're glad you're here!</p>";
    }
    ?>

    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
