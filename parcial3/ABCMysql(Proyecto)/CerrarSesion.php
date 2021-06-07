<?php

    //Aquí iniciarmos la sesion
    session_start();
    $_SESSION= array();
    session_destroy();
    echo "<script>
    window.location= 'index.php'
    </script>";
?>