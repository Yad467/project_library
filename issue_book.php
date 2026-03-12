<?php
include "db.php";
if(isset($_POST['issue'])){
$book=$_POST['book'];
$user=$_POST['user'];
$date=date("Y-m-d");
$sql="INSERT INTO issues(book_id,user_id,issue_date) VALUES('$book','$user','$date')";
mysqli_query($conn,$sql);
echo "Book Issued";
}
?>
<form method="post">
<h2>Issue Book</h2>
Book ID<input type="number" name="book"><br><br>
User ID<input type="number" name="user"><br><br>
<button name="issue">Issue Book</button>
</form>
