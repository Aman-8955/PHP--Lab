<!-- 15. Write a PHP script that provide result of subjects (subject name, marks) ,percentage, total of students
who is related to specified roll no and roll no entered by html form and after submitting roll no provide
result .-->
<?php
$val = 0;
$conn = mysqli_connect("localhost", "root", "", "college");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['submit'])) {
    $roll = $_POST['roll'];
    $sql = "SELECT * FROM students_details WHERE roll=$roll";
    $data = mysqli_fetch_array(mysqli_query($conn, $sql));
    $sum=0;
    for($i=5;$i<=10;$i++){
    $sum+=$data[$i];
    }
    $val = 1;
}
?>
<html>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        Roll no: <input type="number" name="roll"> <br> <br>
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
                        <th>Data Structure</th>
                        <td><?php echo $data['dsa'] ?></td>
                    </tr>
                    <tr>
                        <th>System Design</th>
                        <td><?php echo $data['sad'] ?></td>
                    </tr>
                    <tr>
                        <th>Networking</th>
                        <td><?php echo $data['net'] ?></td>
                    </tr>
                    <tr>
                        <th>E commerce</th>
                        <td><?php echo $data['ecom'] ?></td>
                    </tr>
                    <tr>
                        <th>Java</th>
                        <td><?php echo $data['java'] ?></td>
                    </tr>
                    <tr>
                        <th>PHP</th>
                        <td><?php echo $data['php'] ?></td>
                    </tr>
                    <tr>
                        <th>Percentage</th>
                        <td><?php echo round($sum/600*100,2)."%" ?></td>
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