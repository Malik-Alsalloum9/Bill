<?php
include_once("xlsxwriter.class.php");
$conn=mysqli_connect('localhost','root','','caaz');
$user_query = mysqli_query($conn,'select * from student');

$rows = array();

$header = array(
  ' student_id'=>'integer',
  'Timestamp'=>'string',
  'code'=>'string',
  'date'=>'string',
  'Donor'=>'string',
  'Department'=>'string',
  'location'=>'string',
  'name'=>'string',
  'PR'=>'string',
  'details_English'=>'string',
  'details_Arabic'=>'string',
  'Amount_USD'=>'string',
  'Amount_SYP'=>'string',
  'Amount_TRY'=>'string',
  'documents_scan'=>'string',
  'Office'=>'string',
  'Payment_number'=>'string',
  'Bank'=>'string',
  'paid'=>'string',
  'Payment_date'=>'string',
  'SYP_Ex_rate'=>'string',
  'Contract'=>'string',


);

while ($datafromsql = mysqli_fetch_assoc($user_query)) {
    $rows[] = $datafromsql;
}

$writer = new XLSXWriter();

$writer->writeSheetHeader('Sheet1', $header);
foreach($rows as $row)
	$writer->writeSheetRow('Sheet1', $row);

$writer->writeToFile('output.xlsx');

$file = "output.xlsx" ;
header('Content-Disposition: attachment; filename=' . $file );
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Length: ' . filesize($file));
header('Content-Transfer-Encoding: binary');
header('Cache-Control: must-revalidate');
header('Pragma: public');
readfile('output.xlsx');
unlink('output.xlsx');
?>