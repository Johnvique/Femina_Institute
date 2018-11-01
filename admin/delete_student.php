<?php
if (isset($_POST['id'])) {
    delete();
    echo $_POST['id'];
}
function delete(){
    include 'class/connect.php';
    $id = $_POST['id'];
     $qryname = mysqli_query($conn,"SELECT file FROM `student` WHERE id=$id");
    $name=mysqli_fetch_assoc($qryname);
    $fileName=$name['image'];
	$del = "DELETE FROM `student` WHERE id = $id";
    mysqli_query($conn,$del)or die(mysqli_error($conn));
    unlink("uploads" . $fileName);
}
  $GoTo = "students.php";
  header(sprintf("Location: %s",$GoTo));
?>