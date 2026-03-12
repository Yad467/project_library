<?php
include "db.php";
if(isset($_POST['add'])){
$title=$_POST['title'];
$author=$_POST['author'];
$qty=$_POST['qty'];
$sql="INSERT INTO books(title,author,quantity) VALUES('$title','$author','$qty')";
mysqli_query($conn,$sql);
echo "Book Added Successfully";
}
?>
<form method="post">
<h2>Add Book</h2>
Title<input type="text" name="title"><br><br>
Author<input type="text" name="author"><br><br>
Quantity<input type="number" name="qty"><br><br>
<button name="add">Add Book</button>
</form>
