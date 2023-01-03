<?php
    function conectar(){
        $host="localhost";
        $databaseName="porfolio";
        $password="";
        $user="root";
        
        $conection= mysqli_connect($host, $user, $password,$databaseName);
        return $conection;
    }

    function devolverNombres(){
        $sql= "select * from nombres;";
        $resulset= mysqli_query(conectar(),$sql);
        $registro= mysqli_fetch_assoc($resulset);
        return $registro;
    }

    function devolverContenido(){
        $sql= "select * from contenido;";
        $resulset= mysqli_query(conectar(),$sql);
        $registro= mysqli_fetch_assoc($resulset);
        return $registro;
    }
?>