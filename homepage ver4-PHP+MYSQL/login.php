<?php
include("./dbconn.php");
require("admin_info.php");


if(!isset($_POST['past_url'])){
  $past_url='plan.php';
}
else {
  $past_url=$_POST['past_url'];
}

?>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="./style.css">
  </head>

  <body>
    <?php if(!isset($_SESSION['ss_mb_id'])){ ?>


    <div id="center">
    <form action="./login_check.php" method="post">
      <table class="login">
        <tr>
          <td class="logintitle" colspan="2">로 그 인</td>
        </tr>
        <tr>
          <td class="login">아 이 디</td>
          <td class="login"><input type="text" name="mb_id" placeholder="아이디"></td>
        </tr>
        <tr>
          <td class="login">비밀번호</td>
          <td class="login"><input type="password" name="mb_password" placeholder="비밀번호"></td>
        </tr>
      </table>
      <br>
      <a href="./register.php"><div class="button">회원가입</div></a>
      <input class="button" type="submit" value="로 그 인">
      <a href="./index.php"><div class="button">메인화면</div></a>
      <input type="hidden" name="past_url" value="<?php echo $past_url; ?>">
    </form>
</div>
  <?php
}
else
{
$mb_id=$_SESSION['ss_mb_id'];

echo "<script> alert('이미 로그인 완료되었습니다.');</script>";
echo "<script> location.replace('./".$past_url.".php');</script>";
 ?>

<?php } ?>
  </body>
</html>
