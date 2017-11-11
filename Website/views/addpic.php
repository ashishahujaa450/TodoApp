<?php
	require_once("../controller/attachments.php");
	$loader = new Loader();
?>

<!doctype html>
<html class="no-js">
    <head>
        <title>Todo App | Profie Pic</title>
        <?php $loader->head_load(); ?>
    </head>
    <body>
       
       <!-- external js libs -->
       <script src="../public/js/bootstrap.js"></script>
		
		 <!--pick me from here-->
        <!--index page view (html) code start here you can put it according to your adjustment-->

        <main class="main container mt-5 pt-5">
            <div class="row justify-content-center">
                <div class="col-sm-7">
                    
                    <!--header content component (you can put these component according to your needs)-->
                    <div class="content-block w-100 text-right px-2 mb-5 py-1 row">
                        <div class="col-8 ">   
                            <img src="../public/images/logo.png" alt="">                      
                            <h3 class="font-1">Todo App </h3>
                        </div><!--end col 8-->

                        <div class="col-4">
                            <p class="text-muted mb-0"><img src="../public/images/user.png" alt=""> Hi, Crakers <i class="fa fa-power-off"></i></p>
                        </div><!--end col 4-->   
                    </div><!--end profile header block-->

                    
                    <!--listing content block-->
                    <!--listing content block-->
                    <div class="content-block row w-100 text-center justify-content-center py-5">
                        <div class="col-8">
                            <i class="fa fa-plus" id="add"></i>

                            <div class="card priority-1 custom-card">
                                <div class="card-body">
                                    <h5>Home Work</h5>
                                    <p>Complete data structure to answer my team.</p>
                                </div><!--end card body-->
                            </div><!--end card-->

                            <div class="card priority-2 custom-card">
                                <div class="card-body">
                                    <h5>Happy bdy</h5>
                                    <p>Coder bday is here don't forget to wish him on 2nd October.</p>
                                </div><!--end card body-->
                            </div><!--end card-->

                            <div class="card priority-3 custom-card">
                                <div class="card-body">
                                    <h5>Main work</h5>
                                    <p>Let's complete the Todo project work given to me.</p>
                                </div><!--end card body-->
                            </div><!--end card-->
                        </div><!--end col 8-->
                    </div><!--end content block-->
                </div><!--end col sm6-->
            </div><!--end row-->
        </main><!--end main container-->

        <!--stop html struct finish here-->
        <!--stop html struct finish here-->
        
   	 	<?php $loader->body_load(); ?>
    </body>
</html>