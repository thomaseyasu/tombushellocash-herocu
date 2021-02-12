<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Thom Bus Transport Service</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="mycss.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top" style="background: #919087">

    <!-- Page Wrapper -->
    <div id="wrapper">

    

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column" style="background: #919087">

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1  style="background: #dbbb1a;  margin-left: 30%; margin-right: 30%; margin-top: 5%; text-align: center; font-weight: bold; color: black;">Thom Bus Transport Service</h1>

                    <!-- DataTales Example -->
                    <div class="container">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-7 d-none d-lg-block bg-register-image" style="background-image: url('tombus.png'); background-repeat: no-repeat; background-size: contain;"></div>
                                <div class="col-lg-5">
                                    <div class="p-5" style="background: #6d82a3">
                                        <div class="text-center">
                                            <h1 style="color: #c7bb00">Pay With HelloCash</h1>
                                        </div>
                                        <form class="user" method="POST" action="goods_server.php" enctype="multipart/form-data">
                                        <div class="form-group row">
                                                    <input type="text" name="name" class="form-control form-control-user" id="exampleFirstName"
                                                        placeholder="Full Name">
                                                </div>
                                            <div class="form-group row">
                                                
                                                <div class="col-sm-6">
                                                    <input type="email" name="email" class="form-control form-control-user" id="exampleLastName"
                                                        placeholder="Your Email Adrress">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="tel" name="phone" class="form-control form-control-user" id="exampleLastName"
                                                        placeholder="Phone Number">
                                                </div>
                                                </div>
                                                <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <input type="number" name="Tnum" class="form-control form-control-user" id="exampleLastName"
                                                        placeholder="Number of Traveler">
                                                </div>
                                                
                                                <div class="col-sm-6" class="form-control form-control-user" id="exampleLastName">
                                                <select id="bank" name="bank">
                                                        <option disabled selected>Bank</option>
                                                        <option value="Lucy">Lucy</option>
                                                    </select>
                                                </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Departure Date</label>
                                                    <input type="date" name="DDate" class="form-control form-control-user" id="exampleInputEmail"
                                                        >
                                                </div>
                                                <div class="form-group" class="form-control form-control-user" id="exampleLastName">
                                                    
                                                    <select id="Dtime" name="Dtime" >
                                                        <option disabled selected>Departure Time</option>
                                                        <option value="12:00 PM - 1:00 AM">12:00 PM - 1:00 AM</option>
                                                        <option value="2:30 AM - 3:30 AM">2:30 AM - 3:30 AM</option>
                                                        <option value="4:30 AM - 5:30 AM">4:30 AM - 5:30 AM</option>
                                                        <option value="8:00 PM - 9:00 AM">8:00 PM - 9:00 AM</option>
                                                        <option value="10:30 AM - 11:30 AM">10:30 AM - 11:30 AM</option>
                                                    </select> 
                                                </div>
                                                <div class="form-group row">
                                                    <input type="text" name="from" class="form-control form-control-user" id="exampleFirstName"
                                                        placeholder="Travel From">
                                                </div>
                                                <div class="form-group row">
                                                    <input type="text" name="to" class="form-control form-control-user" id="exampleLastName"
                                                        placeholder="Travel to To">
                                                </div>
                                                
                                                <div class="form-group row">
                                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                            <button type="submit" name="uploadgoods" class="btn btn-primary btn-user btn-block">
                                                                Submit
                                                            </button>
                                                    
                                                </div>
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <a href="index.php" class="btn btn-primary btn-user btn-block">
                                                        Reset
                                                    </a>
                                                </div>
                                            </div>
                                        </form>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; HelloCash Thom Bus 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>