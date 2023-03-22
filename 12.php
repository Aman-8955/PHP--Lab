<!-- 12. Write a PHP script in which accept students details for result( include subject marks and personal
details of student) submit and this details stored in college database and studetns_details table. -->
<?php
$conn = mysqli_connect("localhost", "root", "", "college");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['submit'])) {
    extract($_POST);
    $sql = "INSERT INTO students_details (roll,name, email, mobile, dsa, sad, net,ecom,java,php)
    VALUES ($roll,'$name','$email','$mobile',$dsa,$sad,$net,$ecom,$java,$php)";

    if (mysqli_query($conn, $sql)) {
        echo "Student details stored successfully";
    } else {
        echo "Error";
    }
}
?>
<html>

<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <label for="roll">Roll no:</label>
        <input type="number" name="roll" id="roll" required><br><br>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>

        <label for="mobile">Mobile:</label>
        <input type="number" name="mobile" id="mobile" required><br><br>

        <label for="dsa">Data Structure and Algorithm:</label>
        <input type="number" name="dsa" id="dsa" required><br><br>

        <label for="sad">System Design:</label>
        <input type="number" name="sad" id="sad" required><br><br>

        <label for="net">Networking:</label>
        <input type="number" name="net" id="net" required><br><br>
        <label for="ecom">E-commerce:</label>
        <input type="number" name="ecom" id="ecom" required><br><br>
        <label for="java">Java:</label>
        <input type="number" name="java" id="java" required><br><br>
        <label for="php">PHP:</label>
        <input type="number" name="php" id="php" required><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>