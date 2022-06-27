<?php

    include "start-session.php";
    include "config.php";

    spl_autoload_register(function($className) {
        include "classes/$className.php";
    });

    $con = new Database;
?>