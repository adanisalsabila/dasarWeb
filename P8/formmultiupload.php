<!DOCTYPE html>
<html>
    <head>
        <title>Multiupload Dokumen</title>
</head>
<body>
    <h2>Unggah Dokumen</h2>
    <form action="prosesupload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="files[]" multiple="multiple" accept=".pdf, .doc, .docx"/>
        <input type="submit" value="unggah"/>
</form>
</body>
</html>