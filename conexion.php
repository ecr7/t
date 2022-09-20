<?php

    class conexion 
    {
        function Conectar()
        {
          $mysqli = new mysqli
          ("btjbdp4qvnuz4asgneea-mysql.services.clever-cloud.com",
          "uisu8bywnf83us4n",
          "xxIUOTgnrg5tbPHKv8wU",
          "btjbdp4qvnuz4asgneea");
          
          if($mysqli->connect_errno)
          {
            echo "Error Al conectar a la Base de datos   ".$mysqli->connect_errno;
          } 
          return $mysqli; 
        }
    }
