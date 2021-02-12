

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
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

            <!-- Custom styles for this template -->
            <link href="mycss.css" rel="stylesheet">
            <link href="notify.css" rel="stylesheet">

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
                            <h1 style="background: #dbbb1a;  margin-left: 30%; margin-right: 30%; margin-top: 5%; text-align: center; font-weight: bold; color: black;">Thom Bus Transport Service</h1>

                            <!-- DataTales Example -->
                            <div class="container">

                                <div class="card o-hidden border-0 shadow-lg my-5">
                                    <div class="card-body p-0">
                                        <!-- Nested Row within Card Body -->
                                        <div class="row">
                                            <div class="col-lg-5 d-none d-lg-block bg-register-image" style="background-image: url('tombus.png'); background-repeat: no-repeat; background-size: contain;"></div>
                                            <div class="col-lg-5">
                                                <div class="p-5" style="background: #6d82a3">
                                                    <div class="text-center">
                                                        <h1 style="color: #c7bb00">Pay With HelloCash</h1>
                                                    </div>
                                                    <?php


                                                    $errors = array();

                                                    if(isset($_POST['submit'])){

                                                            $name = $_POST['name'];
                                                            if(!$name){if(!$name){echo "full name not passed";}}
                                                            $email = $_POST['email'];
                                                            if(!$email){echo "Email Address not passed";}
                                                            $phone = $_POST['phone'];
                                                            if(!$phone){echo "Phone number not passed";}
                                                            $Tnum = $_POST['Tnum'];
                                                            if(!$Tnum){echo "Number of travler not passed";}
                                                            $bank = $_POST['bank'];
                                                            if(!$bank){echo "Bank choice not passed";}
                                                            $DDate = $_POST['DDate'];
                                                            if(!$DDate){echo "Date  not passed";}
                                                            $Dtime = $_POST['Dtime'];
                                                            if(!$Dtime){echo "Time not passed";}
                                                            $from = $_POST['from'];
                                                            if(!$from){echo "From not passed";}
                                                            $to = $_POST['to'];
                                                            if(!$to){echo "To not passed";}

                                                            $price = 250 * $Tnum;

                                                            ?>
                                                        
                                                            <div style="color: black; width: 100%">
                                                                
                                                            <div style="width: 100%">
                                                            <h5 style="color: red">Thanks for buying thom bus transportation ticket!</h1>
                                                            <p>Your ticket is created successfully. Please call to *912# and Make the payment. You will receive your ticket through
                                                                <?php echo $email; ?> as soon as you made the payment.</p>

                                                            </div>
                                                                <table style="width:100%">
                                                                    <tr>
                                                                        <th>Your Tichet Information</th>
                                                                        <th>thombus_invoice_00001</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Bank</td>
                                                                        <td>Lucy</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Number of ticket</td>
                                                                        <td>
                                                                            <?php echo $Tnum;?>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Departure Date</td>
                                                                        <td>
                                                                            <?php echo $DDate;?>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Departure Time</td>
                                                                        <td>
                                                                            <?php echo $Dtime;?>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Phone Number</td>
                                                                        <td>
                                                                            <?php echo $phone;?>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Total Price</td>
                                                                        <td>
                                                                            <?php echo $price; echo " ETB";?>
                                                                        </td>
                                                                    </tr>
                                                                </table>



                                                            </div>
                                                            <div style="color: black">
                                                            <?php

                                                                $curl = curl_init();

                                                                curl_setopt_array($curl, array(
                                                                CURLOPT_URL => 'https://api-et.hellocash.net/invoices',
                                                                CURLOPT_RETURNTRANSFER => true,
                                                                CURLOPT_ENCODING => '',
                                                                CURLOPT_MAXREDIRS => $price,
                                                                CURLOPT_TIMEOUT => 0,
                                                                CURLOPT_FOLLOWLOCATION => true,
                                                                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                                                CURLOPT_CUSTOMREQUEST => 'POST',
                                                                CURLOPT_POSTFIELDS =>'{
                                                                    "from": "{{$phone}}",
                                                                    "amount": {{$price}},
                                                                    "description": "Payment for thom bus transportation ticket",
                                                                    "currency": "ETB",
                                                                    "expires": "2021-03-03T14:47:23.000Z",
                                                                    "notifyto": true,
                                                                    "notifyfrom": true
                                                                }',
                                                                CURLOPT_HTTPHEADER => array(
                                                                    'Content-Type: application/json',
                                                                    'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJwcmluY2lwYWwiOiIxODU0NTM4Iiwic3lzdGVtIjoibHVjeSIsImdyb3VwIjoiYnVzaW5lc3MiLCJ1c2VybmFtZSI6IjE4NTQ1MzgiLCJjaGFpbiI6WyJwYXNzd29yZCJdLCJpYXQiOjE2MTI5OTU3MzcsImV4cCI6MTYxMzA4MjEzN30.a3i_0VU18t_X0802CDwfkW4eSY01Ajwh_9YwZWOegL4'
                                                                ),
                                                                ));

                                                                $response = curl_exec($curl);

                                                                curl_close($curl);
                                                                ?><div style="background: #948f47"><?php
                                                                
                                                                echo "\nSMS send to  ";?><?php echo $phone;?><?php echo " Successful!";
                                                                ?>
                                                                </div>
                                                                </div>




                                                            <div style="width: 110%; background: white;margin-top: 40px; padding: 25px">
                                                            <h5 style="color: red">Please check your phone for the SMS text.</h1>
                                                            <p>If the SMS text not received fill the form again by click <a href="index.php"><h5>here!</h5></a> make sure you write the correct phone number or register the number from HeloCash.</p>

                                                            </div>
                                                        <?php


                                                    }


                                                    ?>

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



           
            <script src="notify.js"></script>

        </body>

        </html>
