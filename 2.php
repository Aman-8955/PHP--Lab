<!-- 2. Write a PHP Script which user input number using html form and print table of given number. -->
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
        for($i=1;$i<=10;$i++){
            echo $num." X ".$i." = ".($num*$i)."<br>";
        }
        
    }
?>
        </h3>
</body>

</html>