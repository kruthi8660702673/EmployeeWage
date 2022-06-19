<?php
echo "........Welcome to Employee Wage Computation......... \n";
class EmployeeWage{
    const is_FullTime = 1;
    const is_PartTime = 2;
    const per_hour = 20;
    const max_Working_Days = 20;
    const max_Working_Hours = 100;

    const is_Absent = 0;
    public $working_hour = 0;
    public $working_Day = 0;   
    public $total_Working_Hours =0;
    public $montly_Wage = 0;
    function emp(){
   
        while($this->working_Day <= EmployeeWage :: max_Working_Days && $this->working_hour <= EmployeeWage :: max_Working_Hours){
            $random = rand(0, 2);
            echo "days" . $this->working_Day ;
            switch ($random) {
                case 1:
                    $working_hour = 8;
                    echo "Employee is fulltime \n";
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
            $this->working_Day++;
            $this->total_Working_Hours =  $this->total_Working_Hours + $working_hour;
        }
        echo $this->total_Working_Hours ."\n";
        $this->montly_Wage = $this->total_Working_Hours * EmployeeWage::per_hour;
            echo "Employee total monthly wage is : $" . $this->montly_Wage . "\n";
    }  
}
$employee = new EmployeeWage();
$employee ->emp();
?>