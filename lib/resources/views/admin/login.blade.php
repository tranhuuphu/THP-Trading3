


<!DOCTYPE html>
<html lang="en">
    <head>
    	<base href="{{asset('public')}}/">
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login Admin</title>
        <link href="admin/css/styles.css" rel="stylesheet" />
        <script src="vendor/font-awesome/5.13/js/all.min.js" crossorigin="anonymous"></script>
        <style type="text/css">
            textarea:focus, 
            textarea.form-control:focus, 
            input.form-control:focus, 
            input[type=text]:focus, 
            input[type=password]:focus, 
            input[type=email]:focus, 
            input[type=number]:focus, 
            [type=text].form-control:focus, 
            [type=password].form-control:focus, 
            [type=email].form-control:focus, 
            [type=tel].form-control:focus, 
            [contenteditable].form-control:focus {
              box-shadow: inset 0 -1px 0 #ddd;
            }
            .pagination li, a{
                outline: none !important;
                box-shadow: none !important;
            }
           select{
                outline: none !important;
                box-shadow: none !important;
            }
        </style>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form role="form" method="post">
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Email</label><input class="form-control py-4" id="inputEmailAddress" name="email" type="email" autofocus="" value="{{old('email')}}" placeholder="Enter email address" /></div>
                                            <div class="form-group"><label class="small mb-1" for="inputPassword">Password</label><input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" name="password"/></div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox"><input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" /><label class="custom-control-label" for="rememberPasswordCheck" value="Remember Me">Remember password</label></div>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"><a class="small" href="javascript:void(0)">Forgot Password?</a><input type="submit" name="submit" value="Đăng Nhập" class="btn btn-primary"></div>
                                            {{csrf_field()}}
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="javascript:void(0)">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website <?php echo date('Y'); ?></div>
                            <div>
                                <a href="javascript:void(0)">Privacy Policy</a>
                                &middot;
                                <a href="javascript:void(0)">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="vendor/jquery/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>
        {{-- <script src="js/scripts.js"></script> --}}
    </body>
</html>

