	    <!-- Button to trigger modal -->
    <a class="btn btn-primary" href="#myModal" data-toggle="modal">اضافة فاتورة </a>
	<br>
	<br>
	<br>
    <!-- Modal -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">

    <h3 id="myModalLabel">Add</h3>
    </div>
    <div class="modal-body">
	
					<form method="post" action="add.php"  enctype="multipart/form-data">
					<table class="table1">
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Code</label></td>
							<td width="30"></td>
							<td><input type="text" name="code" placeholder="Code" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Date</label></td>
							<td width="30"></td>
							<td><input type="date" name="date" placeholder="Date" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Donor</label></td>
							<td width="30"></td>
							<td><br>
S1 20 3 OCHA FSL

<input type="checkbox" value="S1 20 3 OCHA FSL"  name="Donor1" ><br>
S1 20 4 OCHA SNFI

<input type="checkbox"  value="S1 20 4 OCHA SNFI" name="Donor2" ><br>
S1 20 8 ECHO

<input type="checkbox"  value="S1 20 8 ECHO"  name="Donor3" ><br>
Shared cost

<input type="checkbox" value="Shared cost"  name="Donor4" ><br></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Department</label></td>
							<td width="30"></td>
							<td>
							<select name="Department" placeholder="Department" required">
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

						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">name</label></td>
							<td width="30"></td>
							<td><input type="text" name="name" placeholder="name" required /></td>
						</tr>

						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">PR number</label></td>
							<td width="30"></td>
							<td><input type="text" name="PR" placeholder="PR" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Invoice details_English</label></td>
							<td width="30"></td>
							<td><input type="text" name="details_English" placeholder="details_English" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Invoice details_Arabic</label></td>
							<td width="30"></td>
							<td><input type="text" name="details_Arabic" placeholder="details_Arabic" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Amount_USD</label></td>
							<td width="30"></td>
							<td><input type="number" name="Amount_USD" placeholder="Amount_USD" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Amount_SYP</label></td>
							<td width="30"></td>
							<td><input type="number" name="Amount_SYP" placeholder="Amount_SYP" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Amount_TRY</label></td>
							<td width="30"></td>
							<td><input type="number" name="Amount_TRY" placeholder="Amount_TRY" required /></td>
						</tr>

						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Office</label></td>
							<td width="30"></td>
							<td>
							<select name="Office" placeholder="Office" required">
<option value="Syria - Idleb
">Syria - Idleb

<option value="Syria - Azaz
">Syria - Azaz

<option value="Turkey - Antakya
">Turkey - Antakya

<option value="Turkey - Mersin
">Turkey - Mersin

</select></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Payment_number</label></td>
							<td width="30"></td>
							<td><input type="text" name="Payment_number" placeholder="Payment_number" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Bank</label></td>
							<td width="30"></td>
							<td><input type="text" name="Bank" placeholder="Bank" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Paid</label></td>
							<td width="30"></td>
							<td><input type="text" name="paid" placeholder="Paid" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Payment date</label></td>
							<td width="30"></td>
							<td><input type="text" name="Payment_date" placeholder="Payment date" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">SYP_Ex_rate</label></td>
							<td width="30"></td>
							<td><input type="text" name="SYP_Ex_rate" placeholder="SYP_Ex_rate" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Contract</label></td>
							<td width="30"></td>
							<td><input type="text" name="Contract" placeholder="Contract" required /></td>
						</tr>
						


						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">documents_scan</label></td>
							<td width="30"></td>
							<td><input type="file" name="image" required /></td>
						</tr>
						
					</table>
					
	
    </div>
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
<button type="submit" name="Submit" class="btn btn-primary">Add</button>
    </div>
	

					</form>
    </div>			