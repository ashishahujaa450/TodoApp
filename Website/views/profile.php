<?php
	require_once("../controller/attachments.php");
	$loader = new Loader();
?>

<!doctype html>
<html class="no-js">
    <head>
        <title>Todo App | Profile</title>
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
                    
                    <!--header content block-->
                    <!--header content block-->
                    <div class="content-block profile-header w-100 text-right px-2 mb-5 py-1 row">
                        <div class="col-8 ">                            
                            <h3 class="font-1">Todo App <img src="../public/images/logo.png" alt=""></h3>
                        </div><!--end col 8-->

                        <div class="col-4">
                            <p class="text-muted mb-0"><img src="../public/images/user.png" alt=""> Hi, Crakers <i class="fa fa-power-off"></i></p>
                        </div><!--end col 4-->   
                    </div><!--end profile header block-->

                    
                    <!--listing content block-->
                    <!--listing content block-->
                    <div class="content-block row w-100 text-center justify-content-center py-5">
                        <div class="col-8">
                            <a href="#mymodal" data-toggle="modal"><i class="fa fa-plus" id="add"></i></a>

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
                                                    <input type="text" class="form-control rounded-0" id="title" placeholder="Task Title">
                                               </div><!--end input group-->
                                            </div><!--end form group-->

                                            <div class="form-group">
                                                <textarea class="form-control rounded-0" id="description" rows="3" placeholder="description"></textarea>
                                            </div><!--end form group-->

                                            <div class="form-group">
                                                <span class="mr-5">Task Priority</span>
                                                <select class="custom-select my-3 rounded-0" required>
                                                    <option value="low">Lowest</option>
                                                    <option value="med">Medium</option>
                                                    <option value="high">Highest</option>
                                                </select>
                                            </div><!--end form group-->

                                            <div class="form-group">                  
                                                <button class="btn btn-primary rounded-0" data-dismiss="modal">
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
