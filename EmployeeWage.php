<?php
echo "........Welcome to Employee Wage Computation......... \n";

function emp(){
    $is_present = 1;
    $is_absent = 0;
    $r= rand(0 , 1);
    
        if($r == $is_present){
            echo "Employee is present";
        }else if($r == $is_absent){
            echo "Employee is absent";
          
        }
        }
emp();


?>