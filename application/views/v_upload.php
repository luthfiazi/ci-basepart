<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Membuat Upload File</h1>
    <?php echo $error;?>
    <?php echo form_open_multipart('upload/aksi_upload');?>
    <input type="file" name="berkas" />
    <br>
    <br>
    <input type="submit" value="upload" />
</form>
</body>
</html>