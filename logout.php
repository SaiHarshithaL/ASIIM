<?php
   session_start();
   session_unset();
   header("location: multilogin.html");
   session_destroy();
?>