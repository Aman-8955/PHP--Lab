<!-- 14. Write a PHP Script that provide name,mobile,joindate,salary,Department_name,city, of teachers who is
related to selected department . department Select by html form and  after the details will be printed
as table. -->
<?php
$val = 0;
$conn = mysqli_connect("localhost", "root", "", "college");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['submit'])) {
    $tid = $_POST['tid'];
    $department = $_POST['department'];
    $sql = "SELECT * FROM teachers_details WHERE tid=$tid AND department='$department'";
    $data = mysqli_fetch_array(mysqli_query($conn, $sql));
    $val = 1;
}
?>
<html>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        Teacher id: <input type="number" name="tid"> <br> <br>
        Department name: <input type="text" name="department"><br><br>
        <input type="submit" name="submit" value="Submit">
    </form> <br> <br> <br>
    <div>
        <table border="1">
            <?php if ($val) {
                if ($data) { ?>
                    <tr>
                        <th>Id no</th>
                        <td><?php echo $data['tid'] ?></td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td><?php echo $data['name'] ?></td>
                    </tr>
                    <tr>
                        <th>Mobile</th>
                        <td><?php echo $data['mobile'] ?></td>
                    </tr>
                    <tr>
                        <th>Joining data</th>
                        <td><?php echo $data['joindate'] ?></td>
                    </tr>
                    <tr>
                        <th>Salary</th>
                        <td><?php echo $data['salary'] ?></td>
                    </tr>
                    <tr>
                        <th>Department</th>
                        <td><?php echo $data['department'] ?></td>
                    </tr>
                    <tr>
                        <th>City</th>
                        <td><?php echo $data['city'] ?></td>
                    </tr>
        </table>
    <?php } else {
    ?>
        <h3>Data not found</h3>
<?php }
            }
?>
    </div>
</body>

</html>