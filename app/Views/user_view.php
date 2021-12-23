<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product List</title>
</head>

<body>
    <div>
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>email</th>
                    <th>password</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($user as $row) : ?>
                    <tr>
                        <td><?= $row['id']; ?></td>
                        <td><?= $row['email']; ?></td>
                        <td><?= $row['password']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>