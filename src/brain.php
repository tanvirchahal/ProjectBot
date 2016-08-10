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
         } 
     }
     
     public function translate($json){
         $msgId;$text;$confidence;$intent;
         print_r($json);
         echo "<br/>";
         if($json){
             $result = json_decode($json,true);
             
             $msgId = $result['msg_id'];
             $text = $result['_text'];
             
             if(!empty($result['entities'])){
                 foreach($result['entities']['intent'] as $a){
                     $confidence = $a['confidence'];
                     $intent = $a['value'];
                 }
                 $this->interpret($intent);
             }
             else{
                 $this->interpret("err01");
             }
         } 
         //If There is no JSON
         else{
             
         }
     }
     
     public function interpret($intent){
         switch($intent){
             case "sayHello":
                 $text = "Hey, How are you?";
                 $this->showMessage($text);
                 break;
             
             default:
                 $this->showMessage("err01");
                 break;
         }
     }
     
     public function showMessage($text){
         if($text!="err01"){
             echo $text;
         } else{
             echo "Couldn't Understand That";
         }
     }
 }
?>