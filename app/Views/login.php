<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Kartika Hospital</title>

    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?= base_url('style2.css') ?>">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

</head>
<style>
    ::placeholder {
        color: #FFFFFF;
    }
</style>
<!-- <body oncontextmenu='return true' class='snippet-body'> -->

<body>

    <section>

        <div class="container py-5">
            <form action="<?= base_url('user/login'); ?>" method="post">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card shadow-2-strong" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center border-no">

                                <h2 class="mb-5" style="color:#224957; ">Sign In</h2>
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                    </symbol>
                                </svg>
                                <?php if (session()->getFlashdata('error')) : ?>
                                    <div class="alert alert-warning d-flex align-items-center" role="alert">
                                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:">
                                            <use xlink:href="#exclamation-triangle-fill" />
                                        </svg>
                                        <div>
                                            <?= session()->getFlashdata('error'); ?>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <div class="form-group form-outline mb-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1" style="background-color : #224957;color:white;"><i class="bx bxs-user bx-sm"></i></span>
                                        </div>
                                        <input type="email" id="" name="email" placeholder="Email" class="form-control form-control" style="background-color : #224957;color:white; " required />
                                    </div>
                                </div>

                                <div class="form-group form-outline mb-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1" style="background-color : #224957;color:white;"><i class="bx bxs-key bx-sm"></i></span>
                                        </div>
                                        <input type="password" id="" name="password" placeholder="Password" class="form-control form-control" style="background-color : #224957;color:white;" required />
                                    </div>
                                </div>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary btn-md btn-block" style="background-color:#4C9A46" type="submit">Login</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </section>

    <footer style="position: absolute; bottom:0;">
        <img src="<?= base_url('assets/login.png') ?>" class="img-fluid" alt="" />
    </footer>

    <!-- <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script> -->
    <script src="<?= base_url('bootstrap/js/bootstrap.js') ?>"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
</body>