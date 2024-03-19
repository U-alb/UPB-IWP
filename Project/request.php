<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $suggestion = $_POST['suggestion'];
    date_default_timezone_set('Europe/Bucharest'); // Set the desired timezone
    $currentDateTime = date('Y-m-d H:i:s'); // Get the current date and time using PHP

    // TODO: Validate the form data if necessary

    // Connect to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "feedback";

    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected to the database <br>";

    // Prepare and execute the SQL query
    $sql = "INSERT INTO suggestions (username, email, suggestion, created_at) VALUES ('$name', '$email', '$suggestion', '$currentDateTime')";

    if ($conn->query($sql) === TRUE) {
        // Close the database connection
        $conn->close();

        // Display an alert message and redirect the user
        echo '<script>
                alert("We received your suggestion and will review it soon!");
                window.location.href = "home.html";
              </script>';
        exit(); // Terminate the script execution
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
