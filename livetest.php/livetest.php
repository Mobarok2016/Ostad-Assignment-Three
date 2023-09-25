<?php 

// $student =[ 'name' => 'Alice', 'age' => 22, 'grade' => 'A'];

$check = array_key_exists('grade',$student);
if($check){
    echo "Array key exists";
}

else{
    echo "Array key doesnot exist";
}


// $numbers =[100, 200, 50, 40, 50];

// foreach($numbers as $value){
//     echo $value."\n";
// }

// $names =['Talha', 'Afnan', 'Mashrufa', 'Zia', 'Iqbal', 'Habib', 'Airin', 'Moni'];

function myfunc($name){
    return $name[0]=='M';
}

print_r(array_filter($names,'myfunc'));

$originalString=  'Hello, World!';

echo strrev($originalString);