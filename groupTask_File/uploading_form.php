<?php include "db.php";?>
<hr><h2>Upload your files </h2>

<form enctype="multipart/form-data" action="upload.php" method="POST">
    Select file to upload: <input name="userfile" type="file" multiple accept="image/*" required><br>
    <input type="submit" value="Upload File" />
</form>
