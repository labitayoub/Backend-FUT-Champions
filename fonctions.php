<?php

include('./connection.php');

function emp_insert($conn, $values = array()) {

    $value = "'".implode("','",$values)."'";
    $query = "INSERT INTO players VALUES ('',".$value.")";
    die($query);
    if(mysqli_query($conn,$query)){
        return true;
    
    }else{
        return false;
    }
}

?> 
