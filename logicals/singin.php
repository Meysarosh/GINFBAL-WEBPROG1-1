<?php

if (isset($_POST['username']) && isset($_POST['password'])) {
    try {
        $dbh = new PDO(
            'mysql:host=localhost;dbname=webprogbeadando',
            'webprogbeadando',
            'Pro100Nethely',
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
        );
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

        $sqlSelect = "select id, last_name, first_name from users where username = :username and password = sha1(:password)";
        $sth = $dbh->prepare($sqlSelect);
        $sth->execute(array(':username' => $_POST['username'], ':password' => $_POST['password']));
        $row = $sth->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            $_SESSION['lname'] = $row['last_name'];
            $_SESSION['fname'] = $row['first_name'];
            $_SESSION['login'] = $_POST['username'];
        }
    } catch (PDOException $e) {
        $errormessage = "Hiba: " . $e->getMessage();
    }
} else {
    header("Location: .");
}
