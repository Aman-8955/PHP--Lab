<!-- 1. Write a PHP Script in which accept name of user and gender using html form and print “Hello Mr./Ms.
_______”according to gender prefix ( Mr. / Ms. ) -->
<html>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <label for="name">Name: </label><input type="text" name="name" required> <br>
        <label>Gender: </label>
        <input type="radio" name="gender" value="male" id="gender_male">
        <label for="gender_male">Male</label> <br>
        <input type="radio" name="gender" value="female" id="gender_female" style="margin-left:61px">
        <label for="gender_female">Female</label><br>
        <input type="submit" value="Submit"><br>
    </form>
    <h3>
        <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name=$_POST['name'];$gender=$_POST['gender'];
        if($gender=="male"){
            echo "Hello Mr. ".$name;
        }
        elseif($gender=="female"){
            echo "Hello Ms. ".$name;
        }
    }
?>
        </h3>
</body>

</html>