<!-- 4. Write a PHP script Which accept string from user and provide reverse of provided string using create a
user defined function. -->
<html>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <label for="name">Enter your string: </label><input type="text" name="str" required>
        <input type="submit" value="Submit"><br>
    </form>
        <h3>
        <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $str=$_POST['str'];
        function reverseOfString($str){
            $len=strlen($str);
            for($i=0;$i<(int)($len/2);$i++){
                $temp=$str[$i];
                $str[$i]=$str[$len-1-$i];
                $str[$len-1-$i]=$temp;
            }
            return $str;
        }
        echo "Reverse is ".reverseOfString($str);
    }
?>
        </h3>
</body>

</html>