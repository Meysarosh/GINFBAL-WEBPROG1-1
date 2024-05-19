<main class="main">
    <div class="container">
        <h1 class="mt-5">Upload and Display Images</h1>
        <?php
        $uploadDir = 'media/uploaded/';
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['image'])) {
            $fileTmpPath = $_FILES['image']['tmp_name'];
            $fileName = basename($_FILES['image']['name']);
            $fileSize = $_FILES['image']['size'];
            $fileType = $_FILES['image']['type'];
            $filePath = $uploadDir . $fileName;

            if (in_array($fileType, $allowedTypes) && $fileSize > 0) {
                if (move_uploaded_file($fileTmpPath, $filePath)) {
                    echo '<div class="alert alert-success">File uploaded successfully!</div>';
                } else {
                    echo '<div class="alert alert-danger">There was an error uploading the file.</div>';
                }
            } else {
                echo '<div class="alert alert-danger">Invalid file type or file is empty.</div>';
            }
        }
        ?>

        <?php if (isset($_SESSION['login'])) { ?>
            <form action="" method="post" enctype="multipart/form-data" class="mb-5">
                <div class="form-group">
                    <label for="image">Choose an image to upload:</label>
                    <input type="file" name="image" id="image" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Upload Image</button>
            </form>
        <?php } else { ?>
            <p>Login to upload an image</p>
        <?php } ?>



        <h2 class="mb-4">Gallery</h2>
        <div class="row gallery">
            <?php
            if (is_dir($uploadDir)) {
                $files = scandir($uploadDir);
                foreach ($files as $file) {
                    if ($file !== '.' && $file !== '..' && in_array(mime_content_type($uploadDir . $file), $allowedTypes)) {
                        echo '<div class="col-md-4 mb-3">';
                        echo '<img src="' . $uploadDir . $file . '" class="img-fluid">';
                        echo '</div>';
                    }
                }
            } else {
                echo '<div class="col-12"><p>No images found in the gallery.</p></div>';
            }
            ?>
        </div>
    </div>
</main>