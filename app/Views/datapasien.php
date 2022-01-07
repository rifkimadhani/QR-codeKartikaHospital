<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>
<div style="padding-top: 30px; padding-bottom: 30px;">
    <h2 style="font-weight:600;"><span style="display:inline; vertical-align: middle;"><i class="bx bxs-detail"></span></i> Data Hasil SWAB/PCR</h2>
</div>


<?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success alert-dismissible fade show p-1 mr-3 mt-1 mb-1" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
        <button type="button" class="btn btn-close btn-sm p-1 m-1" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>


<div class="card shadow p-4 rounded-3" style="margin-right: 0.98rem; border:none; ">
    <div class="table-responsive-sm">
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
                            <a href="#" class="qrcode" data-bs-toggle="modal" data-bs-target="#exampleModal" id="qrcode" data-id="<?= $row['NoReg'] ?>" onclick=qrcode(this)><span><i class="bx bx-qr" style="color: #096b39;font-size : 18px;"></i></span></a>

                            <a href="<?= base_url('edit/' . $row['NoReg']) ?>"><span><i class="bx bxs-pencil mx-1" style="color: #52525c;font-size : 18px;"></i></span></a>

                            <input type="hidden" name="_method" value="DELETE"><a href="<?= base_url('datapasien/' . $row['NoReg']); ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data?');"><span><i class="bx bxs-trash" style="color: #52525c;font-size : 18px;"></i></span></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">QR CODE HASIL SWAB</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body modalqr text-center">

            </div>
            <div class="modal-footer">
                <a href="" type="" id="link" onclick=save() class="btn btn-success">Save</a>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->
<?= $this->endSection() ?>