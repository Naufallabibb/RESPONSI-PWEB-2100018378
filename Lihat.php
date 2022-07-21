<?php 

echo "<head><title>Buyer List</title></head>";
$fp = fopen("buyerlist.txt", "r");

echo "<table border='0'>";

while ($isi = fgets($fp)) {
    $pisah = explode('|', $isi);
    echo "<table width = 58% border =1>
    <tr>
    <td>Type Of Product: $pisah[0] </td>
    </tr>
    </table>";
    echo "<table width = 58% border =1>
    <tr>
    <td>Product Name:  $pisah[1] </td>
    </tr>
    </table>";
    echo "<table width = 58% border =1>
    <tr>
    <td> Number of products:  $pisah[2] </td>
    </tr>
    </table>";
    echo"<br>";
}

echo "</table>";
echo "<a href='Shoorai.php'> Back buyer </a>";
//hr garis panjang html
?>


    
    
    
    
    



