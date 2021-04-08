<?php require_once('includes/session.php');
      require_once('includes/conn.php');
?>
<!DOCTYPE html>
<html lang="ar">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Bill</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/awesome/font-awesome.css">
        <link rel="stylesheet" href="assets/css/animate.css">
    </head>
    <body>



        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar" class="sammacmedia">
                <div class="sidebar-header">
                    <h3>Bill</h3>
                    <strong>Bill</strong>
                </div>

                <ul class="list-unstyled components">
                    <li>
                        <a href="dashboard.php">
                            <i class="fa fa-th"></i>
                           لوحة التحكم
                        </a>
                    </li>
                    <?php
                    if($_SESSION['permission']==1 or $_SESSION['permission']==2 ){
                        
                    
                    ?>
                    <li  >
                    <a href="add_edit_delete/index.php">  
                            <i class="fa fa-table"></i>
                            الفواتير
                        </a>
                      
                    </li>   <?php
                    if($_SESSION['permission']==1){
                    ?>
                    <li>
                        <a href="add_edit_delete/v_index.php">
                            <i class="fa fa-table"></i>
                            عمليات على الفواتير
                        </a>
                    </li>
                    <?php }?>
                    <?php }?>
                    <li>
                       <a href="a_employees.php">
                            <i class="fa fa-plus"></i>
                          اضافة فاتورة
                        </a>
                    </li>
                    <li class="active">
                        <a href="invest.php">
                            <i class="fa fa-link"></i>
                            اضافة ملاحظة
                        </a>
                    </li>
                              <?php
                    if($_SESSION['permission']==1 or $_SESSION['permission']==2 ){
                        
                    
                    ?>
                    <li>
                        <a href="v_issue.php">
                            <i class="fa fa-table"></i>
                           الملاحظات
                        </a>
                    </li>
                    <?php }?>
                             <?php
                    if($_SESSION['permission']==1 or $_SESSION['permission']==2 ){
                        
                    
                    ?>
                    <li>
                        <a href="a_users.php">
                            <i class="fa fa-user"></i>
                           اضافة مستخدم
                        </a>
                    </li>
                    <li>
                        <a href="v_users.php">
                            <i class="fa fa-table"></i>
                          عرض المستخدمين 
                        </a>
                    </li>
                    <?php }?>
                    <li>
                        <a href="settings.php">
                            <i class="fa fa-cog"></i>
                            الاعدادات
                        </a>
                    </li>
                </ul>
            </nav>


            <!-- Page Content Holder -->
            <div id="content">
             
                <div clas="col-md-12">
                    <img src="assets/image/x.jpg" class="img-thumbnail">
                    </div>
         
                
               
                    <nav class="navbar navbar-default sammacmedia">
                    <div class="container-fluid">

                        <div class="navbar-header" id="sams">
                            <button type="button" id="sidebarCollapse" id="makota" class="btn btn-sam animated tada navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span>القائمة</span>
                            </button>
                            
                        
                            <a href="logout.php"><button type="button" id="sidebarCollapse" id="makota" class="btn btn-sam animated tada navbar-btn">
                                <i class="fa fa-power-off"></i>
                                <span>Logout</span>
                            </button></a>

                           
                            
                        </div>

                        
                    </div>
                </nav>

                <div class="line"></div>

                            <?php
                            if(isset($mysqli,$_POST['submit'])){
                            $severity = mysqli_real_escape_string($mysqli,$_POST['severity']);
                            $notes = mysqli_real_escape_string($mysqli,$_POST['notes']);
                            $as = rand(1000,9999);     
                            $case_num = date("YmdHis").'.'.$as;
      
                  
                            $sql = "INSERT INTO cases(severity,case_num,notes)VALUES('$severity','$case_num','$notes')";
                            $results = mysqli_query($mysqli,$sql);

                        if($results==1){
                              ?>
                        <div class="alert alert-success strover animated bounce" id="sams1">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong> Successfully! </strong><?php echo'Case has successfully added';?></div>
                        <?php

                          }else{
                                ?>
                        <div class="alert alert-danger samuel animated shake" id="sams1">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong> Danger! </strong><?php echo'OOPS something went wrong';?></div>
            
                        <?php    
                          }      
                
            }
                
                ?>
		<div class="panel panel-default sammacmedia">
            <div class="panel-heading" style="font-size: 25px">اكتب الملاحظة</div>
        <div class="panel-body">
            <form method="post" action="invest.php">
        <div class="row form-group">
         
            <div class="col-lg-6">
            <label>الحالة</label>
                <select class="form-control" name="severity">
                <option>عادي</option>
                <option>حرج</option>  
                <option>خطر</option>    
                </select>
            </div>
           </div>
                <div class="row form-group">
          <div class="col-lg-12">
              <textarea class="form-control" id="editor" name="notes"></textarea>
            </div>  
             
           </div>
                
                <div class="row">
                <div class="col-md-6">
                  <button type="submit" name="submit" class="btn btn-suc btn-block"><span class="fa fa-plus"></span> Insert</button>  
                </div>
                     <div class="col-md-6">
                  <button type="reset" class="btn btn-dan btn-block"><span class="fa fa-times"></span> Cancel</button>  
                </div>
                </div>
            </form>

            </div>
                </div>
                <div class="line"></div>
                <footer>
            <p class="text-center">
            White Room Developer Programming &copy;<?php echo date("Y ");?>   
            </p>
            </footer>
            </div>
            
        </div>
        <!-- jQuery CDN -->
         <script src="assets/js/jquery-1.10.2.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="assets/js/bootstrap.min.js"></script>
         <script src="vendors/ckeditor/sammacmedia.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
             $('sams').on('click', function(){
                 $('makota').addClass('animated tada');
             });
         </script>
         <script type="text/javascript">

        $(document).ready(function () {
 
            window.setTimeout(function() {
        $("#sams1").fadeTo(1000, 0).slideUp(1000, function(){
        $(this).remove(); 
        });
            }, 5000);
 
        });
              ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .then( editor => {
                console.log( editor );
		} )
                .catch( error => {
                console.error( error );
		} );
    </script>
    </body>
</html>
