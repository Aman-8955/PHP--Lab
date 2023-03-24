<!-- 9. Write a PHP Program in which user can register itself using html form and also login and redirect on
dashboard page also used session in this. -->

<!-- ###regis.php###  -->
<?php
session_start();
isset($_SESSION['status']) ? header('location:dashboard.php') : "";
$conn = mysqli_connect('localhost', 'root', '', 'db') or die("Error");
if (isset($_POST['submit'])) {
    extract($_POST);
    $query = "INSERT INTO userdata (username,password,phone,address) VALUES ('$username','$password','$phone','$address')";
    if (mysqli_query($conn, $query)) {
        $_SESSION['status'] = true;
        header('location:dashboard.php');
    }
}

?>
<html>

<body>
    <h2>Registration</h2>
    <hr>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        Username: <input type="text" name="username"> <br> <br>
        Password: <input type="password" name="password"> <br> <br>
        Phone: <input type="number" name="phone"> <br> <br>
        Address: <input type="text" name="address"> <br> <br>
        <input type="submit" name="submit" value="Submit"><br><br>
        <a href="login.php">For login</a>
    </form>
</body>

</html>

<!-- ###login.php###  -->

<?php
session_start();
isset($_SESSION['status']) ? header('location:dashboard.php') : "";
$conn = mysqli_connect('localhost', 'root', '', 'db') or die("Error");
if (isset($_POST['submit'])) {
    extract($_POST);
    $query = "SELECT * FROM userdata WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['status'] = true;
        header('location:dashboard.php');
    }
}

?>
<html>

<body>
    <h2>Log in</h2>
    <hr>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        Username: <input type="text" name="username"> <br> <br>
        Password: <input type="password" name="password"> <br> <br>
        <input type="submit" name="submit" value="Submit"><br><br>
        <a href="regis.php">For registration</a>
    </form>
</body>

</html>

<!-- ###dashboard.php###  -->
<?php
session_start();
if (isset($_SESSION['status'])) {
    echo "<h2>Welcome to dashboard</h2>";
} else {
    header('location:regis.php');
}
?>