<?php 

    function print_error(){
        
         echo "<h1 style='text-align:center'><span style='font-size:200px'>없는 주소</span></h1>";
        
    }

    function print_description(){
    
        
        $ignored=array('.','..');
        $scanhome=array_diff(scandir("./data"),$ignored);
        $scanplan=array_diff(scandir("./monthlyplan"),$ignored);
        
        
        if(isset($_GET['id'])){
             $basename=basename($_GET['id']);
             if(($_GET['id']=='plan')&&isset($_GET['month'])){
                 
                 if(in_array(basename($_GET['month']),$scanplan)){
                    print(file_get_contents("./monthlyplan/".$_GET['month']));    
                 }else{
                    print_error();
                 }
                 
             }else{
                 if(in_array($basename,$scanhome)){
                     print (file_get_contents("./data/".$basename));
                }else{
                    print_error();
                }
             }
        }else{
        echo (file_get_contents("./data/main"));
        }
        
    }


    ?>
