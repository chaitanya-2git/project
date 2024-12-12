<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $course = $_POST["course"];
    
    // Save the data to a file (enrollments.txt)
    $file = fopen("enrollments.txt", "a");
    fwrite($file, "Name: $name\nEmail: $email\nCourse: $course\n\n");
    fclose($file);

    // After saving, redirect to a thank-you page
    header("Location: thank-you.html");
    exit;
  }
?>
