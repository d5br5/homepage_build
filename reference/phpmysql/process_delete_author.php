<?php

require("./userinfo.php");
$conn=mysqli_connect($hostname,$username,$password,$DBname);
settype($_POST['id'],'integer');
$filtered=array(
    'id'=>mysqli_real_escape_string($conn,$_POST['id'])
);

$sql="DELETE FROM TOPIC
    WHERE author_id={$filtered['id']};";

mysqli_query($conn, $sql);


$sql="DELETE FROM AUTHOR
    WHERE id={$filtered['id']}
    ;";

$result=mysqli_query($conn,$sql);

if ($result===false){
    echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의하세요';
    error_log(mysqli_error($conn));
}else{
    header('Location:author.php');
}

?>
