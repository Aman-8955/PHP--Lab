<!-- 8. Write a PHP script for perform Associative multidimensional array for store salary of employee in a
company in which retrieve salary for any specific person from specific department ( Ex.
$Sal[‘Teaching’][‘IT’][‘Amit’]) -->
<?php
$salaries = array(
    "Teaching" => array(
        "IT" => array(
            "Amit" => 50000,
            "Rohit" => 60000,
            "Ravi" => 55000
        )
    ),
    "Engineering" => array(
        "Mechanical" => array(
            "Vikas" => 65000,
            "Ankit" => 70000,
            "Sandeep" => 72000
        ),
        "Electrical" => array(
            "Rajesh" => 58000,
            "Rohit" => 60000,
            "Anand" => 55000
        )
    )
);
$salary = $salaries["Teaching"]["IT"]["Amit"];
echo "Amit's salary in the IT department of the Teaching division is: " . $salary;
?>