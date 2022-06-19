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
    while ($working_Day <= $max_Working_Days) { 
        $random = rand(0, 2);
        echo "Day " . $working_Day . "\n";

    switch ($random) {
        case 1:
            $working_hour = 8;
            echo "Employee is present \n";
            break;
        case 2:
            $working_hour = 4;
            echo "Employee is parttime \n";
            break;
        case 0:
            echo "Employee is absent \n";
            $working_hour = 0;
            break;
    }
    $working_Day++;
    $total_Working_Hours = $total_Working_Hours + $working_hour;
}
    $montly_wage = $total_Working_Hours * $per_hour;
    echo " Monthlywage = $montly_wage ";
}
emp();
