<?php
	include('db.php');
							
							if (!isset($_FILES['image']['tmp_name'])) {
							echo "";
							}else{
							$file=$_FILES['image']['tmp_name'];
							$image = $_FILES["image"] ["name"];
							$image_name= addslashes($_FILES['image']['name']);
							$size = $_FILES["image"] ["size"];
							$error = $_FILES["image"] ["error"];

							if ($error > 0){
										die("Error uploading file! Code $error.");
									}else{
										if($size > 10000000) //conditions for the file
										{
										die("Format is not allowed or file size is too big!");
										}
										
									else
										{

											move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
											$location=$_FILES["image"]["name"];
											$code= $_POST['code'];
											$date= $_POST['date'];
											$Donor1= $_POST['Donor1'];
											$Donor2= $_POST['Donor2'];
											$Donor3= $_POST['Donor3'];
											$Donor4= $_POST['Donor4'];
											$Department= $_POST['Department'];
											$name= $_POST['name'];
											
											$PR= $_POST['PR'];
											$details_English= $_POST['details_English'];
											$details_Arabic= $_POST['details_Arabic'];
											$Amount_USD= $_POST['Amount_USD'];
											$Amount_SYP= $_POST['Amount_SYP'];
											$Amount_TRY= $_POST['Amount_TRY'];
											$Office= $_POST['Office'];

											$Timestamp=date("YmdHis").'.'.$as; 
		
		
								mysqli_query($mysqli,"insert into student (code,date,Donor1,Donor2,Donor3,Donor4,Department,name,location
								,PR,details_English,details_Arabic,Amount_USD,Amount_SYP,Amount_TRY
								,Office) 
								values('$code','$date','$Donor1','$Donor2','$Donor3','$Donor4','$Department','$name','$location'
								,'$PR','$details_English','$details_Arabic','$Amount_USD','$Amount_SYP','$Amount_TRY'
								,'$Office')")or die($mysqli_error());
									
									}
										header('location:../a_employees.php');
									}
							}
?>								