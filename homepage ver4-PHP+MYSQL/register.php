<?php
include("./dbconn.php");
require("admin_info.php");

?>
<?php
if(isset($_SESSION['ss_mb_id']) && $_GET['mode'] == 'modify'){
  $mb_id = $_SESSION['ss_mb_id'];

  $sql="SELECT * from member where mb_id='$mb_id' ";
  $result=mysqli_query($conn, $sql);
  $mb=mysqli_fetch_assoc($result);
  mysqli_close($conn);

  $mode="modify";
  $title="회원수정";
  $modify_mb_info="readonly";
}else {
  $mode="insert";
  $title="회원가입";
  $modify_mb_info='';
}
 ?>

<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="./style.css" type="text/css">
  </head>
  <body>

<div id="center">

    <form action="./register_update.php" onsubmit="return fregisterform_submit(this);" method="post">
      <input type="hidden" name="mode" value="<?php echo $mode ?>">

      <table class="login">
        <tr>
          <td class="logintitle" colspan="2"><?php echo $title ;?></td>
        </tr>
        <tr>
          <td class="login">아 이 디</td>
          <td class="login"><input type="text" name="mb_id" value="<?php echo $mb['mb_id'] ?>" <?php echo $modify_mb_info ?>></td>
        </tr>
        <tr>
          <td class="login">비밀번호</td>
          <td class="login"><input type="password" name="mb_password"></td>
        </tr>
        <tr>
          <td class="login">비밀번호 확인</td>
          <td class="login"><input type="password" name="mb_password_re"></td>
        </tr>
        <tr>
          <td class="login">이  름</td>
          <td class="login"><input type="text" name="mb_name" placeholder=" ex. 홍길동" value="<?php echo $mb['mb_name'] ?>" <?php echo $modify_mb_info ?>></td>
        </tr>
        <tr>
          <td class="login">생년월일</td>
          <td class="login"><input type="number" name="mb_birth" placeholder=" ex. 19961206" value="<?php echo $mb['mb_birth'] ?>" <?php echo $modify_mb_info ?>></td>
        </tr>
        <tr>
          <td class="login">핸드폰 번호</td>
          <td class="login"><input type="number" name="mb_phone" placeholder=" ex. 01012345678" value="<?php echo $mb['mb_phone'] ?>" <?php echo $modify_mb_info ?>></td>
        </tr>
        <tr>
          <td class="login">이 메 일</td>
          <td class="login"><input type="text" name="mb_email" placeholder=" example@mail.com" value="<?php echo $mb['mb_email'] ?>"></td>
        </tr>
        <tr>
          <td class="login">성  별</td>
          <td class="login">
            <label><input type="radio" name="mb_gender" value="남자" <?php echo ($mb['mb_gender'] == "남자") ? "checked" : "" ?> > 남자 </label>
            <label><input type="radio" name="mb_gender" value="여자" <?php echo ($mb['mb_gender'] == "여자") ? "checked" : "" ?> > 여자 </label>
          </td>
        </tr>
      </table>
      <br>
        <a href="./login.php"><div class="button">로 그 인</div></a>
        <input class="button" type="submit" value="<?php echo $title ?>">
      <a href="./index.php"><div class="button">메인화면</div></a>
    </form>
    </div>
    <script>
    function fregisterform_submit(f){

      if (f.mb_id.value.length < 1) {
        alert("아이디를 입력하십시오.");
        f.mb_id.focus();
        return false;
      }

      if (f.mb_name.value.length < 1) {
        alert("이름을 입력하십시오.");
        f.mb_id.focus();
        return false;
      }

      if (f.mb_password.value.length < 3) {
        alert("비밀번호를 3글자 이상 입력하십시오.");
        f.mb_password.focus();
        return false;
      }

      if (f.mb_password.value != f.mb_password_re.value) {
        alert("비밀번호가 같지 않습니다.");
        f.mb_password_re.focus();
        return false;
      }

      if (f.mb_password.value.length > 0) {
        if (f.mb_password_re.value.length<3) {
          alert("비밀번호를 3글자 이상 입력하십시오.");
          f.mb_password_re.focus();
          return false;
        }
      }

      if (f.mb_email.value.length < 1) {
        alert("이메일을 입력하십시오.");
        f.mb_email.focus();
        return false;
      }


      if (f.mb_name.value.length>0){
        var nameJ= /^[가-힣]{2,5}$/;
        if(f.mb_name.value.match(nameJ)==null){
          alert("이름은 한글 2-5글자로 입력해 주세요.");
          f.mb_name.focus();
          return false;
        }
      }

      if (f.mb_birth.value.length != 8) {
        alert("생년월일을 형식에 맞게 입력해주세요.")
        f.mb_birth.focus();
        return false;
      }

      if (f.mb_phone.value.length>0){
        var phoneJ= /^010?([0-9]{4})?([0-9]{4})$/;
        if(f.mb_phone.value.match(phoneJ)==null){
          alert("핸드폰 번호는 010으로 시작하는 11자리 숫자로 부탁드립니다. '-'은 제외해주세요.");
          f.mb_phone.focus();
          return false;
        }
      }

      if (f.mb_email.value.length > 0) {
        var regExp = /^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/i;
        if (f.mb_email.value.match(regExp) == null) {
          alert("이메일 주소가 형식에 맞지 않습니다.");
          f.mb_email.focus();
          return false;
        }
      }

      return true;
    }
    </script>
  </body>
</html>
