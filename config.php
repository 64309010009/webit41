<?php

    //host จริง
   /* $host='localhost';
    $user='planetco_64309010009';
    $password='64309010009';
    $dbname='planetco_64309010009';

    $con=mysqli_connect('localhost','planetco_64309010009','64309010009','planetco_64309010009');
    $con->query('SET NAMES UTF8');
*/
    
    //host ของ xampp
    $host='localhost';
    $user='root';
    $password='';
    $dbname='webit41';
    


    $con=mysqli_connect($host,$user,$password,$dbname);
    $con->query('SET NAMES UTF8');
    
    
?>