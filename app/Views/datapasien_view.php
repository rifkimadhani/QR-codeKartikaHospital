<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <table>
            <thead>
                <tr>
                    <th>NoReg</th>
                    <th>Nama</th>
                    <th>NIK</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($Datapasien as $row) : ?>
                    <tr>
                        <td><?= $row['NoReg']; ?></td>
                        <td><?= $row['Nama']; ?></td>
                        <td><?= $row['NIK']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>