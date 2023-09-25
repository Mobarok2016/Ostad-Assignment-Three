<?php 


function generatePassword($length){
    $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()_+";
    
    $password="";
    for($i=0;$i<$length;$i++){
        $password .= $str[rand(0, strlen($str)  -1)];

    }
    return $password;
}

echo generatePassword(12);