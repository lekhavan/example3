<?php
    $conn = pg_connect("postgres://cjltmuraqwmwns:3f6f4747c60e84cedd897375b76942235894bfa34136d489fb78e68e3121ea50@ec2-3-222-235-188.compute-1.amazonaws.com:5432/d48s61rqnmsirk");

    if(!$conn){
        die("Can not connect database");
    } 
?>