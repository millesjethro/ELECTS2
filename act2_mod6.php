<!DOCTYPE html>
<html>
    <head>
        <title>
            Connect to MySql
        </title>
    </head>
<body>
    <?php
        $mysqli = new mysqli("localhost","root","","cono_users");

        if ($mysqli -> connect_errno) {
            echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
            exit();
        }

        $sql = "CREATE DATABASE ultimate";
        if ($mysqli->query($sql) === TRUE) {
            echo "Database created successfully";
        } else {
            echo "Error creating database: " . $conn->error;
        }

        $mysqli -> close();
?>
</body>
</html>