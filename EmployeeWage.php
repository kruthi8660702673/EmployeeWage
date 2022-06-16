<?php
echo "........Welcome to Employee Wage Computation......... \n";

function emp(){
    $is_present = 1;
    $is_absent = 0;
    $r= rand(0 , 1);
    $working_hour = 8;
    $per_hour = 20;
    $daily_wage =0;
    
    if($r == $is_present){
        $daily_wage = $working_hour * $per_hour;
        echo "Employee is present";
        echo " Dailywage = $daily_wage ";
    }else if($r == $is_absent){
        echo "Employee is absent";
        $daily_wage =0;
        echo " Dailywage = $daily_wage ";
    }
        }
emp();


?>