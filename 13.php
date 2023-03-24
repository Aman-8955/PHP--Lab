<!-- 13. Write a PHP Script that provide name,mobile,coursename,address,city of students who is related to
selected course . Course Select by html form and  after the details will be printed as table. -->
<?php
$val = 0;
$conn = mysqli_connect("localhost", "root", "", "college");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['submit'])) {
    $roll = $_POST['roll'];
    $course = $_POST['course'];
    $sql = "SELECT * FROM students_details WHERE roll=$roll AND course='$course'";
    $data = mysqli_fetch_array(mysqli_query($conn, $sql));
    $val = 1;
}
?>
<html>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        Roll no: <input type="number" name="roll"> <br> <br>
        Course Name: <input type="text" name="course"><br> <br>
        <input type="submit" name="submit" value="Submit">
    </form> <br> <br> <br>
    <div>
        <table border="1">
            <?php if ($val) {
                if ($data) { ?>
                    <tr>
                        <th>Roll no</th>
                        <td><?php echo $data['roll'] ?></td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td><?php echo $data['name'] ?></td>
                    </tr>
                    <tr>
                        <th>Course</th>
                        <td><?php echo $data['course'] ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?php echo $data['email'] ?></td>
                    </tr>
                    <tr>
                        <th>Mobile</th>
                        <td><?php echo $data['mobile'] ?></td>
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