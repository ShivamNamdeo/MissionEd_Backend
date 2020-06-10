<?php

    $con=mysqli_connect('localhost','root','','missioned');

    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
?>