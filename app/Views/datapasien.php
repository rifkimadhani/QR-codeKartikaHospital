<?= $this->extend('layouts/template2') ?>

<?= $this->section('content') ?>
<div style="padding-top: 30px; padding-bottom: 30px; vertical-align:top;">
    <h2 style="vertical-align: top;"><i class="bx bxs-detail"></i> Data Hasil SWAB/PCR</h2>
</div>

<div class="card w-80 shadow p-4 rounded-3" style="margin-right: 14px; max-height:420px; border:none; ">
    <div></div>
    <div>
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr style="font-size: 13px;">
                    <th>NoReg</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>No Telepon</th>
                    <th>Tanggal Hasil</th>
                    <th>Hasil</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($Datapasien as $row) : ?>
                    <tr style="font-size: 13px;">
                        <td><?= $row['NoReg']; ?></td>
                        <td><?= $row['Nama']; ?></td>
                        <td><?= $row['JenisKelamin']; ?></td>
                        <td><?= $row['NoTelp']; ?></td>
                        <td><?= $row['TglHasil']; ?></td>
                        <td><?= $row['Hasil']; ?></td>
                        <td>
                            <a href=""><span class="my-2"><i class="bx bx-qr" style="color: #096b39;"></i></span></a>
                            <a href=""><span class="my-lg-2"><i class="bx bxs-pencil" style="color: #52525c;"></i></span></a>
                            <a href=""><span><i class="bx bxs-trash" style="color: #52525c;"></i></span></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>