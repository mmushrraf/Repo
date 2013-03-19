<?php
include_once('../includes/config.php');
include_once('../includes/common.lib.php');

//check if user is valid and exists in the unilevel table
if(!isLoggedIn()) { header("location: ../login.php"); exit;}
$unilevelquery=mysqli_query($link,"SELECT * FROM `unilevel` WHERE `userid`='{$_SESSION['user_id']}'") or die(mysql_error());
if(!$result=mysqli_fetch_assoc($unilevelquery)) { mysqli_free_result($unilevelquery); header("location: index.php"); exit;}

// Modified and added status variable && 1 more column
function appendData($userId,$depth,$name,$surname,$status) {
  $userName=$name;
  echo<<<AV
  <script type="text/javascript"> 
    var tableRow="<tr><td>&nbsp;{$userId}</td>";
  tableRow+="<td>&nbsp;{$userName} {$surname}</td><td>&nbsp;{$status}</td><td></td><td></td></tr>";
     list=document.getElementsByClassName("lvl_list")[0].getElementsByClassName("lvl_body")[{$depth}-1].getElementsByTagName("table")[0];
     jQuery(list).append(tableRow);
   </script>   		  
AV;


}

function getList($link) {
 
  $id=$_SESSION['user_id'];
  $query="SELECT unilevel.userid, name, surname1, status,
  (CASE 
   WHEN lvl1={$id} THEN 1
   WHEN lvl2={$id} THEN 2
   WHEN lvl3={$id} THEN 3
   WHEN lvl4={$id} THEN 4
   WHEN lvl5={$id} THEN 5
   WHEN lvl6={$id} THEN 6
   WHEN lvl7={$id} THEN 7
   WHEN lvl8={$id} THEN 8
   WHEN lvl9={$id} THEN 9
   END) level
FROM `unilevel` JOIN `users` ON unilevel.userid=users.userid
    WHERE lvl1={$id} OR lvl2={$id} OR lvl3={$id} OR lvl4={$id} OR lvl5={$id} OR lvl6={$id} OR lvl7={$id} OR lvl8={$id} OR lvl9={$id}";
  

  $query = mysqli_query($link,$query);
  while($res=mysqli_fetch_assoc($query)) {
    // Modified to add status
    appendData($res['userid'],$res['level'],$res['name'], $res['surname1'], $res['status']);
  }
  mysqli_free_result($query);
}

function getAggregateVals(&$unilevel_agg_cnt,&$unilevel_agg_pv,&$unilevel_uid_count,&$unilevel_pv,$link)
{
    $id=$_SESSION['user_id'];
    $query = "SELECT 1 as level,count(*) as users, sum(case typeid when 2 then 100 when 3 then 300 end) as pv FROM `unilevel` WHERE lvl1={$id}
            UNION ALL
            SELECT 2 as level,count(*) as users, sum(case typeid when 2 then 100 when 3 then 300 end) as pv FROM `unilevel` WHERE lvl2={$id}
            UNION ALL
            SELECT 3 as level,count(*) as users, sum(case typeid when 2 then 100 when 3 then 300 end) as pv FROM `unilevel` WHERE lvl3={$id}
            UNION ALL
            SELECT 4 as level,count(*) as users, sum(case typeid when 2 then 100 when 3 then 300 end) as pv FROM `unilevel` WHERE lvl4={$id}
            UNION ALL
            SELECT 5 as level,count(*) as users, sum(case typeid when 2 then 100 when 3 then 300 end) as pv FROM `unilevel` WHERE lvl5={$id}
            UNION ALL
            SELECT 6 as level,count(*) as users, sum(case typeid when 2 then 100 when 3 then 300 end) as pv FROM `unilevel` WHERE lvl6={$id}
            UNION ALL
            SELECT 7 as level,count(*) as users, sum(case typeid when 2 then 100 when 3 then 300 end) as pv FROM `unilevel` WHERE lvl7={$id}
            UNION ALL
            SELECT 8 as level,count(*) as users, sum(case typeid when 2 then 100 when 3 then 300 end) as pv FROM `unilevel` WHERE lvl8={$id}
            UNION ALL
            SELECT 9 as level,count(*) as users, sum(case typeid when 2 then 100 when 3 then 300 end) as pv FROM `unilevel` WHERE lvl9={$id}
            ";
    $query = mysqli_query($link,$query);
    while($res=mysqli_fetch_assoc($query)) {
        $unilevel_agg_cnt[$res['level']] = $res['users'];
        $unilevel_uid_count += $res['users'];
        if(!is_null($res['pv']))
        {$unilevel_agg_pv[$res['level']] = $res['pv'];
        $unilevel_pv += $res['pv'];
        }
    }
    mysqli_free_result($query);
}


$unilevel_agg_cnt = array(0,0,0,0,0,0,0,0,0,0);
$unilevel_agg_pv  = array(0,0,0,0,0,0,0,0,0,0);
$unilevel_uid_count = 0;
$unilevel_pv = 0;

getAggregateVals($unilevel_agg_cnt,$unilevel_agg_pv,$unilevel_uid_count,$unilevel_pv,$link);
include('../templates/en/account/header.php');
include('../templates/en/account/unilevel.php');


getList($link);


?>