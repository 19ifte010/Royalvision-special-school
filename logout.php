<?php

@include 'db.php';

session_start();
session_unset();
session_destroy();

if(!headers_sent()){
    header('location:index.php');
}else{
    echo '<script type="text/javascript">windows.location.href="index.php"</script>';
}

?>