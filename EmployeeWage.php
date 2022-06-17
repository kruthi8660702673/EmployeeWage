<?php
echo "........Welcome to Employee Wage Computation......... \n";

function emp(){
    $is_present = 1;
    $is_parttime =2;
    $r= rand(0 , 2);
    $working_hour = 8;
    $per_hour = 20;
    $parttime_hour = 4;
    $daily_wage =0;
    
    if($r == $is_present){
        $daily_wage = $working_hour * $per_hour;
        echo "Employee is present \n";
        echo " Dailywage = $daily_wage ";
    }else if($r == $is_parttime){
        echo "Employee is parttime \n";
        $daily_wage = $parttime_hour * $per_hour;
        echo " Dailywage = $daily_wage ";
    }else{
        echo "Employee is absent";
        $daily_wage = 0;
    }

        }
emp();


?>