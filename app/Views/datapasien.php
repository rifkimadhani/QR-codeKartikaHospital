<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>
<div style="padding-top: 30px; padding-bottom: 30px;">
    <h2 class="align-middle"><i class="bx bxs-detail align-middle"></i> Data Hasil SWAB/PCR</h2>
</div>

<div class="card w-80 shadow p-4 rounded-3" style="margin-right: 14px; max-height:420px; border:none; ">
    <div></div>
    <div>
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr class="text-left" style="font-size: 13px;">
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
                    <tr class="text-left" style="font-size: 13px;">
                        <td><?= $row['NoReg']; ?></td>
                        <td><?= $row['Nama']; ?></td>
                        <td><?= $row['JenisKelamin']; ?></td>
                        <td><?= $row['NoTelp']; ?></td>
                        <td><?= $row['TglHasil']; ?></td>
                        <td><?= $row['Hasil']; ?></td>
                        <td>
                            <a href=""><span><i class="bx bx-qr" style="color: #096b39;font-size : 18px;"></i></span></a>
                            <a href="<?= base_url('datapasien/edit/' . $row['NoReg']); ?>"><span><i class="bx bxs-pencil mx-1" style="color: #52525c;font-size : 18px;"></i></span></a>
                            <input type="hidden" name="_method" value="DELETE"><a href="<?= base_url('datapasien/' . $row['NoReg']); ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data?');"><span><i class="bx bxs-trash" style="color: #52525c;font-size : 18px;"></i></span></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>