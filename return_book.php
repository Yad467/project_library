<?php
include "db.php";
if(isset($_POST['return'])){
$issue_id=$_POST['issue_id'];
$return=date("Y-m-d");
$sql="UPDATE issues SET return_date='$return', fine=10 WHERE id='$issue_id'";
mysqli_query($conn,$sql);
echo "Book Returned";
}
?>
<form method="post">
<h2>Return Book</h2>
Issue ID<input type="number" name="issue_id"><br><br>
<button name="return">Return Book</button>
</form>
