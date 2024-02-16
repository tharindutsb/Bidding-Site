<?php

if(isset($_POST["id"])){
    
    $fname = $_POST["fn"];
    $lname = $_POST["ln"];
    $username =  $_POST["id"];
    $contact = $_POST["no"];
    $email = $_POST["em"];
    $password = $_POST["pw"];
    $cpw = $_POST["cpw"];

    if(empty($fname)){
        echo "1";
    }else if(empty($lname)){
        echo "2";
    }else if(empty($username)){
        echo "3";
    }else if(empty($contact)){
        echo "4";
    }else if(!preg_match("/[0-9]+/",$contact) || strlen($contact)!=10){
        echo "5";
    }else if(empty($email)){
        echo "6";
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "7";
    }else if(empty($password)){
        echo "8";
    }else if(!preg_match("/([a-zA-Z]+[0-9]+)|([0-9]+[a-zA-Z]+)/",$password)){
        echo "9";
    }else if($cpw != $password){
        echo "10";
    }else{
        $dbms =new mysqli("localhost","root","Hsbnb@ts123","bid","3306");//("host","username","password","db","port");
        $q="INSERT INTO `user`(`username`,`password`,`fname`,`lname`,`email`,`tel_no`) VALUES ('".$username."','".$password."','".$fname."','".$lname."','".$email."','".$contact."');";
        // echo $q;
        if( $dbms->query($q)){
        echo "row registerd";
        }else{
        echo "registration failed";
        }
        // $dbms->query($q);
        // echo $rs->num_rows;
        // if($rs->num_rows){
        //     echo "success";
        // }else{
        //     echo "Invalid username or password";
        // }
    }
     

}






















//      $fname = $_POST["fname"];
//      $lname = $_POST["lname"];
//      $username = $_POST["id"];
//      $no = $_POST["no"];
//      $password = $_POST["pw"];

//      $email = $_POST["email"];
//      $no = $_POST["no"];



// if(!isset($_POST["id"])){
// echo "1";
// }else if(empty($_POST["id"])){
//     echo "2";
// }else if(!isset($_POST["pw"])){
// echo "31";
// }else if(empty($_POST["id"])){
//     echo "4";
// }














// else if (!preg_match("/([a-zA-Z]+[0-9]+)|([0-9]+[a-aA-Z]+)/",$GET["pw"])){
//     echo "invalid pw"
// }























// if (isset($_POST))
//      $username = $_POST["id"];
//      $password = $_POST["pw"];
//      $fname = $_POST["fname"];
//      $lname = $_POST["lname"];
//      $email = $_POST["email"];
//      $no = $_POST["no"];


 
?>