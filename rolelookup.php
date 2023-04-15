<?php 
include 'header.php';
$userInfo = $_SESSION['userInfo'];
if($userInfo['job'] == "Admin") {
    header("Location: admin.php");
}
elseif($userInfo['job'] == "Manager") {
    header("Location: manager.php");
}
else {
    header("Location: CEO.php");
}
?>