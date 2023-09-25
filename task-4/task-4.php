<?php 

$studentGrades=[
    "student1"=>["Math"=>82,"English"=>88,"Science"=>75],
    "student2"=>["Math"=>83,"English"=>86,"Science"=>79],
    "student3"=>["Math"=>88,"English"=>78,"Science"=>85]
];

function avgGrade($studentGrades)
{
    foreach ($studentGrades as $student => $grades) {
        $total = array_sum($grades); 
        $count = count($grades); 
        $average = $total / $count; 

        echo " {$student}'s Average Grade: ".round($average,2)."\n";
    }
}

avgGrade($studentGrades);


