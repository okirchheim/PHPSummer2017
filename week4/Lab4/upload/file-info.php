<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        /* ****************UPDATE FILE**************** */        
        
        $uploadfile = filter_input(INPUT_GET, $fileName);      
        
        $file = '.'.DIRECTORY_SEPARATOR.'uploads'.DIRECTORY_SEPARATOR.$uploadfile;    

        
        //http://php.net/manual/en/fileinfo.constants.php
        $finfo = new finfo(FILEINFO_MIME_TYPE);
        $type = $finfo->file($file);
        
        var_dump($type);
        
        //http://php.net/manual/en/function.filesize.php
        var_dump(filesize($file));
        
        /*
         * To delete a file use unlink
         */
        
        
        // http://php.net/manual/en/class.splfileinfo.php
        $finfo = new SplFileInfo($file);
        
        if ( $finfo->isFile() ) {
            var_dump($finfo->getRealPath());
            var_dump($finfo->getFilename());
            var_dump(date("l F j, Y, g:i a", $finfo->getMTime()));
            var_dump($finfo->getSize());
            var_dump($finfo->getPathname());
            
        }
        
        
        ?>
    </body>
</html>
