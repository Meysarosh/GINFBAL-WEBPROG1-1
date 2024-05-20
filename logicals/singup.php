<?php
if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['last_name']) && isset($_POST['first_name'])) {
    try {
        // Kapcsolódás
        $dbh = new PDO(
            'mysql:host=localhost;dbname=webprogbeadando',
            'webprogbeadando',
            'Pro100Nethely',
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
        );
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

        $sqlSelect = "select id from users where email = :email";
        $sth = $dbh->prepare($sqlSelect);
        $sth->execute(array(':email' => $_POST['email']));
        if ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
            $uzenet = "User with this email already exist!";
            $ujra = "true";
        } else {
            // Ha nem létezik, akkor regisztráljuk
            $sqlInsert = "insert into users(id, last_name, first_name, email, username, password)
                          values(0, :last_name, :first_name, :email, :username, :password)";
            $stmt = $dbh->prepare($sqlInsert);
            $stmt->execute(array(
                ':last_name' => $_POST['last_name'], ':first_name' => $_POST['first_name'],
                ':email' => $_POST['email'], ':username' => $_POST['username'], ':password' => sha1($_POST['password'])
            ));
            if ($count = $stmt->rowCount()) {
                $newid = $dbh->lastInsertId();
                $uzenet = "Congratulation! You have been successfully registered.";
                $ujra = false;
            } else {
                $uzenet = "Your registration failed.";
                $ujra = true;
            }
        }
    } catch (PDOException $e) {
        $uzenet = "Hiba: " . $e->getMessage();
        $ujra = true;
    }
} else {
    header("Location: .");
}
