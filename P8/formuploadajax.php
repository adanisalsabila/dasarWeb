<!DOCTYPE html>
<html>
    <head>
        <title>Unggah File Dokumen</title>
</head>
<body>
    <form id="upload-form" action="uploadajax.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file[]" id="file" multiple>
        <input type="submit" name="submit" value="Unggah">
</foem>
<div id ="status"></div>

<script src = "https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src = "upload.js"></script>
</body>
</html>