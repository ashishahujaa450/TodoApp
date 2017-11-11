<!doctype html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Todo App | profile</title>
        <meta name="description" content="A reminder list management">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <!-- Place favicon.ico in the root directory -->
		
		<!-- external css libs -->
        <link rel="stylesheet" href="../pulbic/css/normalize.css">
        <link rel="stylesheet" href="../public/css/bootstrap.css">
        <link rel="stylesheet" href="../public/css/font-awesome/css/font-awesome.css">
		
		<!-- custom styles -->
        <link rel="stylesheet" href="../public/css/main.css">

        <!-- external js libs -->
        <script src="../public/js/jquery.js"></script>
    </head>
    <body>
       
       <!-- external js libs -->
       <script src="../public/js/bootstrap.js"></script>
		
		 <!--pick me from here-->
        <!--index page view (html) code start here you can put it according to your adjustment-->

        <main class="main container mt-5 pt-5">
            <div class="row justify-content-center">
                <div class="col-sm-7">

                    <div class="content-block profile-header w-100 text-right px-2 mb-5 py-1 row">
                        <div class="col-8 ">                            
                            <h3 class="font-1">Todo App <img src="../public/images/logo.png" alt=""></h3>
                        </div><!--end col 8-->

                        <div class="col-4">
                            <h4><img src="../public/images/user.png" alt=""></h4>
                        </div><!--end col 4-->   
                    </div><!--end profile header block-->


                    <div class="content-block row w-100 text-center">
                        <div class="w-100 login-form px-5 py-5">
                            
                            <hr>

                            <form action="#" method="post">

                                <div class="form-group mt-5">
                                    <label for="fname" class="sr-only">full name</label>
                                   <div class="input-group mb-2">

                                       <div class="input-group-addon rounded-0"><i class="fa fa-user"></i></div>

                                        <input type="password" class="form-control rounded-0" id="fname" placeholder="Full Name">

                                   </div><!--end input group-->
                                </div><!--end form group-->

                                <div class="form-group">
                                    <label for="email" class="sr-only">Email</label>
                                   <div class="input-group mb-2">

                                       <div class="input-group-addon rounded-0"><i class="fa fa-envelope"></i></div>

                                        <input type="email" class="form-control rounded-0" id="email" placeholder="Email Address">

                                   </div><!--end input group-->
                                </div><!--end form group-->

                                <div class="form-group">
                                    <label for="pwd" class="sr-only">Password</label>
                                   <div class="input-group mb-2">

                                       <div class="input-group-addon rounded-0"><i class="fa fa-key"></i></div>

                                        <input type="password" class="form-control rounded-0" id="pwd" placeholder="Password">

                                   </div><!--end input group-->
                                </div><!--end form group-->

                                <div class="form-group">
                                    <label for="mobile" class="sr-only">mobile</label>
                                   <div class="input-group mb-2">

                                       <div class="input-group-addon rounded-0"><i class="fa fa-mobile"></i></div>

                                        <input type="text" class="form-control rounded-0" id="pwd" placeholder="Mobile">

                                   </div><!--end input group-->
                                </div><!--end form group-->

                                <div class="form-group">
                                    <div class="btn-group" role="group">
                                        <button class="btn btn-primary btn-dark"><i class="fa fa-thumbs-o-up"></i></button>
                                        <button class="btn btn-primary rounded-0">
                                        Register With Todo
                                        </button>
                                    </div><!--end btn group-->
                                </div><!--end form group-->
                            </form><!--end form-->                        
                        </div><!--end left col-->
                    </div><!--end content block-->
                </div><!--end col sm6-->
            </div><!--end row-->
        </main><!--end main container-->

        <!--stop html struct finish here-->
        <!--stop html struct finish here-->

       <!-- custom js -->
       <script src="../public/js/bootstrap.js" async="true"></script>
    </body>
</html>