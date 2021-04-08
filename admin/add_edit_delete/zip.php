<?php 
// Create ZIP file

// Enter the name of directory 
$pathdir = "upload/"; 

// Enter the name to creating zipped directory 
$zipcreated = "myzipfile.zip"; 

// Create new zip class 
$zip = new ZipArchive; 

if($zip -> open($zipcreated, ZipArchive::CREATE ) === TRUE) { 
	
	// Store the path into the variable 
	$dir = opendir($pathdir); 
	
	while($file = readdir($dir)) { 
		if(is_file($pathdir.$file)) { 
			$zip -> addFile($pathdir.$file, $file); 
		} 
	} 
	$zip ->close(); 
} 


// Download Created Zip file
if(isset($_POST['download'])){
 
  $filename = "myzipfile.zip";

  if (file_exists($filename)) {
     header('Content-Type: application/zip');
     header('Content-Disposition: attachment; filename="'.basename($filename).'"');
     header('Content-Length: ' . filesize($filename));

     flush();
     readfile($filename);
     // delete file
     unlink($filename);
 
   }
}
header('location:index.php');

?>