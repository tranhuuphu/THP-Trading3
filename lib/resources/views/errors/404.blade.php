<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="{{asset('public/admin')}}/">
        {{-- <base href="{{asset('public/site_asset')}}/"> --}}
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>404 Error</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="{{asset('public/site_asset/font-awesome/')}}/5.13/js/all.min.js" crossorigin="anonymous"></script>
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script> --}}
    </head>
    <body>
        <div id="layoutError">
            <div id="layoutError_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="text-center mt-4">
                                    <img class="mb-4 img-error" src="{{asset('public/site_asset')}}/img/error-404-monochrome.svg" />
                                    <p class="lead">This requested URL was not found on this server.</p>
                                    <a href="{{asset('/')}}"><i class="fas fa-arrow-left mr-1"></i>Return to Dashboard</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutError_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        {{-- <script src="{{asset('public/site_asset/jquery/jquery-3.2.1.min.js')}}" crossorigin="anonymous"></script> --}}
    </body>
</html>
