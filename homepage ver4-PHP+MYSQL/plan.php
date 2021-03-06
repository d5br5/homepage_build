<?php require_once("./lib/print.php"); ?>
<?php include("./dbconn.php"); ?>
<?php require("admin_info.php"); ?>

<?php require("./view/top.php"); ?>
<?php require("./view/menu.php"); ?>

<?php print_description(); ?>

<div class="grid_plan">

       <section class="plan_button" id="2017">

           <div class="non_month"> 2017년 1월 </div>
           <div class="non_month"> 2017년 2월 </div>
           <div class="non_month"> 2017년 3월 </div>
           <div class="non_month"> 2017년 4월 </div>
           <div class="non_month"> 2017년 5월 </div>
           <div class="non_month"> 2017년 6월 </div>
           <div class="non_month"> 2017년 7월 </div>
           <div class="non_month"> 2017년 8월 </div>

           <a href="plan.php?month=17_9">
               <div id="start_month">2017년 9월</div>
           </a>
           <a href="plan.php?month=17_10">
               <div>2017년 10월</div>
           </a>
           <a href="plan.php?month=17_11">
               <div>2017년 11월</div>
           </a>
           <a href="plan.php?month=17_12">
               <div>2017년 12월</div>
           </a>

       </section>


       <section class="plan_button" id="2018">

          <a href="plan.php?month=18_1">
               <div>2018년 1월</div>
           </a>
          <a href="plan.php?month=18_2">
               <div>2018년 2월</div>
           </a>
           <a href="plan.php?month=18_3">
               <div>2018년 3월</div>
           </a>
           <a href="plan.php?month=18_4">
               <div>2018년 4월</div>
           </a>
           <a href="plan.php?month=18_5">
               <div>2018년 5월</div>
           </a>
           <a href="plan.php?month=18_6">
               <div>2018년 6월</div>
           </a>
           <a href="plan.php?month=18_7">
               <div>2018년 7월</div>
           </a>
           <a href="plan.php?month=18_8">
               <div>2018년 8월</div>
           </a>
           <a href="plan.php?month=18_9">
               <div>2018년 9월</div>
           </a>
           <a href="plan.php?month=18_10">
               <div>2018년 10월</div>
           </a>
           <a href="plan.php?month=18_11">
               <div>2018년 11월</div>
           </a>
           <a href="plan.php?month=18_12">
               <div>2018년 12월</div>
           </a>

       </section>

       <section class="plan_button" id="2019">

           <a href="plan.php?month=19_1">
               <div>2019년 1월</div>
           </a>
           <a href="plan.php?month=19_2">
               <div>2019년 2월</div>
           </a>
           <a href="plan.php?month=19_3">
               <div>2019년 3월</div>
           </a>
           <a href="plan.php?month=19_4">
               <div>2019년 4월</div>
           </a>
           <a href="plan.php?month=19_5">
               <div id="end_month"> 2019년 5월</div>
           </a>
           <div class="non_month"> 2019년 6월 </div>
           <div class="non_month"> 2019년 7월 </div>
           <div class="non_month"> 2019년 8월 </div>
           <div class="non_month"> 2019년 9월 </div>
           <div class="non_month"> 2019년 10월 </div>
           <div class="non_month"> 2019년 11월 </div>
           <div class="non_month"> 2019년 12월 </div>

       </section>

   </div>


<?php require('./view/bottom.php');?>
