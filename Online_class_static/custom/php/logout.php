<?php
if ($_POST['id'] == "logout" ){
    session_start();
    session_destroy();
    echo 1;
//    header("Location: ../../index.php");
}