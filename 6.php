<!-- 6. Write a PHP Script for calculator That accepts two number from user choice and also select numeric
operation on two number using html form after submit number it provide suitable result according
selected operation. -->
<html>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <label for="num1">First Number: </label><input type="number" name="num1" required> &nbsp;&nbsp;
        <label for="operator">Operator: </label><input type="text" name="operator" required> &nbsp;&nbsp;
        <label for="num2">Second Number: </label><input type="number" name="num2" required> <br>
        <input type="submit" value="Submit"><br>
    </form>
    <h3>
        <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $num1=$_POST['num1'];$operator=$_POST['operator'];$num2=$_POST['num2'];
        $str=(string)$num1.$operator.(string)$num2;
        $output="<script>let output=eval('".$str."');document.write(output)</script>";
        echo "Output: ".$output;
    }
?>
    </h3>
</body>

</html>