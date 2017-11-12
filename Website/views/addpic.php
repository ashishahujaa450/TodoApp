<?php
    if(!isset($_GET['uid']) || empty($_GET['uid']) || !isset($_GET['user']) || empty($_GET['user'])) {
            header("location: ../index.php");
    } 

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
		 <!--pick me from here-->
        <!--index page view (html) code start here you can put it according to your adjustment-->

        <main class="main container mt-5 pt-5">
            <div class="row justify-content-center">
                <div class="col-sm-7">
                    
                    <!--header content component (you can put these component according to your needs)-->
                    <div class=" w-100 text-right px-2 mb-5 py-1 row text-center">
                        <div class="col-12">   
                            <img src="../public/images/logo.png" alt="">
                                                 
                            <a class="font-1 d-block my-3" href="#" onclick="upload_pic()">Add profile picture</a>

                            <button type="button" class="btn btn-primary rounded-0">Done</button>
                        </div><!--end col 8-->
                        <form action="../controller/reqHandler.php?type=picupload" class="hide" id="picform" method="post" enctype="multipart/form-data">
                            <input type="file" id="upic" name="upic" onchange="send_pic();">
                            <input type="hidden" id="userid" name="userid" value="<?php echo $_GET['uid']; ?>">
                        </form>
                    </div><!--end profile header block-->
                     <!--header content component end here(you can put these component according to your needs)-->

                    
                    <!--add reminder content block-->
                    <!--add reminder content block-->
                    
                </div><!--end col sm6-->
            </div><!--end row-->
        </main><!--end main container-->

        <!--stop html struct finish here-->
        <!--stop html struct finish here-->
  
   	 	<?php $loader->body_load(); ?>
    </body>
</html>