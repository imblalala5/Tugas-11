<?php
if(isset($_POST['Proses'])){
    $ungkapan = nl2br($_POST['ungkapan']);
    echo "Ungkapan Anda adalah : <br>";
    echo "<font color='green'><b>$ungkapan</b></font>";
}
?>
