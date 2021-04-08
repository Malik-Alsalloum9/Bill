<?php require_once('includes/session.php');
       require_once('includes/conn.php');
       require_once('check.php');    
?>
<!DOCTYPE html>
<html lang="ar">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Bill </title>

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
                    <h3>Bill </h3>
                    <strong>Bill</strong>
                </div>

                <ul class="list-unstyled components">
                    <li class="active">
                        <a href="dashboard.php">
                            <i class="fa fa-th"></i>
                           لوحة التحكم
                        </a>
                    </li>
                    
                              <?php
                    if($_SESSION['permission']==1 or $_SESSION['permission']==2 ){
                        
                    
                    ?>
                   <li>
                                            <a href="add_edit_delete/index.php">

                            <i class="fa fa-table"></i>
                             الفواتير
                        </a>
                      
                    </li>
                    <?php
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
                    <li>  <a href="a_employees.php">  
                            <i class="fa fa-plus"></i>
                            اضافة فاتورة
                        </a>
                    </li>
                    <li>
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
                    if($_SESSION['permission']==1){
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
                    <?php } ?>
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
                <div class="row">
                <div class="col-lg-6 col-md-6 ">
                    <div class="panel panel sammac sammacmedia" style="background-color: #b400ff">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">*</div>
                                    <div><a href="#"><?php require_once('includes/name.php');?></a></div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 ">
                    <div class="panel panel sammac sammacmedia">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $users;?></div>
                                    <div>اجمالي عدد المستخدمين</div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div> 
                <div class="col-lg-6 col-md-6">
                    <div class="panel panel strover sammacmedia">
                        <div class="panel-heading">
                        <a href="#">  <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-link fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $cases;?></div>
                                    <div>اجمالي عدد الفواتير</div>
                                </div><a/>
                            </div>
                        </div>
                     
                    </div>
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
    </body>
</html>
