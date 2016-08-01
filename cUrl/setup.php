<?php
    /*
     * Developed by Tanvir Chahal
     * 01-Aug-2016
     */

     $ch = curl_init();
     
     curl_setopt($ch, CURLOPT_URL, "http://motoweb.org");
     
     curl_exec($ch);
     
     curl_close($ch);
?>