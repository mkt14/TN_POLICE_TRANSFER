<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["excel_file"])) {
    $targetDir = "uploads/"; // Directory where you want to store the uploaded file
    $targetFile = $targetDir . basename($_FILES["excel_file"]["name"]);
    $fileType = pathinfo($targetFile, PATHINFO_EXTENSION);

    // Check if the uploaded file is an Excel file
    $allowedExtensions = array("xls", "xlsx");
    if (in_array($fileType, $allowedExtensions)) {
        if (move_uploaded_file($_FILES["excel_file"]["tmp_name"], $targetFile)) {
            // File uploaded successfully
            echo "File uploaded successfully.";
            // You can now process the Excel file as needed
        } else {
            echo "Error uploading the file.";
        }
    } else {
        echo "Invalid file format. Only Excel files are allowed.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload Excel File</title>
</head>
<body>
    <h2>Upload Excel File</h2>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>" enctype="multipart/form-data">
        <input type="file" name="excel_file" accept=".xls,.xlsx" required>
        <input type="submit" value="Upload">
    </form>
</body>
</html>
