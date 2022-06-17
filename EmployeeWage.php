<?php
echo "........Welcome to Employee Wage Computation......... \n";

function emp()
{
    $is_FullTime = 1;
    $is_PartTime = 2;
    $is_Absent = 0;
    $random = rand(0, 2);
    $per_hour = 20;
    $daily_wage = 0;
    $working_hour = 0;

    switch ($random) {
        case $is_FullTime:
            $working_hour = 8;
            echo "Employee is present \n";
            break;
        case $is_PartTime:
            $working_hour = 4;
            echo "Employee is parttime \n";
            break;
        case $is_Absent:
            echo "Employee is absent \n";
            $daily_wage = 0;
            break;
    }

    $daily_wage = $working_hour * $per_hour;
    echo " Dailywage = $daily_wage ";
}
emp();
