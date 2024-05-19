<!DOCTYPE html>
<html>

<head>
    <title>Registration</title>
    <meta charset="utf-8">
</head>

<body>
    <?php if (isset($uzenet)) { ?>
        <h1><?= $uzenet ?></h1>
        <?php if ($ujra) { ?>
            <a href="index.php?oldal=belepes">Try again!</a>
        <?php } ?>
    <?php } ?>
</body>

</html>