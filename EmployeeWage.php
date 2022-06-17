<?php
echo "........Welcome to Employee Wage Computation......... \n";

function emp()
{
    $is_present = 1;
    $is_parttime = 2;
    $r = rand(0, 2);
    $per_hour = 20;
    $daily_wage = 0;
    $working_hour = 0;

    if ($r == $is_present) {
        $working_hour = 8;
        echo "Employee is present \n";
        
    } else if ($r == $is_parttime) {
        $working_hour = 4;
        echo "Employee is parttime \n";
    } else {
        echo "Employee is absent \n";
        $daily_wage = 0;
    }

    $daily_wage = $working_hour * $per_hour;
    echo " Dailywage = $daily_wage ";
}
emp();
