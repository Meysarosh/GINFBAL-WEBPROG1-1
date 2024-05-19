<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=frontend_quizzes', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Hiba: " . $e->getMessage();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name =  (isset($_SESSION['login'])) ? htmlspecialchars($_SESSION['fname']) : 'Guest';
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    $isValid = true;

    if (empty($email) || empty($message)) {
        $isValid = false;
        $errormessage = "All fields are required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $isValid = false;
        $errormessage = "Invalid email format.";
    }

    if ($isValid) {

        $stmt = $pdo->prepare("INSERT INTO messages (name, email, message) VALUES (?, ?, ?)");
        if ($stmt->execute([$name, $email, $message])) {
            $success = "Message sent successfully!";
        } else {
            $errormessage = "Failed to send message.";
        }
    }
}
