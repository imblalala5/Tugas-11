<?php
if (isset($_POST['Input'])){
    $nama1=$_POST['nama1'];
    $nama2=$_POST['nama2'];
    $nama3=$_POST['nama3'];
    $nama4=$_POST['nama4'];

    echo "<b>Nama Teman-teman yang menguasai Bahasa :</b><br>";
    echo "1. $nama1 menguasai Bahasa Indonesia <br>";
    echo "2. $nama2 menguasai Bahasa Inggris <br>";
    echo "3. $nama3 menguasai Bahasa Spanyol <br>";
    echo "4. $nama4 menguasai Bahasa Jepang <br>";
}
?>
