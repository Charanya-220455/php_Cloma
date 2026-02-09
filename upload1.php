<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $fileName = $_FILES['myfile']['name'];
    $tempName = $_FILES['myfile']['tmp_name'];

    $uploadDir = "uploads/";

    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $newFileName = time() . "_" . $fileName;

    if (move_uploaded_file($tempName, $uploadDir . $newFileName)) {
        echo "File uploaded successfully<br><br>";
        echo "<a href='download.php?file=$newFileName'>Download File</a>";
    } else {
        echo "Upload failed";
    }
}
?>
