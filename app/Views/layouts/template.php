<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartika Hospital</title>

    <!-- Bootstrap CSS CDN -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">


    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    <div class="col-2" style="padding-left: 0px;">
        <nav>
            <div class="sidebar-header container-fluid" style="background: #096b39;">
                <img class="pt-1 pl-1 pb-1" src="assets/logo-kartika.png" alt="KARTIKA HOSPITAL" style="height: 70px;">
            </div>

            <h5>Dashboard</h5>
            <ul class="fa-ul list-unstyled components">
                <li>
                    <a href="#">
                        <span class="fa-li"><i class="fas fa-user-plus" aria-hidden="true"></i></span>Tambah Data
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="fa-li"><i class="fas fa-clipboard-list" data-fa-transform="left-2" aria-hidden="true"></i></span>Data Hasil SWAB/PCR
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="col-10">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-light d-inline-block d-lg-none" data-toggle="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-justify"></i>
                </button>

                <div class="navbar ml-auto">
                    <ul class="nav navbar-nav">
                        <li class="nav-item align-item-center">
                            <a class="nav-link active" href="#">Logout</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link active"><i class="fas fa-user-circle fa-2x"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>


    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="bootstrap/js/bootstrap.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>