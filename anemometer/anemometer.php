<?php
    if(isset($_GET["id"]) && isset($_GET["speed"])) {
        $id = $_GET["id"];
        $speed = $_GET["speed"]; 
        
        $cloudURL = "https://script.google.com/macros/s/AKfycby1sbuBRsAHxiMYj-Xyj-JMjVnh98tCs2kmdqVj6QV4Brhzv4U/exec?";
        $cloudURL .= "id=" . $id;
        $cloudURL .= "&speed=" . $speed;
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $cloudURL);
        
        //return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

        // $output contains the output string 
        $output = curl_exec($ch); 

        // close curl resource to free up system resources 
        curl_close($ch);
        
        //echo $output;
    }
?>
