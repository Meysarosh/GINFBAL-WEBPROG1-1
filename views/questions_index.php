<!DOCTYPE html>
<html>

<head>
    <title>Products</title>
    <meta charset="UTF-8">
</head>

<body>

    <h1>Products</h1>

    <?php foreach ($questions as $question) : ?>

        <h2><?= htmlspecialchars($question["question_text"]) ?></h2>
        <p><?= htmlspecialchars($question["answer_text"]) ?></p>

    <?php endforeach; ?>

</body>

</html>