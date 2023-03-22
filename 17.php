<!-- 17. Write a PHP script that accept name of file and contents of file using html form after submit it save it in
directory text_files_upload with name of file which is provided in html form and file should be text fie. -->
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $file_name = $_POST["file_name"];
    $file_contents = $_POST["file_contents"];
    if (!file_exists("text_files_upload")) {
        mkdir("text_files_upload");
    }
    $file_path = "text_files_upload/" . $file_name . ".txt";
    file_put_contents($file_path, $file_contents);
    echo "File saved successfully!";
}

?>

<html>

<body>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        File name: <input type="text" name="file_name"><br><br>
        File contents: <textarea name="file_contents"></textarea><br>
        <input type="submit" value="Submit">
    </form>

</body>

</html>