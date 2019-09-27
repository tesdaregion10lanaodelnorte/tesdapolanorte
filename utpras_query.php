<?php

    include('connection.php');

    $displayfortable = "select comp_id, name_insti, class_insti,course,prog_reg_no,date_issued, status from compendium;";
    $fetchdisplayquery= mysqli_query($connect, $displayfortable);

    
    
    $modalquery="Select cong_district,type_insti,address_insti,tele_insti,sector,duration from compendium where comp_id = '{$_SESSION['comp_id']}' ";
    $fetchmodalq= mysqli_query($connect, $modalquery);






?>