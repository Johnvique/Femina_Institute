<?php
if (isset($_POST['id'])) {
    delete();
    echo $_POST['id'];
}
function delete(){
    include 'class/connect.php';
    $id = $_POST['id'];
     $qryname = mysqli_query($conn,"SELECT file FROM `staff` WHERE id=$id");
    $name=mysqli_fetch_assoc($qryname);
    $fileName=$name['image'];
	$del = "DELETE FROM `staff` WHERE id = $id";
    mysqli_query($conn,$del)or die(mysqli_error($conn));
    unlink("uploads" . $fileName);
}
  $GoTo = "staff.php";
  header(sprintf("Location: %s",$GoTo));
?>