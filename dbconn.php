﻿<?
    $connect=mysql_connect( "localhost", "kimws", "4913") or  
        die( "SQL server에 연결할 수 없습니다."); 

    mysql_select_db("kimws_db",$connect);
?>
