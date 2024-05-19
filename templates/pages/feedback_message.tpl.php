<div class="container">
    <h1 class="mt-5">Message Submission</h1>
    <?php if (isset($errormessage)) : ?>
        <div class="alert alert-danger"><?php echo $errormessage; ?></div>
    <?php elseif (isset($success)) : ?>
        <div class="alert alert-success"><?php echo $success; ?></div>
        <h2>Your Message</h2>
        <p><strong>Name:</strong> <?php echo $name; ?></p>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <p><strong>Message:</strong> <?php echo nl2br($message); ?></p>
    <?php endif; ?>
</div>