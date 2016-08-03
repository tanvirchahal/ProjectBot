<?php
    /*
     * Developed by Tanvir Chahal
     * 03-Aug-2016
     */

     //Initial Request
     $ch = curl_init();
     
     $headers = array('Authorization: Bearer YPLIY7UOHEJSJSMQMJBWIUIEGFQODIJ2');
     curl_setopt($ch, CURLOPT_URL, "https://api.wit.ai/message?v=20160803&q=hey%21");
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
         
         foreach($result['entities']['intent'] as $a)
         {
            echo $a['confidence'];
         }
         
     } else{
         echo curl_error($ch);
     }
     
?>