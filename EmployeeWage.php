<?php
echo "........Welcome to Employee Wage Computation......... \n";

function emp(){
    $is_FullTime = 1;
    $is_PartTime = 2;
    $is_Absent = 0;
    $per_hour = 20;
    $working_hour = 0;
    $max_Working_Days = 20;
    $working_Day = 0;   
    $total_Working_Hours =0;
    $max_Working_Hours = 100;
    $montly_Wage = 0;
    while($working_Day <= $max_Working_Days && $working_hour <= $max_Working_Hours){
        $random = rand(0, 2);
        echo "days" . $working_Day ;
        switch ($random) {
            case $is_FullTime:
                $working_hour = 8;
                echo "Employee is fulltime \n";
                break;
            case $is_PartTime:
                $working_hour = 4;
                echo "Employee is parttime \n";
                break;
            case $is_Absent:
                echo "Employee is absent \n";
                $working_hour = 0;
                break;
        }
        $working_Day++;
        $total_Working_Hours =  $total_Working_Hours + $working_hour;
    }
    echo $total_Working_Hours;
    $montly_Wage = $total_Working_Hours * $per_hour;
        echo "Employee total monthly wage is : $" . $montly_Wage . "\n";
}  
emp();
?>