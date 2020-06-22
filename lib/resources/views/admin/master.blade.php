<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="{{asset('public')}}/">
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - THP Trading</title>

        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

        <link href="admin/css/styles.css" rel="stylesheet" />

        <link href="vendor/dataTable/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />

        <link href="vendor/font-awesome/5.13/css/all.min.css" rel="stylesheet" />

        {{-- <link href="vendor/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" /> --}}
        
        
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script> --}}
        <script type="text/javascript" src="editor/ckeditor/ckeditor.js"></script>
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
           select, input, label{
                outline: none !important;
                box-shadow: none !important;
            }
            label{
                font-weight: bold;
            }
            form, input, textarea, .form-group{
                border-radius: none !important;
            }

            a{
                text-decoration: none !important;
            }
            
        </style>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="{{asset('admin/home')}}">THP Trading</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            ><!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Ra Ngoài Trang Chủ</div>
                            <a class="nav-link btn btn btn-secondary" href="{{asset('')}}" target="_blank" style="border-radius: 0; color: #fff; font-weight: 700;"><div class="sb-nav-link-icon"><i class="fas fa-chart-bar" aria-hidden="true" style="color: #fff"></i></div>Home</a>

                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="{{asset('admin')}}"><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>Dashboard</a>
                            

                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="{{asset('admin/cate')}}"><div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div> Danh Mục - Menu</a>

                            <a class="nav-link" href="{{asset('admin/post')}}"> <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>Bài Viết</a>

                            <a class="nav-link" href="{{asset('admin/carousel')}}"> <div class="sb-nav-link-icon"><i class="fas fa-sliders-h"></i></div>Carousel - Slide</a>

                            <a class="nav-link" href="{{asset('admin/page')}}"> <div class="sb-nav-link-icon"><i class="fas fa-bullhorn"></i></div>Trang</a>

                            <a class="nav-link" href="{{asset('admin/user')}}"> <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>Người Dùng</a>




                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <strong style="color:  #fff">{{Auth::user()->email}}</strong>
                        <a class="btn btn-danger mt-2" href="{{asset('logout')}}"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout</a>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">

                @yield('main')

                 <footer class="py-4 mt-auto" style="background: #000000">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-white">Copyright &copy; My Website <?php echo date("Y"); ?></div>
                            {{-- <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div> --}}
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        {{-- <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script> --}}
        <script src="vendor/jquery/jquery-3.4.1.min.js" crossorigin="anonymous"></script>


        {{-- <link href="vendor/bootstrap-select/js/bootstrap-select.min.js" rel="stylesheet" /> --}}


        <script src="vendor/bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>

        <script src="vendor/font-awesome/5.13/js/all.min.js" crossorigin="anonymous"></script>

        <script src="admin/js/scripts.js"></script>


        <script src="vendor/dataTable/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="vendor/dataTable/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>


        <script src="vendor/dataTable/datatables-demo.js"></script>

        <script type="text/javascript">
            function changeImg(input){
                //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
                if(input.files && input.files[0]){
                    var reader = new FileReader();
                    //Sự kiện file đã được load vào website
                    reader.onload = function(e){
                        //Thay đổi đường dẫn ảnh
                        $('#avatar').attr('src',e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
            $(document).ready(function() {
                $('#avatar').click(function(){
                    $('#img').click();
                });
            });
        </script>
    </body>
</html>