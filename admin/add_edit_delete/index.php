<?php include('db.php'); ?>
<?php include('header.php'); ?>
<body>


    <div class="row-fluid">
        <div class="span12">


         

            <div class="container">

			<div > <a href="../dashboard.php"><div > <button class="btn btn-primary" id="qq" style=" border:#333333 ; color: #ffffff;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	background-image: linear-gradient(to bottom, #7c00cc, #8b037f);

">العودة الى القائة الرئيسية</button></a></div>




<div class='container'>
 <h1></h1>
 <form method='post' action='zip.php'>
   <input style="    border-radius: 10px; border:#fff ; color: #ffffff;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	background-image: linear-gradient(to bottom,#ee5f5b, #b94a48);

" type='submit' name='create' value='تجميع الصور' />&nbsp;
   <input style="    border-radius: 10px; border:#fff ; color: #ffffff;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	background-image: linear-gradient(to bottom,#0088cc, #5bc0de);

" type='submit' name='download' value='تحميل ملف الصور' />


 </form>
</div>
	<br>
	<div>
	<a href="sql_to_xlxs/"><input  style="    border-radius: 10px; border:#fff ; color: #ffffff;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	background-image: linear-gradient(to bottom, #00cc0e, #4f8b03);

" type='submit'  value='تحميل اكسل ' /></a>




			<br><br>
<?php include('modal_add.php'); ?>

                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><i class="icon-user icon-large"></i>&nbsp;Data Table</strong>
                            </div>
                            <thead>
                                <tr>
								<th style="text-align:center;" >ID</th>
								<th style="text-align:center;" >Image</th>

                                    <th style="text-align:center;">code</th>
									<th style="text-align:center;">Date</th>
                                    <th style="text-align:center;">Donor</th>
                                    <th style="text-align:center;">Department</th>
                                    <th style="text-align:center;">Name</th>
                                    <th style="text-align:center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
						
								<?php
								
								$result= mysqli_query($mysqli,"select * from student order by student_id ASC" ) or die ($mysqli_error());
								while ($row= mysqli_fetch_array ($result) ){
								$id=$row['student_id'];
								?>
								<tr>

								<td style="text-align:center; word-break:break-all; width:300px;     vertical-align: middle;
"> <?php echo $row ['student_id']; ?></td>

								<td style="text-align:center; margin-top:10px; word-break:break-all; width:450px; line-height:100px;"><a href="#<?php  echo $id;?>" data-toggle="modal">
									<?php if($row['location'] != ""): ?>
									<img src="upload/<?php echo $row['location']; ?>" width="100px" height="100px" style="border:1px solid #333333;">
									<?php else: ?>
									<img src="images/default.png" width="100px" height="100px" style="border:1px solid #333333;">
									<?php endif; ?>
									</a>
								</td>
								
								<td style="text-align:center; word-break:break-all; width:300px;     vertical-align: middle;
"> <?php echo $row ['code'] ; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;     vertical-align: middle;
"> <?php echo $row ['date']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;     vertical-align: middle;
"> <?php echo $row ['Donor1'].$row ['Donor2'].$row ['Donor3'].$row ['Donor4']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;     vertical-align: middle;
"> <?php echo $row ['Department']; ?></td>
								<td style="text-align:center; word-break:break-all; width:450px;     vertical-align: middle;
"> <?php echo $row ['name']; ?></td>
								<td style="text-align:center; width:350px;     vertical-align: middle;
">
									<a href="edit.php<?php echo '?id='.$id; ?>" class="btn btn-info">Edit</a>
									 <a href="#delete<?php echo $id;?>"  data-toggle="modal"  class="btn btn-danger" >Delete </a>
								</td>
									
										<!-- Modal -->
								<div id="delete<?php  echo $id;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-header">
								<h3 id="myModalLabel">Delete</h3>
								</div>
								<div class="modal-body">
								<p><div class="alert alert-danger">هل انت متأكد من الحذف؟</p>
								</div>
								<hr>
								<div class="modal-footer">
								<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true">No</button>
								<a href="delete.php<?php echo '?student_id='.$id; ?>" class="btn btn-danger">Yes</a>
								</div>
								</div>
								</div>
								</tr>

								<!-- Modal Bigger Image -->
								<div id="<?php  echo $id;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-header">

								<h3 id="myModalLabel"><b><?php echo $row['fname']." ".$row['lname']; ?></b></h3>
								</div>
								<div class="modal-body">
								<?php if($row['location'] != ""): ?>
								<img src="upload/<?php echo $row['location']; ?>" style="width:390px; border-radius:9px; border:5px solid #d0d0d0; margin-left: 63px; height:387px;">
								<?php else: ?>
								<img src="images/default.png" style="width:390px; border-radius:9px; border:5px solid #d0d0d0; margin-left: 63px; height:387px;">
								<?php endif; ?>
								</div>
								<div class="modal-footer">
								<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
								</div>
								</div>

								<?php } ?>
                            </tbody>
                        </table>


          
        </div>
        </div>
        </div>
    </div>


</body>
</html>


