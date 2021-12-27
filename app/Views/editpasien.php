<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>
<div style="padding-top: 30px; padding-bottom: 30px;">
    <h2 class="align-middle"><i class="bx bxs-user-plus align-middle"></i> Edit Data</h2>
</div>
<div class="card w-80 shadow p-4 rounded-3" style="margin-right: 14px; border:none; ">
    <form action="<?= base_url('datapasien/update/' . $pasien->NoReg) ?>" method="post">

        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="form-group was-validated">
                    <label for="exampleFormControlInput1">No registrasi</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="bx bxs-user-detail bx-sm"></i></span>
                        </div>
                        <input type="text" name="regist" class="form-control" value="<?= $pasien->NoReg; ?>" required>
                    </div>
                </div>
                <div class="form-group was-validated">
                    <label for="exampleFormControlInput1">No KTP</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="bx bxs-id-card bx-sm"></i></span>
                        </div>
                        <input type="text" name="ktp" class="form-control" value="<?= $pasien->NIK; ?>" required>
                    </div>
                </div>
                <div class="form-group was-validated">
                    <label for="exampleFormControlInput1">Nama Lengkap</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="bx bxs-user bx-sm"></i></span>
                        </div>
                        <input type="text" name="nama" class="form-control" value="<?= $pasien->Nama; ?>" required>
                    </div>
                </div>
                <div class="form-group was-validated">
                    <label for="exampleFormControlInput1">Tanggal Lahir</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="bx bxs-calendar bx-sm"></i></span>
                        </div>
                        <input type="date" name="tgl_lahir" class="form-control" value="<?= $pasien->TglLahir; ?>" required>
                    </div>
                </div>
                <div class="form-group was-validated">
                    <label for="exampleFormControlInput1">Jenis Kelamin</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="bx bx-male-sign bx-sm"></i></span>
                        </div>
                        <select name="jk" class="form-select" value="<?= $pasien->JenisKelamin; ?>" aria-describedby="basic-addon1" required>
                            <option value="">Pilih..</option>
                            <option value="<?= $pasien->JenisKelamin; ?>">Laki-laki</option>
                            <option value="<?= $pasien->JenisKelamin; ?>">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="form-group was-validated">
                    <label for="exampleFormControlInput1">No Telepon</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="bx bxs-phone bx-sm"></i></span>
                        </div>
                        <input type="text" name="telp" class="form-control" value="<?= $pasien->NoTelp; ?>" required>
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
                        <input type="text" name="negara" class="form-control" value="<?= $pasien->Negara; ?>" required>
                    </div>
                </div>
                <div class="form-group was-validated">
                    <label for="exampleFormControlInput1">Tanggal Hasil Keluar</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="bx bxs-calendar-check bx-sm"></i></span>
                        </div>
                        <input type="date" name="tgl_hasil" class="form-control" value="<?= $pasien->TglHasil; ?>" required>
                    </div>
                </div>
                <div class="form-group was-validated">
                    <label for="exampleFormControlInput1">Hasil Test</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="bx bxs-badge-check bx-sm"></i></span>
                        </div>
                        <select name="hasil" class="form-select" aria-describedby="basic-addon1" value="<?= $pasien->Hasil; ?>" required>
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
                        <input type="text" name="gen" class="form-control" value="<?= $pasien->GenN; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Orf1ab</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="bx bxs-badge-check bx-sm"></i></span>
                        </div>
                        <input type="text" name="orf1ab" class="form-control" value="<?= $pasien->Orf1ab; ?>">
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