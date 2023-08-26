<?php

    function connection(){
        $host = "localhost: 8112";
        $user = "root";
        $pass = "";

        $db ="dbnautico";
        $connect = mysqli_connect($host, $user, $pass);

        mysqli_select_db($connect, $db);

        return $connect;

    }
?>