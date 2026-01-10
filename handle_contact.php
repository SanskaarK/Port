<?php

// Include database connection file
require_once 'contact.php';

// Check if the form was submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve and trim form data
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $mobile = trim($_POST['mobile'] ?? '');
    $meeting_time = trim($_POST['meeting_time'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Validate form data
    if (empty($name) || !filter_var($email, FILTER_VALIDATE_EMAIL) || empty($message)) {
        header("Location: index.html?status=error#contact-form");
        exit();
    }

    // Prepare an insert statement
    $sql = "INSERT INTO contact_messages (name, email, mobile, meeting_time, message) VALUES (:name, :email, :mobile, :meeting_time, :message)";

    try {
        $stmt = $dbh->prepare($sql);
        
        // Bind variables to the prepared statement as parameters
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':mobile', $mobile, PDO::PARAM_STR);
        $stmt->bindParam(':meeting_time', $meeting_time, !empty($meeting_time) ? PDO::PARAM_STR : PDO::PARAM_NULL);
        $stmt->bindParam(':message', $message, PDO::PARAM_STR);

        // Attempt to execute the prepared statement
        if ($stmt->execute()) {
            header("Location: index.html?status=success#contact-form");
            exit();
        } else {
            header("Location: index.html?status=error#contact-form");
            exit();
        }
    } catch (PDOException $e) {
        // In a production environment, you should log the error.
        // error_log('Database Error: ' . $e->getMessage());
        header("Location: index.html?status=error#contact-form");
        exit();
    }

} else {
    // If not a POST request, redirect to the homepage
    header("Location: index.html");
    exit();
}
?>