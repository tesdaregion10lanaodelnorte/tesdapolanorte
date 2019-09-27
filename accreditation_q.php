<?php 
include('connection.php'); 
// asessment center query start
$acc_c_query = "select ac.name_center, ac.manager_center, q.name_qua, list_.ac_num,list_.date_accre,
list_.date_expire from list_asst_cent list_ inner join assessment_center ac 
on ac.center_id =list_.asst_id inner join qualifications q on q.qua_id = list_.qua_id ; ";

$fetch_c_query = mysqli_query($connect, $acc_c_query);
//asessment center query end

// accredited asessor query start

$acc_s_q = "select acc_s.name_assessor, q.name_qua, list_a.list_accr_num, list_a.list_date_accre, list_a.list_date_expiration from 
            list_accr_assessors list_a inner join accredited_assessor acc_s on 
            acc_s.assessor_id = list_a.list_assessor_id inner join qualifications q on 
            q.qua_id= list_a.list_qua_id;";

$acc_s_fetch = mysqli_query($connect, $acc_s_q);

// accredited asessor query end
?>