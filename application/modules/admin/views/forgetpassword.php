<!DOCTYPE html>

<html dir="ltr">



<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Tell the browser to be responsive to screen width -->

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">

    <meta name="author" content="">

    <!-- Favicon icon -->

    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">

    <title>Persons Planet | Forget Password</title>

    <!-- Custom CSS -->

    <link href="<?php echo base_url(); ?>assets/admin/dist/css/style.min.css" rel="stylesheet">

</head>



<body>

    <div class="main-wrapper">

        <!-- ============================================================== -->

        <!-- Preloader - style you can find in spinners.css -->

        <!-- ============================================================== -->

 
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-light">

            <div class="auth-box bg-light border-top border-secondary shadow">

                <div id="forgetform">
                    <div class="text-center p-t-20 p-b-20">
                        <span class="db"><img style=" max-width: 250px;" src="<?php echo base_url(); ?>assets/admin/assets/images/logo/logo.png" alt="logo" /></span>
                    </div>
              

                    <!-- Form -->

                    <form class="form-horizontal m-t-20" id="forgetform" method="post" action="<?php echo  base_url(); ?>admin/save_forgetpassword">

                        <div class="row p-b-30">

                            <div class="col-12">

                                <div class="input-group mb-3">

                                    <div class="input-group-prepend">

                                        <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="ti-user"></i></span>

                                    </div>

                                    <input type="text" class="form-control form-control-lg" aria-label="Username" id="password" aria-describedby="basic-addon1" name="new_password" placeholder="Enter New Password" pattern="(?=^.{6,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Password (UpperCase, LowerCase, SpecialChar and min 6 Chars)" required>

                                </div>

                            </div>

                        </div>

                        <div class="row border-top border-secondary">

                            <div class="col-12">

                                <div class="form-group">

                                    <div class="p-t-20">

                                        <button class="btn btn-success float-right" type="submit">Submit</button>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

    <!-- ============================================================== -->

    <!-- All Required js -->

    <!-- ============================================================== -->

    <script src="<?php echo base_url(); ?>assets/admin/assets/libs/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap tether Core JavaScript -->

    <script src="<?php echo base_url(); ?>assets/admin/assets/libs/popper.js/dist/umd/popper.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/admin/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>