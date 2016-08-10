<?php
    /*
     * Developed by Tanvir Chahal
     * 03-Aug-2016
     */
     
    require 'brain.php';
    $myBot = new Bot;
    $result = $myBot->sendRequest("wass");
    $myBot->translate($result);
    /*if($result){
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
             echo "woops didn't get you";
         }
     }*/ 
?>