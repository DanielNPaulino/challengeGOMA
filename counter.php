<?php
function registCounter(){
    /* db connection */
    $connect = mysqli_connect("localhost", "root", "", "goma")or die("cannot connect");

    $registCounter = "SELECT * FROM cliente;";
    
    $resultCounter = mysqli_query($connect, $registCounter);
    $resultCheck = mysqli_num_rows($resultCounter);

    if ($resultCounter = mysqli_query($connect, $registCounter)){
        echo $resultCheck;
        return $resultCheck;
    }  
}
?>