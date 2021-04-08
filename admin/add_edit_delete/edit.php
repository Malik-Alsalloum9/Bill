<?php 
include ('db.php'); 
include ('header.php'); 
$ID=$_GET['id'];
?>
<body>


<div class="container">
<div class="hero-unit-header">
 <div class="container-con">
<!-- end banner & menunav -->

<div class="container">
<div class="row-fluid">
<div class="span12">
<div class="row-fluid">
<div class="span3"></div>
<div class="span6">


<div class="hero-unit-3">
<center>

<?php
  $query=mysqli_query($mysqli,"select * from student where student_id='$ID'")or die($mysqli_error());
$row=mysqli_fetch_array($query);
  ?>
 <form class="form-horizontal" method="post"  enctype="multipart/form-data" style="float: right;">
                                <legend><h4>Edit</h4></legend>
                                <h4>Image</h4>
                                <hr>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">
										<?php if($row['location'] != ""): ?>
										<img src="upload/<?php echo $row['location']; ?>" width="100px" height="100px" style="border:1px solid #333333;">
										<?php else: ?>
										<img src="images/default.png" width="100px" height="100px" style="border:1px solid #333333;">
										<?php endif; ?>
									</label>
                                    <div class="controls">
                                        <input type="file" name="image" style="margin-left:27px;">
										<button type="submit" name="image" class="btn btn-success" style="margin-top: 20px; margin-right: 131px;">Update</button>
                                    </div>
                                </div>
                                <hr>
                                <h4>Personal Information</h4>
                                <hr>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Code:</label>
                                    <div class="controls">
                                        <input type="text" name="code" required value=<?php echo $row['code']; ?>>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Date:</label>
                                    <div class="controls">
                                        <input type="date" name="date" required value=<?php echo $row['date']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Donor:</label>
                                    <div class="controls">
                                        <input type="text" name="Donor" required value=<?php echo $row['Donor']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Department:</label>
                                    <div class="controls">
                                        <input type="text" name="Department" required value=<?php echo $row['Department']; ?>>
                                        
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">name:</label>
                                    <div class="controls">
                                        <input type="text" name="name" required value=<?php echo $row['name']; ?>>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">PR:</label>
                                    <div class="controls">
                                        <input type="text" name="PR" required value=<?php echo $row['PR']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">details_English:</label>
                                    <div class="controls">
                                        <input type="text" name="details_English" required value=<?php echo $row['details_English']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">details_Arabic:</label>
                                    <div class="controls">
                                        <input type="text" name="details_Arabic" required value=<?php echo $row['details_Arabic']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Amount_USD:</label>
                                    <div class="controls">
                                        <input type="text" name="Amount_USD" required value=<?php echo $row['Amount_USD']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Amount_SYP:</label>
                                    <div class="controls">
                                        <input type="text" name="Amount_SYP" required value=<?php echo $row['Amount_SYP']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Amount_TRY:</label>
                                    <div class="controls">
                                        <input type="text" name="Amount_TRY" required value=<?php echo $row['Amount_TRY']; ?>>
                                    </div>
                                </div>
                                
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Office:</label>
                                    <div class="controls">
                                        <input type="text" name="Office" required value=<?php echo $row['Office']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Payment_number:</label>
                                    <div class="controls">
                                        <input type="text" name="Payment_number" required value=<?php echo $row['Payment_number']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Bank:</label>
                                    <div class="controls">
                                        <input type="text" name="Bank" required value=<?php echo $row['Bank']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Paid:</label>
                                    <div class="controls">
                                        <input type="text" name="paid" required value=<?php echo $row['paid']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Payment_date:</label>
                                    <div class="controls">
                                        <input type="text" name="Payment_date" required value=<?php echo $row['Payment_date']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">SYP_Ex_rate:</label>
                                    <div class="controls">
                                        <input type="text" name="SYP_Ex_rate" required value=<?php echo $row['SYP_Ex_rate']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Contract:</label>
                                    <div class="controls">
                                        <input type="text" name="Contract" required value=<?php echo $row['Contract']; ?>>
                                    </div>
                                </div>
        
								
								 <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success" style="margin-right: 65px;">Save</button>
										<a href="index.php" class="btn">Back</a>
                                    </div>
                                </div>
                            </form>
							
<?php
$id=$_REQUEST['id'];
if (isset($_POST['image'])) {

//image
							$image = $_FILES["image"] ["name"];
							$image_name= addslashes($_FILES['image']['name']);
							$size = $_FILES["image"] ["size"];

move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
$location=$_FILES["image"]["name"];

mysqli_query($mysqli," UPDATE student SET location='$location' WHERE student_id = '$id' ")or die($mysqli_error());
header('location:index.php');
}
?>
							
							<?php
							
							
							$id=$_REQUEST['id'];

$result = mysqli_query($mysqli,"SELECT * FROM student WHERE student_id = '$id'");
$test = mysqli_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
		        
                                    $code= $test['code'];
									$date= $test['date'];
									$Donor= $test['Donor'];
									$Department= $test['Department'];
									$name= $test['name'];
									
									$PR= $test['PR'];
									$details_English= $test['details_English'];
									$details_Arabic= $test['details_Arabic'];
									$Amount_USD= $test['Amount_USD'];
									$Amount_SYP= $test['Amount_SYP'];
									$Amount_TRY= $test['Amount_TRY'];
									$Office= $test['Office'];
									$Payment_number= $test['Payment_number'];
									$Bank= $test['Bank'];
									$paid= $test['paid'];
									$Payment_date= $test['Payment_date'];
									$SYP_Ex_rate= $test['SYP_Ex_rate'];
									$Contract= $test['Contract'];
				
				
                            
if (isset($_POST['update'])) {
                               
									$code_save= $_POST['code'];
									$date_save= $_POST['date'];
									$Donor_save= $_POST['Donor'];
									$Department_save= $_POST['Department'];
									$name_save= $_POST['name'];
									
									$PR_save= $_POST['PR'];
									$details_English_save= $_POST['details_English'];
									$details_Arabic_save= $_POST['details_Arabic'];
									$Amount_USD_save= $_POST['Amount_USD'];
									$Amount_SYP_save= $_POST['Amount_SYP'];
									$Amount_TRY_save= $_POST['Amount_TRY'];
									$Office_save= $_POST['Office'];
									$Payment_number_save= $_POST['Payment_number'];
									$Bank_save= $_POST['Bank'];
									$paid_save= $_POST['paid'];
									$Payment_date_save= $_POST['Payment_date'];
									$SYP_Ex_rate_save= $_POST['SYP_Ex_rate'];
									$Contract_save= $_POST['Contract'];
								
                                    mysqli_query($mysqli,"UPDATE student SET code = '$code_save'
                                    , date = '$date_save'
                                    , Donor ='$Donor_save'
                                    , Department = '$Department_save'
                                    , name ='$name_save'
                                    , PR = '$PR_save'
                                    , details_English = '$details_English_save'
                                    , details_Arabic ='$details_Arabic_save'
                                    , Amount_USD ='$Amount_USD_save'
                                    , Amount_SYP = '$Amount_SYP_save'
                                    , Amount_TRY ='$Amount_TRY_save'
                                    , Office = '$Office_save'
                                    , Payment_number ='$Payment_number_save'
                                    , Bank = '$Bank_save'
                                    , paid ='$paid_save'
                                    , Payment_date = '$Payment_date_save' 
                                    , SYP_Ex_rate = '$SYP_Ex_rate_save' 
                                    , Contract ='$Contract_save'
          
                                      WHERE student_id = '$id'") or die($mysqli_error()); 	
                                    header("Location:index.php");	

					
								}
								?>
								</center>
								</center>

								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
</body>
</html>
								