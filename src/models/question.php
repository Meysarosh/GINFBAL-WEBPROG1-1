<?php

class Question
{
    public function getData(): array
    {
        $dsn = "mysql:host=localhost;dbname=question_db;charset=utf8;port=3306";

        $pdo = new PDO($dsn, "root", "", [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);

        $stmt = $pdo->query("SELECT * FROM question");

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
