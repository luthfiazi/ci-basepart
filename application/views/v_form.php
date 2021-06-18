<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Membuat Form Validation</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('form/aksi'); ?>
        <label for="">Nama</label><br>
        <input type="text" name="nama"><br>
        <label for="">Email</label><br>
        <input type="text" name="email"><br>
        <label for="">Konfirmasi email</label><br>
        <input type="text" name="konfirmasi_email"><br>
        <input type="submit" value="Simpan">
</form>
</body>
</html>