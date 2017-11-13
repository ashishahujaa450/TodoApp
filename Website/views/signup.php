<?php 
  require_once('../controller/attachments.php');
  $loader = new Loader();
?>

<!doctype html>
<html class="no-js">
    <head>
        <title>Todo App | Sign up</title>
        <?php $loader->head_load(); ?>
    </head>
    <body>
		
		 <!--pick me from here-->
        <!--index page view (html) code start here you can put it according to your adjustment-->

        <main class="main container mt-5 pt-5">
            <div class="row justify-content-center">
                <div class="col col-sm-7">
                    <div class="content-block w-100 row text-center">
                        <div class="col-6 login-form px-5 py-5">
                            <h3 class="font-1">Todo App</h3>
                            <hr>

                            <form action="../controller/reqHandler.php?type=reg" method="post">

                                <div class="form-group mt-5">
                                    <label for="fname" class="sr-only">full name</label>
                                   <div class="input-group mb-2">

                                       <div class="input-group-addon rounded-0"><i class="fa fa-user"></i></div>

                                        <input type="text" class="form-control rounded-0" id="fname" name="fname" placeholder="Full Name">

                                   </div><!--end input group-->
                                </div><!--end form group-->

                                <div class="form-group">
                                    <label for="email" class="sr-only">Email</label>
                                   <div class="input-group mb-2">

                                       <div class="input-group-addon rounded-0"><i class="fa fa-envelope"></i></div>

                                        <input type="email" class="form-control rounded-0" id="email" name="email" placeholder="Email Address">

                                   </div><!--end input group-->
                                </div><!--end form group-->

                                <div class="form-group">
                                    <label for="pwd" class="sr-only">Password</label>
                                   <div class="input-group mb-2">

                                       <div class="input-group-addon rounded-0"><i class="fa fa-key"></i></div>

                                        <input type="password" class="form-control rounded-0" id="pwd" name="pwd" placeholder="Password">

                                   </div><!--end input group-->
                                </div><!--end form group-->

                                <div class="form-group">
                                    <label for="mobile" class="sr-only">mobile</label>
                                   <div class="input-group mb-2">

                                       <div class="input-group-addon rounded-0"><i class="fa fa-mobile"></i></div>

                                        <input type="text" class="form-control rounded-0" id="mob" name="mob" placeholder="Mobile">

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

                        <!--right col section splash screen start here-->
                        <!--right col section splash screen start here-->
                        <!--right col section splash screen start here-->

                        <div class="col-6 todo-splash py-5">
                            <img src="../public/images/logo.png" alt="" class="img-fluid mb-3 mt-4 pt-5">
                            <h5 class="font-1">Reminder For Work</h5>
                            <button type="button" class="btn mt-3 btn-primary rounded-0">Login</button>
                        </div><!--end rigth col-->
                    </div><!--end content block-->
                </div><!--end col sm6-->
            </div><!--end row-->
        </main><!--end main container-->

        <!--stop html struct finish here-->
        <!--stop html struct finish here-->

       <?php $loader->body_load(); ?>
    </body>
</html>
   	 	
