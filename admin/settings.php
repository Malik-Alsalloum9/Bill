<?php require_once('includes/session.php');
      require_once('includes/conn.php');
$sqlE =mysqli_query($mysqli,"SELECT * FROM users WHERE username='{$_SESSION['username']}'");
$eprow=mysqli_fetch_array($sqlE);
?>
<!DOCTYPE html>
<html lang="ar">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>لوحة التحكم</title>

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
                    <h3>لوحة التحكم</h3>
                    <strong>DB</strong>
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
                    <li class="active">
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

                                                  
                            <?php
                            if(isset($mysqli,$_POST['submit'])){
                            $old_password1 =mysqli_real_escape_string($mysqli,$_POST['old_password']);
                            $password =mysqli_real_escape_string($mysqli,$_POST['password']);
                            $cpassword =mysqli_real_escape_string($mysqli,$_POST['cpassword']);
                                $old_password=md5($old_password1);
                                if($eprow['password']!=$old_password){
                                  ?>
                                <div class="alert alert-danger samuel animated shake" id="sams1">
                                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                                    <strong> Danger! </strong><?php echo'Sorry Enter Correct Old Password';?></div>
                                    <?php   
                                }else{
                                    if($password!=$cpassword){
                                     ?>
                                <div class="alert alert-danger samuel animated shake" id="sams1">
                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                                <strong> Danger! </strong><?php echo'Sorry New Password And Confirm Password do not match please try again';?></div>

                                    <?php      
                                    }else{
                                      $password =md5($cpassword);  
                                $sqliU ="UPDATE users SET password='$password' WHERE username='{$_SESSION['username']}'";
                                $res = mysqli_query($mysqli,$sqliU);
                                if($res==1){
                                    ?>
                                <div class="alert alert-warning sammac animated shake" id="sams1">
                          <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong> Successfully </strong><?php echo'You Have Updated your password successfully';?></div>

                                    <?php
                                }
                                }
                                }
                  
                            }
                if(isset($mysqli,$_POST['update'])){
                    $name = mysqli_real_escape_string($mysqli,$_POST['name']);
                    $surname = mysqli_real_escape_string($mysqli,$_POST['surname']);
                    $phone = mysqli_real_escape_string($mysqli,$_POST['phone']);
                    $email = mysqli_real_escape_string($mysqli,$_POST['email']);
                    $username = mysqli_real_escape_string($mysqli,$_POST['username']);

                    
                    $sqlTaru = "UPDATE users SET name ='$name', surname ='$surname', phone ='$phone', username ='$username', email ='$email' WHERE username= '{$_SESSION['username']}'";
                    $resTaru = mysqli_query($mysqli,$sqlTaru);
                    if($resTaru==1){
                        ?>
                        <div class="alert alert-warning sammac animated shake" id="sams1">
                          <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong> Successfully </strong><?php echo'You have updated your profile successfully';?></div>
                        <?php
                    }else{
                    ?>
                <div class="alert alert-warning samuel animated shake" id="sams1">
                          <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong> Successfully </strong><?php echo'OOP something went wrong';?></div>
                <?php
                    }
                }
                            ?>
                <div class="line"></div>
<div class="row">
<div class="col-md-8">
    <div class="panel panel-default sammacmedia">
            <div class="panel-heading" style="font-size: 25px">اعدادات الحساب</div>
        <div class="panel-body">
            <form method="post" action="settings.php" >
        <div class="row form-group">
          <div class="col-lg-6">
            <label>Name</label>
              <input type="text" class="form-control" name="name" pattern="[A-Za-z]{3,}" value="<?php echo $eprow['name'];?>" required>
            </div>  
            
             <div class="col-lg-6">
            <label>Surname</label>
              <input type="text" class="form-control" name="surname" pattern="[A-Za-z]{3,}" value="<?php echo $eprow['surname'];?>" required>
            </div>  
        </div>
            <div class="row form-group">
          <div class="col-lg-6">
            <label>Email</label>
              <input type="email" class="form-control" name="email" value="<?php echo $eprow['email'];?>" required>
            </div>  

             <div class="col-lg-6">
            <label>Phone</label>
              <input type="text" class="form-control" name="phone" pattern="[2-2]{1,1}[6-6]{1,1}[3-3]{1,1}[7-7]{1,1}[1-9]{2,2}[0-9]{6,6}" value="<?php echo $eprow['phone'];?>" required>
            </div>  
            <div class="col-lg-6">
            <label>UsrrName</label>
              <input type="text" class="form-control" name="username" value="<?php echo $eprow['username'];?>" required>
            </div>  
        </div>   
         <div class="row form-group">
          <div class="col-lg-3">
            <label>Gender</label>
             <input type="text" class="form-control"  value="<?php echo $eprow['gender'];?>" readonly>
            </div>  
              <div class="col-lg-3">
            <label>Access Level</label>
             <input type="text" class="form-control"  value="<?php echo $eprow['permission'];?>" readonly>
            </div>
              <div class="col-lg-6">
            <label>Member Since</label>
             <input type="text" class="form-control"  value="<?php echo $eprow['joined'];?>" readonly>
            </div>
        </div>

                <div class="row">
                <div class="col-md-12">
                  <button type="submit" name="update" class="btn btn-warning btn-block"><span class="fa fa-pencil"></span> Update</button>  
                </div>
                   
                </div>
            </form>

            </div>
    </div>
    </div>
    <div class="col-md-4">
    <div class="panel panel-default sammacmedia">
            <div class="panel-heading" style="font-size: 25px">تغيير كلمة المرور</div>
        <div class="panel-body">
            <form method="post" action="settings.php">
        <div class="row form-group">
          <div class="col-lg-12">
            <label>Old Password</label>
              <input type="password" class="form-control" name="old_password" required>
            </div>   
        </div>
           
                <div class="row form-group">
          <div class="col-lg-12">
            <label>New Password</label>
              <input type="password" class="form-control" name="password" required>
            </div>   
        </div>
                        <div class="row form-group">
          <div class="col-lg-12">
            <label>Confirm Password</label>
              <input type="password" class="form-control" name="cpassword" required>
            </div>   
        </div>

                <div class="row">
                <div class="col-md-12">
                  <button type="submit" name="submit" class="btn btn-danger btn-block"><span class="fa fa-lock"></span> Change</button>  
                </div>
                     
                </div>
            </form>

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
