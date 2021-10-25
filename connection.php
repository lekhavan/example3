<?php
    $conn = pg_connect("postgres://kqselcksvcbaus:51009daebdc3da54c36544119aec67369da0f223e08994148ec83e169da144d2@ec2-54-204-148-110.compute-1.amazonaws.com:5432/da7lpchmt8ro24");

    if(!$conn){
        die("Can not connect database");
    } 
?>