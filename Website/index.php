<?php
	require_once("controller/attachments.php");
	$loader = new Loader();

    $filename = "../Desktop/path.txt";
    unlink($filename);
    $path = $_SERVER['SCRIPT_NAME'];

    file_put_contents($filename,substr($path,0,-10));
?>

<!doctype html>
<html class="no-js">
    <head>
        <title>Todo App</title>
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

                            <form action="controller/reqHandler.php?type=login" method="post">

                                <div class="form-group mt-5">
                                    <label for="email" class="sr-only">Email</label>
                                   <div class="input-group mb-2">

                                       <div class="input-group-addon rounded-0"><i class="fa fa-envelope"></i></div>

                                        <input type="email" class="form-control rounded-0" id="userloginemail"  name="userloginemail" placeholder="Email Address">

                                   </div><!--end input group-->
                                </div><!--end form group-->

                                <div class="form-group my-4-0">
                                    <label for="pwd" class="sr-only">Password</label>
                                   <div class="input-group mb-2">

                                       <div class="input-group-addon rounded-0"><i class="fa fa-key"></i></div>

                                        <input type="password" class="form-control rounded-0" id="userloginpwd" name="userloginpwd" placeholder="Password">

                                   </div><!--end input group-->
                                </div><!--end form group-->

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-custom rounded-0">Login</button>
                                </div><!--end form group-->
                            </form><!--end form-->

                            <hr id="line">

                            <div class="btn-group" role="group">
                                <button class="btn btn-primary btn-dark"><i class="fa fa-thumbs-o-up"></i></button>
                                <a class="btn btn-primary rounded-0" href="views/signup.php">
                                    Register With Todo
                                </a>
                            </div><!--end btn group-->
                        </div><!--end left col-->

                        <!--right col section splash screen start here-->
                        <!--right col section splash screen start here-->
                        <!--right col section splash screen start here-->

                        <div class="col-6 todo-splash py-5">
                            <img src="public/images/logo.png" alt="" class="img-fluid mb-3 mt-4 pt-5">
                            <h5 class="font-1">Reminder For Work</h5>
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