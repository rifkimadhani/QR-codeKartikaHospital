<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Kartika Hospital</title>

    <!-- <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'> -->
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.css') ?>">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
    <!-- <link rel="stylesheet" href=""> -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.3/r-2.2.9/datatables.min.css" />

</head>

<!-- <body oncontextmenu='return true' class='snippet-body'> -->

<body class="ml-30" style="height: 100%;">
    <!-- <header class="header" id="header">
        <div class="header_toggle">
            <img src="#" alt="KARTIKA HOSPITAL" style="height: 50px;">
        </div>
    </header> -->

    <!--Container Main start-->
    <div>
        <!-- <div style="padding-top: 30px; padding-bottom: 30px;"></div> -->
        <div class="card-header w-80 shadow rounded-3" style="background:#096b39; border:none; margin-top: 30px; margin-left: 30px; margin-right: 30px;">
            <p class="text-center mb-0" style="color:#ffffff;">Hasil Pemerikasan SWAB PCR</p>
        </div>
        <div class="card w-80 shadow p-4 rounded-3" style="margin-bottom: 30px; margin-left: 30px; margin-right: 30px; border:none; ">

            <form action="" method="post">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">No registrasi</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="bx bxs-user-detail bx-sm"></i></span>
                                </div>
                                <input type="text" name="regist" class="form-control" value="<?= $row['NoReg']; ?>" required disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">No KTP</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="bx bxs-id-card bx-sm"></i></span>
                                </div>
                                <input type="text" name="ktp" class="form-control" value="<?= $row['NIK']; ?>" required disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama Lengkap</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="bx bxs-user bx-sm"></i></span>
                                </div>
                                <input type="text" name="nama" class="form-control" value="<?= $row['Nama']; ?>" required disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Tanggal Lahir</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="bx bxs-calendar bx-sm"></i></span>
                                </div>
                                <input type="date" name="tgl_lahir" class="form-control" value="<?= $row['TglLahir']; ?>" required disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Jenis Kelamin</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="bx bx-male-sign bx-sm"></i></span>
                                </div>
                                <input name="jk" class="form-control" value="<?= $row['JenisKelamin']; ?>" aria-describedby="basic-addon1" required disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">No Telepon</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="bx bxs-phone bx-sm"></i></span>
                                </div>
                                <input type="text" name="telp" class="form-control" value="<?= $row['NoTelp']; ?>" required disabled>
                            </div>
                        </div>
                    </div>
                    <!-- Right -->
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Negara</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="bx bx-globe bx-sm"></i></span>
                                </div>
                                <input type="text" name="negara" class="form-control" value="<?= $row['Negara']; ?>" required disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Tanggal Hasil Keluar</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="bx bxs-calendar-check bx-sm"></i></span>
                                </div>
                                <input type="date" name="tgl_hasil" class="form-control" value="<?= $row['TglHasil']; ?>" required disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Hasil Test</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="bx bxs-badge-check bx-sm"></i></span>
                                </div>
                                <input name="hasil" class="form-control" aria-describedby="basic-addon1" value="<?= $row['Hasil']; ?>" required disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Gen N</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="bx bxs-badge-check bx-sm"></i></span>
                                </div>
                                <input type="text" name="gen" class="form-control" value="<?= $row['GenN']; ?>" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Orf1ab</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="bx bxs-badge-check bx-sm"></i></span>
                                </div>
                                <input type="text" name="orf1ab" class="form-control" value="<?= $row['Orf1ab']; ?>" disabled>
                            </div>
                        </div>
                    </div>
                    <!-- End Right -->
                </div>

            </form>

        </div>
    </div>
    <!--Container Main end-->

    <!-- <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script> -->
    <script src="<?= base_url('bootstrap/js/bootstrap.js') ?>"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript">
        var tgl_test = "<?php echo $row['TglHasil'] ?>";
        var hasil = "<?php echo $row['Hasil']; ?>";
        var tgl_lahir = "<?php echo $row['TglLahir']; ?>"
        var nama = "<?php echo $row['Nama']; ?>"
        alert('Hasil pemeriksaan SWAB PCR pada tanggal ' + tgl_test + ' Dengan hasil ' + hasil + ' Atas nama ' + nama + ' Dengan Tanggal lahir ' + tgl_lahir + ' ini Valid dan Sah.')
    </script>
</body>
<!-- </body> -->

</html>