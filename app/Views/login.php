<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Kartika Hospital</title>

    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>

</head>
<style>
    ::placeholder{
        color : #FFFFFF;
    }
</style>

<!-- <body oncontextmenu='return true' class='snippet-body'> -->

<body>

    <section class="vh-100" style="">
        <div class="container py-5 h-100">
            <form action="<?= base_url('user/login');?>" method="post">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card shadow-2-strong" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">

                                <h3 class="mb-5" style = "color:#224957;">Sign in</h3>

                                <div class="form-group form-outline mb-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1" style = "background-color : #224957;color:white;"><i class="bx bxs-user bx-sm"></i></span>
                                        </div>
                                        <input type="email" id="" name = "email" placeholder = "Email" class="form-control form-control" style = "background-color : #224957;color:white; "/>
                                    </div>
                                </div>

                                <div class="form-group form-outline mb-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1" style = "background-color : #224957;color:white;"><i class="bx bxs-key bx-sm"></i></span>
                                        </div>
                                        <input type="password" id="" name = "password"  placeholder = "Password" class="form-control form-control"  style = "background-color : #224957;color:white;"/>
                                    </div>
                                </div>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary btn-md btn-block" style = "background-color:#4C9A46" type="submit">Login</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script> -->
    <script src="<?= base_url('bootstrap/js/bootstrap.js') ?>"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
</body>