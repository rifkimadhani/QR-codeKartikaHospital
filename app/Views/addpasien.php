<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>
<div style="padding-top: 30px; padding-bottom: 30px;">
    <h2 style="font-weight:600;"><span style="display:inline; vertical-align: middle;"><i class="bx bxs-user-plus"></i></span> Tambah Data</h2>
</div>
<div class="card w-80 shadow p-4 rounded-3" style="margin-right: 14px; border:none; ">
    <form action="<?= base_url('datapasien/simpan') ?>" method="post">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="form-group was-validated">
                    <label for="exampleFormControlInput1">No registrasi</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="bx bxs-user-detail bx-sm"></i></span>
                        </div>
                        <input type="text" name="regist" class="form-control" placeholder="No Registrasi" aria-label="No Registrasi" aria-describedby="basic-addon1" autocomplete="off" required>
                    </div>
                </div>
                <div class="form-group was-validated">
                    <label for="exampleFormControlInput1">No KTP</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="bx bxs-id-card bx-sm"></i></span>
                        </div>
                        <input type="text" name="ktp" class="form-control" placeholder="NO KTP" aria-label="No KTP" aria-describedby="basic-addon1" autocomplete="off" required>
                    </div>
                </div>
                <div class="form-group was-validated">
                    <label for="exampleFormControlInput1">Nama Lengkap</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="bx bxs-user bx-sm"></i></span>
                        </div>
                        <input type="text" name="nama" class="form-control" placeholder="Nama" aria-label="Nama" aria-describedby="basic-addon1" autocomplete="off" required>
                    </div>
                </div>
                <div class="form-group was-validated">
                    <label for="exampleFormControlInput1">Tanggal Lahir</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="bx bxs-calendar bx-sm"></i></span>
                        </div>
                        <input type="date" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" aria-label="Tanggal Lahir" aria-describedby="basic-addon1" autocomplete="off" required>
                    </div>
                </div>
                <div class="form-group was-validated">
                    <label for="exampleFormControlInput1">Jenis Kelamin</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="bx bx-male-sign bx-sm"></i></span>
                        </div>
                        <select name="jk" class="form-select" aria-describedby="basic-addon1" required>
                            <option value="">Pilih..</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="form-group was-validated">
                    <label for="exampleFormControlInput1">No Telepon</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="bx bxs-phone bx-sm"></i></span>
                        </div>
                        <input type="text" name="telp" class="form-control" placeholder="No Telepon" aria-label="No Telepon" aria-describedby="basic-addon1" autocomplete="off" required>
                    </div>
                </div>
            </div>
            <!-- Right -->
            <div class="col-md-6 col-sm-12">
                <div class="form-group was-validated">
                    <label for="exampleFormControlInput1">Negara</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="bx bx-globe bx-sm"></i></span>
                        </div>
                        <input type="text" name="negara" class="form-control" placeholder="Negara" aria-label="Negara" aria-describedby="basic-addon1" autocomplete="off" required>
                    </div>
                </div>
                <div class="form-group was-validated">
                    <label for="exampleFormControlInput1">Tanggal Hasil Keluar</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="bx bxs-calendar-check bx-sm"></i></span>
                        </div>
                        <input type="date" name="tgl_hasil" class="form-control" placeholder="Tanggal Hasil Keluar" aria-label="Tanggal Hasil Keluar" aria-describedby="basic-addon1" autocomplete="off" required>
                    </div>
                </div>
                <div class="form-group was-validated">
                    <label for="exampleFormControlInput1">Hasil Test</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="bx bxs-badge-check bx-sm"></i></span>
                        </div>
                        <select name="hasil" class="form-select" aria-describedby="basic-addon1" required>
                            <option value="">Pilih..</option>
                            <option value="Positif">Positif</option>
                            <option value="Negatif">Negatif</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Gen N</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="bx bxs-badge-check bx-sm"></i></span>
                        </div>
                        <input type="text" name="gen" class="form-control" placeholder="Gen N" aria-label="Gen N" aria-describedby="basic-addon1" autocomplete="off">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Orf1ab</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="bx bxs-badge-check bx-sm"></i></span>
                        </div>
                        <input type="text" name="orf1ab" class="form-control" placeholder="Orf1ab" aria-label="Orf1ab" aria-describedby="basic-addon1" autocomplete="off">
                    </div>
                </div>
                <div class="d-grid gap-2 mt-4">
                    <button type="submit" class="btn btn-primary btn-md btn-block mb-3 mt-3" style="background: #096b39;">Submit</button>
                </div>
            </div>
            <!-- End Right -->
        </div>
    </form>

</div>

<?= $this->endSection() ?>