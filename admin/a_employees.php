<?php require_once('includes/session.php');
      require_once('includes/conn.php');
      include('add_edit_delete/db.php');

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
                    <li>
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
                    <li  class="active">
                        <a href="a_employees.php">
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
                         
		<div class="panel panel-default sammacmedia">
            <div class="panel-heading" style="font-size: 25px">اضافة فاتورة</div>
        <div class="panel-body">
            <form method="post" action="add_edit_delete/addd.php" enctype="multipart/form-data">
        <div class="row form-group">
        <div class="col-lg-6">
            <label>Code
</label>
              <input type="text" class="form-control" name="code"  required>
              
            </div>  
            <div class="col-lg-6">
            <label>Date
</label>
              <input type="date" class="form-control" name="date" required>
            </div>
            <div class="col-lg-6">
            <label>Donor
</label>
<br>
S1 20 3 OCHA FSL

<input type="checkbox" value="S1 20 3 OCHA FSL"  name="Donor1" ><br>
S1 20 4 OCHA SNFI

<input type="checkbox"  value="S1 20 4 OCHA SNFI" name="Donor2" ><br>
S1 20 8 ECHO

<input type="checkbox"  value="S1 20 8 ECHO"  name="Donor3" ><br>
Shared cost

<input type="checkbox" value="Shared cost"  name="Donor4" ><br>
              
            </div>
            <div class="col-lg-6">
            <label>Department
</label>
              <td>
							<select class="form-control" name="Department" required>
							<option value="HR
">HR

<option value="Kitchen
">Kitchen

<option value="Livelihood
">Livelihood

<option value="Log
">Log
<option value="Rehabilitation
">Rehabilitation

<option value="Shelter
">Shelter

<option value="Vouchers
">Vouchers



</select></td>
            </div>
            <div class="col-lg-6">
            <label>Supplier name
</label>
              <input type="text" class="form-control" name="name" required>
            </div>
            <div class="col-lg-6">
            <label>PR number
</label>
              <input type="text" class="form-control" name="PR" required>
            </div> 
             <div class="col-lg-6">
            <label>Contract number
</label>
              <input type="text" class="form-control" name="Contract" >
            </div>
            <div class="col-lg-6">
            <label>Invoice details_English
</label>
              <input type="text" class="form-control" name="details_English"  >
            </div>
            <div class="col-lg-6">
            <label>Invoice details_Arabic
</label>
              <input type="text" class="form-control" name="details_Arabic">
            </div>
            <div class="col-lg-6">
            <label>Amount_USD
</label>
              <input type="number" class="form-control" name="Amount_USD"  >
            </div>
            <div class="col-lg-6">
            <label>Amount_SYP
</label>
              <input type="number" class="form-control" name="Amount_SYP" >
            </div>
            <div class="col-lg-6">
            <label>Amount_TRY
</label>
              <input type="number" class="form-control" name="Amount_TRY" >
            </div>
           
            <div class="col-lg-6">
            <label>Office
</label>
            
              <select  class="form-control" name="Office"  required>
<option value="Syria - Idleb
">Syria - Idleb

<option value="Syria - Azaz
">Syria - Azaz

<option value="Turkey - Antakya
">Turkey - Antakya

<option value="Turkey - Mersin
">Turkey - Mersin

</select>
            </div>
            
        </div>
        
         <div class="row form-group">
          <div class="col-lg-6">
            <label>documents_scan</label>
             <input type="file" class="form-control" name="image" required>
             </div></div>

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
    </script>
    </body>
</html>
