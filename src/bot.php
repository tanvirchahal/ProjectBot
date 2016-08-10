<?php
    /*
     * Developed by Tanvir Chahal
     * 03-Aug-2016
     */
     
    require 'brain.php';
    $myBot = new Bot;
    $requestResult = $myBot->sendRequest("Hey");
    print_r($requestResult);
    
     //Initial Request
     /*$ch = curl_init();
     
     $message = "hi";
     $message = urlencode($message);
     $headers = array('Authorization: Bearer YPLIY7UOHEJSJSMQMJBWIUIEGFQODIJ2');
     curl_setopt($ch, CURLOPT_URL, "https://api.wit.ai/message?v=20160803&q=$message");
     curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
     curl_setopt($ch, CURLOPT_POST, true);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
     
     $result = curl_exec($ch);
     
     curl_close($ch);
     
     if($result){
         print_r($result);
         $result = json_decode($result, true);
         
         echo "<br/>";
         echo $result['msg_id']."<br/>";
         echo $result['_text'];
         
         if(!empty($result['entities'])){
            
            foreach($result['entities']['intent'] as $a)
            {
               echo $a['value'];
            }
         }
         
         else{
             echo "woops didn't get you man";
         }
         
     } else{
         echo curl_error($ch);
     } */
     
?>