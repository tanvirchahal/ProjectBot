<?php
    /*
     * Developed by Tanvir Chahal
     * 01-Aug-2016
     */
     $ch = curl_init();
     $header = array("Authorization: Bearer YPLIY7UOHEJSJSMQMJBWIUIEGFQODIJ2");
     
     curl_setopt($ch, CURLOPT_URL, "https://api.wit.ai/message?v=20160801&q=Hello");
     curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
     curl_setopt($ch, CURLOPT_POST, true);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
     
     $result = curl_exec($ch);
     
     if($result == true){
         print_r($result);
     }else{
         echo "fail";
         echo curl_error($ch);
     }
     curl_close($ch);
?>