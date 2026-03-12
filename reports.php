<?php
include "db.php";
$result=mysqli_query($conn,"SELECT * FROM issues");
echo "<h2>Issue Report</h2>";
echo "<table border='1'>
<tr><th>ID</th><th>Book ID</th><th>User ID</th><th>Issue Date</th><th>Return Date</th><th>Fine</th></tr>";
while($row=mysqli_fetch_assoc($result)){
echo "<tr>
<td>{$row['id']}</td>
<td>{$row['book_id']}</td>
<td>{$row['user_id']}</td>
<td>{$row['issue_date']}</td>
<td>{$row['return_date']}</td>
<td>{$row['fine']}</td>
</tr>";
}
echo "</table>";
?>
