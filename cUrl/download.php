<?php
    /*
     * Developed by Tanvir Chahal
     * 01-Aug-2016
     */
     class Download{
         const URL_MAX_LENGTH = 2050;
     
         //Clean Url 
         protected function cleanUrl($url){
             if(isset($url)){
                 if(!empty($url)){
                     if(strlen($url)<self::URL_MAX_LENGTH){
                         return strip_tags($url);
                     }
                 }
             }
         }
         
         //is url
         protected function isUrl($url){
             $url = $this->cleanUrl($url);
             if(isset($url)){
                 if(filter_var($url, FILTER_VALIDATE_URL)){
                     return $url;
                 }
             }
         }
         
         //get Extension
         protected function returnExtension($url){
             if($this->isUrl($url)){
                 $end = end(preg_split("/[.]+/", $url));
                 if(isset($end)){
                     return $end;
                 }
             }
         }
         
         
         //Download File
         public function downloadFile($url){
             if($this->isUrl($url)){
                 $extension = $this->returnExtension($url);
                 if($extension){
                     
                     $ch = curl_init();
                     curl_setopt($ch, CURLOPT_URL, $url);
                     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                     $return = curl_exec($ch);
                     curl_close($ch);
                     
                     $destination = "pulls/file.$extension";
                     $file = fopen($destination,"w+");
                     fputs($file, $return);
                     if(fclose($file)){
                         echo "File Downloaded";
                     }
                 }
             }
         }
     }
     /* End of Class */
     
     $obj = new Download();
     if(isset($_POST['url'])){
         $url = $_POST['url'];
     }
     
?>

<!DOCTYPE HTML>
<head>
    
</head>
<body>
    <form action="download.php" method="POST">
        <input type="text" name="url" maxlength="2000">
        <button type="submit" name="pull_data">Download</button>
    </form>
</body>

<?php 
    if(isset($url)){
        $obj->downloadFile($url);
    }
?>