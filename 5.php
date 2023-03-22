<!-- 5. Write a PHP Script in which user provide date of birth and his/her name using html form and it provide
that user born in century, leap year and also provide user age with his/her name -->
<html>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        <br><br>
        <label for="dob">Date of Birth:</label>
        <input type="date" name="dob" id="dob">
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $dob = $_POST['dob'];
        $birth_year = date("Y", strtotime($dob));
        $century = ceil($birth_year / 100);
        $is_leap_year = (($birth_year % 4 == 0) && ($birth_year % 100 != 0)) || ($birth_year % 400 == 0);
        $age = date_diff(date_create($dob), date_create('today'))->y;

        echo "<h2>$name's Information:</h2>";
        echo "<p>Born in the $century century</p>";
        echo "<p>" . ($is_leap_year ? "$birth_year was a leap year" : "$birth_year was not a leap year") . "</p>";
        echo "<p>Current age is $age years old</p>";
    }
    ?>
</body>

</html>