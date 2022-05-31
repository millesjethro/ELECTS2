<!DOCTYPE html>
<html>
    <head>
        <title>
            Connect to MySql
        </title>
    </head>
<body>
    <?php
        $mysqli = new mysqli("localhost","root","","ultimate");

        if ($mysqli -> connect_errno) {
            echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
            exit();
        }

        $sql = "CREATE TABLE UltGuest (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            lastname VARCHAR(30) NOT NULL,
            firstname VARCHAR(30) NOT NULL,
            middlename VARCHAR(30) NOT NULL,
            gender VARCHAR(30) NOT NULL,
            emailAddress VARCHAR(50),
            ContactNo VARCHAR(50)
            )";

        if ($mysqli->query($sql) === TRUE) {
            echo "Table UltGuest created successfully";
          } else {
            echo "Error creating table: " . $conn->error;
          }
        $mysqli -> close();
?>
</body>
</html>