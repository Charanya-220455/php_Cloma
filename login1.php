<?php
$conn = new mysqli("localhost", "root", "", "charanyadb");
if ($conn->connect_error) {
    die("DB error");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $pass  = $_POST["password"];

    $query = $conn->prepare(
        "SELECT Name, password FROM userdetails WHERE email=?"
    );
    $query->bind_param("s", $email);
    $query->execute();
    $query->store_result();

    if ($query->num_rows == 1) {
        $query->bind_result($name, $db_pass);
        $query->fetch();

        if ($pass === $db_pass) {
            echo "Login successful. Welcome $name";
        } else {
            echo "Wrong password";
        }
    } else {
        echo "User not found";
    }

    $query->close();
}

$conn->close();
?>