<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container my-5">
        <h1>List of Clients</h1>
        <a class="btn btn-primary" href="./create.php" role="button">New Client</a>
        <br>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

                <?php
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

                // Query to select all clients
                $sql = "SELECT * FROM client";
                $result = $conn->query($sql);

                if(!$result){
                    die("Query failed: " . $conn->error);
                }

                // Loop through all table records
                while($row = $result->fetch_assoc()) {
                    echo "
                    <tr>
                        <td>$row[id]</td>
                        <td>$row[name]</td>
                        <td>$row[email]</td>
                        <td>$row[phone]</td>
                        <td>$row[address]</td>
                        <td>$row[created_at]</td>
                        <td>
                            <a class='btn btn-warning' href='./edit.php?id=$row[id];' >Edit</a>
                            <a class='btn btn-danger' href='./delete.php?id=$row[id];' >Delete</a>
                        </td>
                    </tr>";
                }

                ?>

            </tbody>
        </table>
    </div>

</body>

</html>