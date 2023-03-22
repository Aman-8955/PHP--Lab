<!-- 16. Write a PHP script to upload a image file with related name specified folder(upload_file) using PHP -->
<?php
if (isset($_POST['submit'])) {
    if (!file_exists("upload_file")) {
        mkdir("upload_file");
    }
    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
        $allowed_types = array("image/jpeg", "image/png", "image/gif");
        $max_size = 5 * 1024 * 1024;
        if (in_array($_FILES["image"]["type"], $allowed_types) && $_FILES["image"]["size"] <= $max_size) {
            $folder = "upload_file/";
            $file_name = $_FILES["image"]["name"];
            $file_name_new = time() . '_' . $file_name;

            if (move_uploaded_file($_FILES["image"]["tmp_name"], $folder . $file_name_new)) {
                echo "File uploaded successfully.";
            } else {
                echo "Error uploading file.";
            }
        } else {
            echo "Invalid file type or size.";
        }
    } else {
        echo "Error uploading file.";
    }
}
?>
<html>

<body>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="image" />
        <input type="submit" name="submit" value="Upload" />
    </form>
</body>

</html>