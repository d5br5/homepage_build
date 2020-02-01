<?php
include("./dbconn.php");
require("admin_info.php");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  </body>
</html>

<?php
session_start();
session_unset();
session_destroy();

if(!isset($_SESSION['ss_mb_id'])){
  echo "<script>alert('로그아웃되었습니다.');</script>";
  echo "<script>location.replace('./".$_POST['past_url']."');</script>";
  exit;
}
 ?>
