<?php
    /*
     * Developed by Tanvir Chahal
     * 03-Aug-2016
     */
    if(isset($_POST['_text'])){
        require 'brain.php';
        $myBot = new Bot;
        $result = $myBot->sendRequest($_POST['_text']);
        $myBot->translate($result,false);    
    } 
     
?>
<!DOCTYPE HTML>
<head>
    <title>Project Bot</title>
</head>

<body>
    <form action="" method="POST">
        <input type="text" required="required" name="_text">
        
        <button type="submit" name="submitbtn">Submit</button>
    </form>
</body>
</html>