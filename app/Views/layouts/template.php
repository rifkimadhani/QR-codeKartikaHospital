<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Kartika Hospital</title>

    <!-- <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'> -->
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.css') ?>">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?= base_url('style.css') ?>">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.3/r-2.2.9/datatables.min.css" />

</head>

<body oncontextmenu='return true' class='snippet-body'>


    <body id="body-pd" style="height: 100%;">
        <header class="header" id="header">
            <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
            <div class="header_img"> <i class="bx bxs-user bx-lg" style="color: #fff;"></i> </div>
        </header>
        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div>
                    <a href="<?= base_url() ?>">
                        <img src="<?= base_url('assets/rata-flip.png') ?>" alt="KARTIKA HOSPITAL" style="height: 50px; padding-left:3px; margin-bottom:40px;" />
                    </a>

                    <div class="nav_list">
                        <a href="<?= base_url('datapasien/tambah') ?>" class="nav_link">
                            <i class='bx bxs-user nav_icon'></i>
                            <span class="nav_name">Tambah Data</span>
                        </a>
                        <a href="<?= base_url('datapasien') ?>" class="nav_link">
                            <i class='bx bx-detail nav_icon'></i>
                            <span class="nav_name">Data Hasil SWAB</span>
                        </a>
                        <a href="<?= base_url('/user/password') ?>" class="nav_link">
                            <i class='bx bxs-key nav_icon'></i>
                            <span class="nav_name">Ganti Password</span>
                        </a>
                    </div>
                </div>
                <a href="<?= base_url('/user/logout') ?>" class="nav_link">
                    <i class='bx bx-log-out nav_icon'></i>
                    <span class="nav_name">SignOut</span>
                </a>
            </nav>
        </div>
        <!--Container Main start-->
        <div style="background: #f0f2f5;">
            <?= $this->renderSection('content') ?>
        </div>
        <!--Container Main end-->

        <!-- <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script> -->
        <script src="<?= base_url('bootstrap/js/bootstrap.js') ?>"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
        <script type="text/javascript" src="<?= base_url('datatables.min.js'); ?>"></script>
        <script type='text/Javascript'>document.addEventListener("DOMContentLoaded", function(event) {
                const showNavbar = (toggleId, navId, bodyId, headerId) =>{
                    const toggle = document.getElementById(toggleId),
                    nav = document.getElementById(navId),
                    bodypd = document.getElementById(bodyId),
                    headerpd = document.getElementById(headerId)
                    // Validate that all variables exist
                    if(toggle && nav && bodypd && headerpd){
                        toggle.addEventListener('click', ()=>{
                            // show navbar
                            nav.classList.toggle('showing')
                            // change icon
                            toggle.classList.toggle('bx-x')
                            // add padding to body
                            bodypd.classList.toggle('body-pd')
                            // add padding to header
                            headerpd.classList.toggle('body-pd')
                        })
                    }
                }

                showNavbar('header-toggle','nav-bar','body-pd','header')

                /*===== LINK ACTIVE =====*/
                const linkColor = document.querySelectorAll('.nav_link')

                function colorLink(){
                    if(linkColor){
                        linkColor.forEach(l=> l.classList.remove('active'))
                        this.classList.add('active')
                    }
                }

                linkColor.forEach(l=> l.addEventListener('click', colorLink))
            });
        </script>
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            });
            let reg;

            function qrcode(el) {
                reg = $(el).attr('data-id');
                console.log(reg)
                $.ajax({
                    type: "get",
                    url: "<?php echo base_url(); ?>/qrcode/" + reg,
                    success: function(result) {
                        $('.modalqr').html(result)

                    }
                });
            }

            function save() {
                let src = $('#img').attr('src');
                let savebtn = document.getElementById('link');
                let file = reg;

                savebtn.href = src;
                savebtn.setAttribute('download', file);
            }
        </script>
    </body>
    <!-- </body> -->

</html>