<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Mempelajari Model Pada Codeigniter</h1>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Pekerjaan</th>
        </tr>
        <?php foreach($user as $u){ ?>
                <tr>
                    <td><?php echo $u->nama ?></td>
                    <td><?php echo $u->alamat ?></td>
                    <td><?php echo $u->pekerjaan ?></td>
                </tr>
        <?php } ?>
    </table>
</body>
</html>