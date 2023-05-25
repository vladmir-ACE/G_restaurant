<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>UniversFood</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <link rel="stylesheet" href="../../assets/vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../assets/vendor/owl-carousel/css/owl.theme.default.min.css">
    <link href="../../assets/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="../../assets/css/style.css" rel="stylesheet">

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
       
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        


        <!--**********************************
            Sidebar end
        ***********************************-->
             
        <!--**********************************
            Content body start
        ***********************************-->
        
        <div >
            <h1 class="text-center" style="padding-top: 5%;">
                saisisez les informations suivants pour éfectuer la commande 
            </h1>
        </div>
        <div class="d-flex" style="margin-left: 70%;">
            <a href="indexController.php" class="btn btn-warning">Annuler la commande</a>
        </div>

                <div class="boy-content d-flex justify-content-center" style="margin-top:5%;margin-left:10%;">
                   
                 <div class="card" style="width:60%;" >
                            <div class="card-header">
                                <h4 class="card-title">Effectuer la commande</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method='post' action="../../controlleur/client/ajoutControl.php">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label" for='titre'>Nom</label>
                                            <div class="col-sm-10">
                                                <input type="text" id='titre'name="nom_client" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label" for='titre'>Prenom </label>
                                            <div class="col-sm-10">
                                                <input type="text" id='titre'name="Prenom_client" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label" for='titre'>TEL</label>
                                            <div class="col-sm-10">
                                                <input type="text" id='titre'name="TEL" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label" for='Qachat'>Quantité commandé</label>
                                            <div class="col-sm-10">
                                                <input type="number" id='Qachat'name="Qachat" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label" for='prix'>date</label required>
                                            <div class="col-sm-10">
                                                <input type="date" id='prix'name="date" class="form-control" >
                                            </div>
                                        </div>

                        
                                        <fieldset class="form-group">
                                            <div class="row">
                                                <label class="col-form-label col-sm-2 pt-0">Statut</label>
                                                <div class="col-sm-10">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="statut" value="Payer" checked>
                                                        <label class="form-check-label">
                                                            Payer
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="statut" value="PasPayer">
                                                        <label class="form-check-label">
                                                            Pas encore Payer
                                                        </label>
                                                    </div>
                                            </div>
                                        </fieldset>
                                        <input type="hidden" name='id' value="<?php echo $id;?>">
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Commander</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                 </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
                <p>Distributed by <a href="https://themewagon.com/" target="_blank">Themewagon</a></p> 
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
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

</body>

</html>