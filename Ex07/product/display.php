<?php
$result = mysqli_query($conn, "SELECT * FROM Product");

echo "<table border=1>
<tr>
<th>ID</th><th>Name</th><th>Price</th><th>Qty</th><th>Discount</th><th>Final Price</th>
</tr>";

while($row = mysqli_fetch_assoc($result))
{
    echo "<tr>
    <td>".$row['Product_ID']."</td>
    <td>".$row['Product_Name']."</td>
    <td>".$row['Price']."</td>
    <td>".$row['Quantity']."</td>
    <td>".$row['Discount']."</td>
    <td>".$row['Final_Price']."</td>
    </tr>";
}

echo "</table>";
?>
