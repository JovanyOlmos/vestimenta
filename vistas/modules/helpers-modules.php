<?php
    session_start();
    if(isset($_POST['close']))
    {
        session_destroy();
        echo true;
    }
?>