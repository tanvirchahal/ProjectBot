<?php
    
 class Bot {
     
     var $message = ""; 
     
     public function sendRequest($m){
         $this->message = $m;
         
         $ch = curl_init();
         $header = array('Authorization: Bearer YPLIY7UOHEJSJSMQMJBWIUIEGFQODIJ2');
         curl_setopt($ch, CURLOPT_URL, "https://api.wit.ai/message?v=20160803&q=$m");
         curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
         curl_setopt($ch, CURLOPT_POST, true);
         curl_setopt($ch ,CURLOPT_SSL_VERIFYPEER, false);
         curl_setopt($ch ,CURLOPT_RETURNTRANSFER, true);
         
         $result = curl_exec($ch);
         curl_close($ch);
         
         if($result){
            return $result;
         } else{
            return "Sorry Couldn't Get that";
         }
     }
 }
?>