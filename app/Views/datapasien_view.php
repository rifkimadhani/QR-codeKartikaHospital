<?= $this->extend('layouts/template2') ?>

<?= $this->section('content') ?>
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
<?= $this->endSection() ?>