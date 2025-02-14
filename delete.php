<?php

$errorMessage = "";
$successMessage = "";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Include the database connection file
    $severname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myshop";

    // Create connection
    $conn = new mysqli($severname, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "DELETE FROM client WHERE id = $id";
    $result = $conn->query($sql);

    if (!$result) {
        $errorMessage = "Invalid query: " . $conn->error;
    } else {
        $successMessage = "Client deleted correctly!";
    }
}

header("location: /my-php-project/php-crud/index.php");
exit;


?>




