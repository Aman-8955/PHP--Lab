<!-- 7. Write a PHP Script for calculate electricity bill using html form accept units used in month
Conditions:
# For first 50 units – Rs. 3.50/unit
# For next 100 units – Rs. 4.00/unit
# For next 100 units – Rs. 5.20/unit
# For units above 250 – Rs. 6.50/unit -->
<html>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <label for="name">Enter your electricity units: </label><input type="number" name="number" required>
        <input type="submit" value="Submit"><br>
    </form>
        <h3>
        <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $num=$_POST['number'];
        if($num<=50){
            echo "Your bill is ".($num*3.5);
        }
        elseif($num<=150){
            echo "Your bill is ".($num*4);
        }
        elseif($num<=250){
            echo "Your bill is ".($num*5.2);
        }
        else{
            echo "Your bill is ".($num*6.5);
        }
    }
?>
        </h3>
</body>

</html>
