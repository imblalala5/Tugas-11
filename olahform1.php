<!DOCTYPE html>
<html>
<head>
    <title>Pengolahan form cara #1</title>
</head>
<body>
    <form action="" method="post" name="input">
        Kewarganegaraan Anda : <input type="text" name="kewarganegaraan"><br>
        <input type="submit" name="input" value="Tampilkan Kewarganegaraan"/>
    </form>
</body>
</html>

<?php
if (isset($_POST['input'])) {
    $kewarganegaraan = htmlspecialchars($_POST['kewarganegaraan']);
    echo "Kewarganegaraan Anda : <b>$kewarganegaraan</b>";
}
?>