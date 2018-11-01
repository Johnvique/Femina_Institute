<?php
if (isset($_POST['id'])) {
    delete();
    echo $_POST['id'];
}
function delete(){
    include 'class/connect.php';
    $id = $_POST['id'];
     $qryname = mysqli_query($conn,"SELECT file FROM `downloads` WHERE id=$id");
    $name=mysqli_fetch_assoc($qryname);
    $fileName=$name['file'];
	$del = "DELETE FROM `downloads` WHERE id = $id";
    mysqli_query($conn,$del)or die(mysqli_error($conn));
    unlink("uploads/file" . $fileName);
}
  $GoTo = "downloads.php";
  header(sprintf("Location: %s",$GoTo));
?>