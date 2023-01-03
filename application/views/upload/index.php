<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coba test file uploads</title>
</head>

<body>
    <form action="<?= base_url('upload/upload_video') ?>" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="formFile" class="form-label">Default file input example</label>
            <input class="form-control" type="file" id="formFile" name="video">
        </div>
        <button type="submit" name="upload" value="Upload">Simpan</button>
    </form>
    <p>
        <?php
        if (isset($upload_error)) {
            echo $upload_error;
        }
        ?>
    </p>

    <p>Video Result</p>
    <div class="video">
        <?php foreach ($videos as $video) : ?>
            <video width="50%" controls>
                <source src="<?= $video->content_link ?>">
            </video>
        <?php endforeach  ?>
    </div>
</body>

</html>