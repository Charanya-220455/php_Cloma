<?php
$conn = new mysqli("localhost", "root", "", "charanyadb");
if ($conn->connect_error) {
    die("DB error");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name  = $_POST["Name"];
    $email = $_POST["email"];
    $pass  = $_POST["password"];
    $cpass = $_POST["confirm_password"];

    if ($name && $email && $pass && $cpass) {

        if ($pass != $cpass) {
            die("Passwords do not match");
        }

        // check email
        $check = $conn->prepare("SELECT email FROM userdetails WHERE email=?");
        $check->bind_param("s", $email);
        $check->execute();
        $check->store_result();

        if ($check->num_rows > 0) {
            die("Email already registered");
        }
        $check->close();

        // INSERT PLAIN PASSWORD
        $insert = $conn->prepare(
            "INSERT INTO userdetails (Name, email, password) VALUES (?, ?, ?)"
        );
        $insert->bind_param("sss", $name, $email, $pass);

        if ($insert->execute()) {
            echo "Registration successful";
        } else {
            echo "Registration failed";
        }

        $insert->close();
    } else {
        echo "All fields required";
    }
}

$conn->close();
?>