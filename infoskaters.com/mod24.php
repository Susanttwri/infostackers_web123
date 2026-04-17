<?php 
//Recently modified files list
//Usage:
//file_mod_info.php?hrs=x
//hrs - files modifed in last x hours 
//'cache' folder is excluded
error_reporting(E_ERROR);

$hrs = 24;
$dir_name='../public_html'; // path and folder name ( eg : myfolder , ../../myfolder)
$file_to_avoid=array('.', '..','cache'); // file name or folder name 
$notify_email='santosh@infoskaters.com';
$site="Infoskaters.com";


function file_recurse_directory($dir,$nomask) {
  global $cutoff, $cnt;
  static $modified_files='';
  
  if (is_dir($dir) && $handle = opendir($dir)) {
	  
    while (false !== ($file = readdir($handle))) {
		
      //if (!in_array($file, $nomask) && $file[0] != '.') {
    if (!in_array($file, $nomask)) {
        if (is_dir("$dir/$file")) {
			
          // Recurse into subdirectories
          file_recurse_directory("$dir/$file", $nomask);
        }
        else {
			
          $filename = "$dir/$file";
		  
          //echo "<br />Checking " . $filename;
          $mtime = filemtime($filename);
          $diff = $mtime - $cutoff; 
            if ($mtime > $cutoff) {
              $cnt++;
			  $modified_files .="<br> \n" .$cnt.". ". $filename . " ----- Modified At: " . date("F d Y H:i:s",$mtime);
            }
        }
      }
    }

    closedir($handle);
  }
  return $modified_files;
}

$cnt=0;
$cutoff = time() - ($hrs * 60 * 60);
$files_edited = file_recurse_directory(realpath($dir_name),$file_to_avoid);


echo $message="
<table>
<tr><th><b>Modified files</b> </th></tr>
<tr><td> After : ".date("Y-m-d H:i:s",$cutoff)." </td></tr>
<tr><td> Before : ".date("Y-m-d H:i:s")." </td></tr>
<tr><td>".$files_edited."</td></tr>
<tr><td>Total modified files : ". $cnt . "</td></tr>
</table>
";

if($notify_email){
	$subject="File Modification Report: $site";
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";	
	mail($notify_email, $subject, $message, $headers);
}

?>
