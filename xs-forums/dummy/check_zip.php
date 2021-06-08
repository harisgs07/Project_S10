



<?php 
// Create ZIP file
if(isset($_POST['create'])){
  $zip = new ZipArchive();
  $filename = "./myzipfile.zip";

  if ($zip->open($filename, ZipArchive::CREATE)!==TRUE) {
    exit("cannot open <$filename>\n");
  }

  $dir = 'Uploads/asa/';

  // Create zip
  createZip($zip,$dir);

  $zip->close();
}

// Create zip
function createZip($zip,$dir){
  if (is_dir($dir)){

    if ($dh = opendir($dir)){
       while (($file = readdir($dh)) !== false){
 
         // If file
         if (is_file($dir.$file)) {
            if($file != '' && $file != '.' && $file != '..'){
 
               $zip->addFile($dir.$file);
            }
         }else{
            // If directory
            if(is_dir($dir.$file) ){

              if($file != '' && $file != '.' && $file != '..'){

                // Add empty directory
                $zip->addEmptyDir($dir.$file);

                $folder = $dir.$file.'/';
 
                // Read data of the folder
                createZip($zip,$folder);
              }
            }
 
         }
 
       }
       closedir($dh);
     }
  }
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
?>



<html>
<head>
<style>
.container{
   margin: 0 auto;
   width: 50%;
   text-align: center;
}

input[type=submit]{
   border: 0px;
   padding: 7px 15px;
   font-size: 16px;
   background-color: #00a1a1;
   color: white;
   font-weight: bold;
}
</style>
</head>
<body>
<div class='container'>
 <h2>Create and Download Zip file using PHP</h2>
 <form method='post' action='check_zip.php'>
   <input type='submit' name='create' value='Create Zip' />&nbsp;
   <input type='submit' name='download' value='Download' />
 </form>
</div>

</body>
</html>