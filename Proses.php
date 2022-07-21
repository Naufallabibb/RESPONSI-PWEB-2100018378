<?php
$status = $_POST['status'];
$status2 = $_POST['status2'];
$number = $_POST['number'];

echo "<head><title>Buyer List</title></head>";
$fp = fopen("buyerlist.txt", "a+");
fputs($fp, "$status|$status2|$number\n");
fclose($fp);

header("Location: Setelah.php");

?>



