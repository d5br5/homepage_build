<?php

    function print_error(){

         echo "<h1 style='text-align:center'><span style='font-size:200px'>없는 주소</span></h1>";

    }

    function print_description(){


      if(isset($_SESSION['ss_mb_id'])){
        $ignored=array('.','..');
        $scanplan=array_diff(scandir("./monthlyplan"),$ignored);

        if(isset($_GET['month'])){
             $basename=basename($_GET['month']);
                if(in_array(basename($_GET['month']),$scanplan)){
                    print(file_get_contents("./monthlyplan/".$_GET['month']));
                 }else{
                    print_error();
                 }
                }

      }else {
      echo "<h1 class='shouldlogin'><a href='login.php'>로그인</a> 해야 볼 수 있습니다.<br></h1>";
        }

}
    ?>
