<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <link rel="stylesheet" href="../../assets/vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../assets/vendor/owl-carousel/css/owl.theme.default.min.css">
    <link href="../../assets/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="../../assets/css/style.css" rel="stylesheet">
    <link href="../../assets/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">

    <style>
       table img{
            border-radius:50%;
            width: 50px;
            height:50px;
        }

        th,tr,td{
            text-align: center;
            color:black;
        }
    </style>
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="../../assets/images/logo.png" alt="">
                <img class="logo-compact" src="../../assets/images/logo-text.png" alt="">
                <img class="brand-title" src="../../assets/images/logo-text.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-bell"></i>
                                    <div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="list-unstyled">
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-user"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-shopping-cart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="danger"><i class="ti-bookmark"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-heart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-image"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                    </ul>
                                    <a class="all-notification" href="#">See all notifications <i
                                            class="ti-arrow-right"></i></a>
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="../../assets/app-profile.html" class="dropdown-item">
                                        <i class="icon-user"></i>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="../../assets/email-inbox.html" class="dropdown-item">
                                        <i class="icon-envelope-open"></i>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <a href="../../assets/page-login.html" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        


        <!--**********************************
            Sidebar end
        ***********************************-->
             <?php
                include_once("../../vue/dashLien.php");
             ?>
        <!--**********************************
            Content body start
        ***********************************-->

        <!--**********************************
            Content body end
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <span class="ml-1">Datatable</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">LISTE DES COMMANDES</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display " style="min-width: 845px ">
                                        <thead>
                                            <tr>
                                                <th>image</th>
                                                <th>Nom du plat</th>
                                                <th>Nom du client</th>
                                                <th>Prenom du client</th>
                                                <th>Telephone</th>
                                                <th>Date</th>
                                                <th>Quantité</th>                                               
                                                <th>Total</th>
                                                <th>statut</th>
                                                <th class="datatable-nosort">Action</th>
                            
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($data as $DATA){
                                            $img_id=$DATA['id'];

                                            $oCommande=new Commande();
                                            $rep=$oCommande->img_title($img_id);
                                             
                                            foreach($rep as $img){
                                                $imageName=$img['image'];

                                                $plat=$img['nom'];
    
                                            }

                                            

                                            $imageLien="../../image/".$imageName;

                                        ?>
                                            <tr>
                                                <td>
                                                    <?php 
                                                      echo " <img src='$imageLien' > ";
                                                    ?>
                                                </td>
                                                <td><?php echo $plat;?></td>
                                                <td><?php echo $DATA['nom_client'] ?></td>
                                                <td><?php echo $DATA['prenom_client'] ?></td>
                                                <td><?php echo $DATA['Tel'] ?></td>
                                                <td><?php echo $DATA['date'] ?></td>
                                                <td><?php echo $DATA['Qachat'] ?></td>                                               
                                                <td><?php echo $DATA['Total'] ?></td>
                                                <td><?php echo $DATA['statut'] ?></td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                            <i class="dw dw-more"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                    
                                                            <a class="dropdown-item" href="premodifControl.php?id_c=<?php echo$DATA['id_c'];?>"><i class="dw dw-edit2"></i> Edit</a>
                                                            <a class="dropdown-item" href="deleteControl.php?id_c=<?php echo $DATA['id_c'];?>"><i class="dw dw-delete-3"></i> Delete</a>
                                                        </div>
                                                    </div>
									           </td>
                                          
                                            </tr>
                                        <?php 
                                        }
                                        ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>image</th>
                                                <th>Nom du plat</th>
                                                <th>Nom du client</th>
                                                <th>Prenom du client</th>
                                                <th>Telephone</th>
                                                <th>Date</th>
                                                <th>Quantité</th>                                               
                                                <th>Total</th>
                                                <th>statut</th>
                                                <th class="datatable-nosort">Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
            
        <!--**********************************
            Footer start
        ***********************************-->

        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->



    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="../../assets/vendor/global/global.min.js"></script>
    <script src="../../assets/js/quixnav-init.js"></script>
    <script src="../../assets/js/custom.min.js"></script>


    <!-- Vectormap -->
    <script src="../../assets/vendor/raphael/raphael.min.js"></script>
    <script src="../../assets/vendor/morris/morris.min.js"></script>


    <script src="../../assets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../../assets/vendor/chart.js/Chart.bundle.min.js"></script>

    <script src="../../assets/vendor/gaugeJS/dist/gauge.min.js"></script>

    <!--  flot-chart js -->
    <script src="../../assets/vendor/flot/jquery.flot.js"></script>
    <script src="../../assets/vendor/flot/jquery.flot.resize.js"></script>

    <!-- Owl Carousel -->
    <script src="../../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <!-- Counter Up -->
    <script src="../../assets/vendor/jqvmap/js/jquery.vmap.min.js"></script>
    <script src="../../assets/vendor/jqvmap/js/jquery.vmap.usa.js"></script>
    <script src="../../assets/vendor/jquery.counterup/jquery.counterup.min.js"></script>


    <script src="../../assets/js/dashboard/dashboard-1.js"></script>

    <!-- Datatable -->
    <script src="../../assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../../assets/js/plugins-init/datatables.init.js"></script>

</body>

</html>