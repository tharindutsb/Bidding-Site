<?php

     $username = $_GET["id"];
     $password = $_GET["pw"];

     $dbms =new mysqli("localhost","root","Hsbnb@ts123","bid","3306");//("host","username","password","db","port");
     $q="SELECT * FROM `user` WHERE `username` = '".$username."' AND `password` = '".$password."'";


     $rs=$dbms->query($q);
    //  echo $rs->num_rows;
    if($rs->num_rows){
        echo "success";
    }else{
        echo "Invalid username or password";
    }
 
?>