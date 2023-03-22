<!-- 3. Write a PHP Script which user input number using html form and provide factorial of given number. -->
<html>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <label for="name">Enter your number: </label><input type="number" name="number" required>
        <input type="submit" value="Submit"><br>
    </form>
        <h3>
        <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $num=$_POST['number'];
        function fact($num){
            if($num==1||$num==0){
                return 1;
            }
            else{
                return $num*fact($num-1);
            }
        }
        echo "Factorial of ".$num." is ".fact($num);
    }
?>
        </h3>
</body>

</html>