<?php
/*
    //host จริง
    $host='localhost';
    $user='planetco_64309010041';
    $password='64309010041';
    $dbname='planetco_64309010041';
*/
    //host ของ xampp
    $host='localhost';
    $user='root';
    $password='';
    $dbname='webit41';


    $con=mysqli_connect($host,$user,$password,$dbname);
    $con->query('SET NAME UTF8');
?>