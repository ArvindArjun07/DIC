<html>
    <head><title>User Log Out</title></head>
     <link rel="stylesheet" href="styles.css">
<body>
<?php

session_start();

if(isset($_SESSION['username'])){
    
    $_SESSION = array();

    if(isset($_COOKIE[session_name()])){
        
        setcookie(session_name() , '' , time()-3600);
    
    }

    session_destroy();
    
}

 $home_url='http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/dic.html';
   header('Location:'.$home_url);  
   
?>
</body></html>