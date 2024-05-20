<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=webprogbeadando', 'webprogbeadando', 'Pro100Nethely');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Hiba: " . $e->getMessage();
}

$stmt = $pdo->query("SELECT * FROM messages ORDER BY created_at DESC");
$messages = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<main class="main">
    <div class="container">
        <h1 class="mt-5">Messages</h1>
        <?php
        if (isset($_SESSION['login'])) { ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Time</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($messages as $msg) : ?>
                        <tr>
                            <td><?php echo htmlspecialchars($msg['created_at']); ?></td>
                            <td><?php echo htmlspecialchars($msg['name']); ?></td>
                            <td><?php echo htmlspecialchars($msg['email']); ?></td>
                            <td><?php echo nl2br(htmlspecialchars($msg['message'])); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php } else { ?>
            <p>Login to see the messages</p>
        <?php } ?>
    </div>
</main>