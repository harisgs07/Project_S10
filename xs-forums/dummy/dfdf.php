<?php 
// Create ZIP file
    //archive
    echo "<script>alert('files_name');</script>";
    $archive_file = 'myzipfile.zip';
    //download
    $file_path =$_SERVER['DOCUMENT_ROOT'].'/Uploads/asa/';
    
    function zipdownload($files_name, $archive_file,$file_path)
    {
        $zip = new ZipArchive();
        if ($zip->open($archive_file, ZipArchive::CREATE)!==TRUE) {
            exit("cannot open <$archive_file>\n");
          }
          foreach ($files_name as $files)
          {
            $zip->addFile($file_path.$files,$files);
          }
        $zip->close();
        header("Content-Type: application/zip");
        header("Content-Disposition: attachment; filename=$archive_file");
        header("Content-Length: " . filesize($archive_file));
        header("Pragma:no-cache");
        header("Expires:0");
        flush();
        readfile($archive_file);
            // delete file
        unlink($archive_file);

    }
    zipdownload( $files_name, $archive_file,$file_path);

  
?>