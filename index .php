<?php


header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");


if (isset($_GET['command'])) {
    
    if($_GET['command'] == "get_support_url"){
       
       header("Location: /mycookit/contact.php");
       die();
    }
    
} else {
    
}




?>

