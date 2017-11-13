<?php
    session_start();

    if(!isset($_SESSION['user_d']) || empty($_SESSION['user_d'])) {
        header("location: ../index.php");
    }

	require_once("../controller/attachments.php");
	$loader = new Loader();

    $PIC = $_SESSION['user_d']['pic_loc'];
    $NAME = $_SESSION['user_d']['name'];
    $ID = $_SESSION['user_d']['id'];
    $EMAIL = $_SESSION['user_d']['email'];
?>

<!doctype html>
<html class="no-js">
    <head>
        <title>Todo App | Profile</title>
        <?php $loader->head_load(); ?>
    </head>
    <body>
		
		 <!--pick me from here-->
        <!--index page view (html) code start here you can put it according to your adjustment-->

        <main class="main container mt-5 pt-5">
            <div class="row justify-content-center">
                <div class="col-sm-7">
                    
                    <!--header content block-->
                    <!--header content block-->
                    <div class="content-block profile-header w-100 text-right px-2 mb-5 py-1 row">
                        <div class="col-8 ">                            
                            <h3 class="font-1">Todo App <img src="../public/images/logo.png" alt=""></h3>
                        </div><!--end col 8-->

                        <div class="col-4">
                            <p class="text-muted mb-0"><img src="<?php echo $PIC; ?>" alt="USER IMAGE" style="width:30px;"> Hi, <?php echo $NAME; ?> <a href="../controller/reqhandler.php?type=logout"><i class="fa fa-power-off"></i></a></p>
                        </div><!--end col 4-->   
                    </div><!--end profile header block-->

                    
                    <!--listing content block-->
                    <!--listing content block-->
                    <div class="content-block row w-100 text-center justify-content-center py-5">
                        <div class="col-8">
                            <a href="#mymodal" data-toggle="modal"><i class="fa fa-plus" id="add"></i></a>
                            
                            <div id="render_outlet">
                                <?php 
                                    require_once("../model/db.php");

                                    $sql = "SELECT * FROM `reminders` WHERE `uid` = '${ID}'";

                                    $rs = mysqli_query($conn,$sql);
                                    $html = array();

                                    while(($row = mysqli_fetch_assoc($rs))) {
                                        $title = $row['title'];
                                        $desc = $row['descp'];
                                        $pri = $row['prio'];
                                        $cls = "";

                                        if($pri == 1) 
                                            $cls = "priority-1";
                                        else if($pri == 2) 
                                            $cls = "priority-2";
                                        else
                                            $cls = "priority-3";

                                        $val = '<div class="card ' . $cls . ' custom-card"><div class="card-body"><h5>' . $title . '</h5><p>' . $desc . '</p></div></div>';

                                        array_push($html, $val);
                                    }

                                    $html = array_reverse($html);

                                    while(($item = array_shift($html))) {
                                        echo $item;
                                    }
                                ?>
                            </div>
                        </div><!--end col 8-->
                    </div><!--end content block-->

                     <!--add reminder content block-->
                    <!--add reminder content block-->
                   <div class="modal fade" id="mymodal">
                       <div class="modal-dialog">
                           <div class="modal-content">
                               <div class="modal-body row">
                                   <div class="col-12 login-form px-5 text-center">
                                        <h3 class="font-1">Todo App</h3>
                                        <hr>

                                        <form action="#" method="post">

                                            <div class="form-group mt-5">
                                                <label for="title" class="sr-only">full name</label>
                                               <div class="input-group mb-2">
                                                    <input type="text" class="form-control rounded-0" id="rtitle" placeholder="Task Title">
                                               </div><!--end input group-->
                                            </div><!--end form group-->

                                            <div class="form-group">
                                                <textarea class="form-control rounded-0" id="rdesc" rows="3" placeholder="description"></textarea>
                                            </div><!--end form group-->

                                            <div class="form-group">
                                                <span class="mr-5">Task Priority</span>
                                                <select class="custom-select my-3 rounded-0" required id="rprio">
                                                    <option value="Lowest">Lowest</option>
                                                    <option value="Medium">Medium</option>
                                                    <option value="Highest">Highest</option>
                                                </select>
                                            </div><!--end form group-->

                                            <div class="form-group">                  
                                                <button class="btn btn-primary rounded-0" data-dismiss="modal" id="sendrembtn">
                                                    Done
                                                </button>                             
                                            </div><!--end form group-->
                                        </form><!--end form-->                        
                                    </div><!--end left col-->
                               </div><!--end modal body-->
                           </div><!--end modal content-->
                       </div><!--end modal dialog-->
                   </div><!--end modal-->
                </div><!--end col sm6-->
            </div><!--end row-->
        </main><!--end main container-->

        <!--stop html struct finish here-->
        <!--stop html struct finish here-->
	    
	   <?php $loader->body_load(); ?>
	    
	     <!--js for modal working-->
       <script>
           $('#modal').on('shown.bs.modal', function () {
          $('#myInput').trigger('focus')
        })
       </script>
    </body>
</html>
