<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?=$title; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="<?= base_url(); ?>/css/sb-admin-2.min.css" rel="stylesheet">

<!-- data table -->
        
        <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css"> -->
        <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/css/jquery.dataTables.min.css">
        <!-- bootstrap 4 css  -->
        <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>        
        <link rel="stylesheet" href="<?= base_url();?>/dataTables/buttons-1.7.0/css/buttons.dataTables.min.css">
        <link rel="stylesheet" href="<?= base_url();?>/dataTables/rowgroup-1.1.2/css/rowGroup.dataTables.min.css">
<!-- ahkir data table  -->

        

    <!-- Custom styles for this template-->

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?= $this->include('templates/sidebar');?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

             <?= $this->include('templates/topbar'); ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <?= $this->renderSection('page-content');?>
                    
                    

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

         
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">yakin untuk keluar ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">pilih tombol  "Logout" anda akan keluar dari aplikasi ini.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('logout'); ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>
<div>
    <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Nusambatu 2021</span>
                    </div>
                </div>
 </footer>
</div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(); ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(); ?>/js/sb-admin-2.min.js"></script>

    <!-- datatable -->
    
    <script type="text/javascript" charset="utf8" src="<?= base_url(); ?>/js/jquery.dataTables.min.js"></script>
    <!-- script tambahan  -->
    <script src="<?= base_url(); ?>/dataTables/buttons-1.7.0/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url(); ?>/dataTables/jszip-2.5.0/jszip.min.js"></script>
    <script src="<?= base_url(); ?>/dataTables/pdfmake-0.1.36/pdfmake.min.js"></script>
    <script src="<?= base_url(); ?>/dataTables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="<?= base_url(); ?>/dataTables/buttons-1.7.0/js/buttons.html5.min.js"></script>
    <script src="<?= base_url(); ?>/dataTables/buttons-1.7.0/js/buttons.print.min.js"></script>
    <script src="<?= base_url(); ?>/dataTables/rowgroup-1.1.2/js/dataTables.rowGroup.min.js"></script>

</body>
</html>


