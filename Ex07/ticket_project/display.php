<?php
$result = mysqli_query($conn, "SELECT * FROM Ticket");

echo "<table border=1>
<tr>
<th>ID</th><th>Name</th><th>Train</th><th>Source</th><th>Destination</th><th>Date</th><th>Seat</th>
</tr>";

while($row = mysqli_fetch_assoc($result))
{
    echo "<tr>
    <td>".$row['Ticket_ID']."</td>
    <td>".$row['Passenger_Name']."</td>
    <td>".$row['Train_Name']."</td>
    <td>".$row['Source']."</td>
    <td>".$row['Destination']."</td>
    <td>".$row['Travel_Date']."</td>
    <td>".$row['Seat_Type']."</td>
    </tr>";
}

echo "</table>";
?>
