<?php
include "db.php";
$result=mysqli_query($conn,"SELECT * FROM books");
echo "<h2>Book List</h2>";
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Title</th><th>Author</th><th>Quantity</th></tr>";
while($row=mysqli_fetch_assoc($result)){
echo "<tr>";
echo "<td>".$row['id']."</td>";
echo "<td>".$row['title']."</td>";
echo "<td>".$row['author']."</td>";
echo "<td>".$row['quantity']."</td>";
echo "</tr>";
}
echo "</table>";
?>
