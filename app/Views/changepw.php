<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>
<div style="padding-top: 30px; padding-bottom: 30px;">
    <h2 style="font-weight:600;"><span style="display:inline; vertical-align: middle;"><i class="bx bxs-lock"></i></span> Ganti Password</h2>
</div>
<div class="card w-80 shadow p-4 rounded-3" style="margin-right: 14px; border:none; ">
    <form action="<?= base_url('user/changepw') ?>" method="post">
        <div class="col-md-12 col-sm-12">
            <div class="form-group was-validated">
                <label for="exampleFormControlInput1">New Password</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="bx bxs-key bx-sm"></i></span>
                    </div>
                    <input type="text" name="password" class="form-control" placeholder="New Password" aria-label="New Password" aria-describedby="basic-addon1" autocomplete="off" required>
                </div>
            </div>
        </div>

        <div class="d-grid gap-2 mt-4">
            <button type="submit" class="btn btn-primary btn-md btn-block mb-3 mt-3" style="background: #096b39;">Submit</button>
        </div>
    </form>

</div>

<?= $this->endSection() ?>