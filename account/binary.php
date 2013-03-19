<?php
include_once('../includes/config.php');
include_once('../includes/common.lib.php');

//check if user is valid
if(!isLoggedIn()) { header("location: ../login.php"); exit;}

$level=array();
$depth="";
$cnt=0;
$userid=$_SESSION['user_id'];

//Check binary table entry exists for the user
$query = mysqli_query($link,"SELECT min(binaryid) binid FROM `binary` WHERE userid={$userid}");
if($result = mysqli_fetch_assoc($query))
{
    $user_bid = $result['binid'];
}
mysqli_free_result($query);
if(is_null($user_bid) || $user_bid==0) { header("Location: index.php"); exit();}

//Set default view or child view
if(isset($_GET['bid'])) $binid=mysqli_real_escape_string($link,$_GET['bid']);
else
{ $binid = $user_bid;}

//Check authenticaton
$query=mysqli_query($link,"SELECT 1 FROM `binary` b1, `binary` b2 WHERE b2.userid={$_SESSION['user_id']} AND b1.binaryid={$binid} AND b1.lineage LIKE concat(b2.lineage,'%')");
if(!mysqli_num_rows($query)) {mysqli_free_result($query); header("Location: binary.php"); exit();}

//Reset the binary insert position if requested
if(isset($_POST['change_bin']) && $_POST['change_bin']='change')
{
    $binselect = mysqli_real_escape_string($link,$_POST['bin_select']);
    if($binselect=='left' || $binselect=='right' || $binselect=='auto')
    {
        mysqli_query($link,"UPDATE `users` SET `binaryinsertposition`='{$binselect}' WHERE `userid`='{$userid}'");
    }
}

//Get chosen binary insert position
$res =  mysqli_query($link,"SELECT `binaryinsertposition` FROM `users` WHERE `userid`='{$userid}'");
$row = mysqli_fetch_assoc($res);
$binInsertPosition = $row['binaryinsertposition'];

function getLevel($binid,$depth1,$parent1,$childType) {
  global $depth,$level,$cnt;
  if($cnt==0) {$depth=$depth1;$cnt=1;$level[$binid]=1;return 1;}
  $level[$binid]=2*((int)($level[$parent1]));
  if($childType!='left') $level[$binid]++;
}

function appendData($res) {
  global $depth,$level,$link;
  getLevel($res['binaryid'],$res['depth'],$res['parent'],$res['childtype']);
  $name=$res['name'];
  $dp=$res['depth']-$depth;
  $class="disp_".$level[$res['binaryid']];
  echo <<<SCRIPT
    <script type="text/javascript">     
    var spanType="<div class=\"disp_info\"><span><a href=\"?bid={$res['binaryid']}\" onclick=\"\" ><strong>{$res['binaryid']}</strong></a></span></br>";
        spanType+="<span>{$res['userid']}</span></br><span >{$name}</span></div>";
  list=document.getElementById("{$class}");
  jQuery(list).html(spanType);
</script>
SCRIPT;
}


function getAggregateVals($bid,&$binary_uid_count,&$binary_vg,&$binary_uid_left,&$binary_vg_left,&$binary_uid_right,&$binary_vg_right,$link)
{
        $query = "SELECT * FROM
                    (SELECT count(b2.binaryid) as totalcount, 0 as totalpv
                    FROM `binary` b1, `binary` b2
                    WHERE b1.binaryid={$bid} AND b2.lineage LIKE CONCAT(b1.lineage,',%')) as total,
                    (SELECT count(b3.binaryid) as leftcount,0 as leftpv
                    FROM `binary` b1, `binary` b2, `binary` b3
                    WHERE b1.binaryid={$bid} AND b2.binaryid=b1.lftnode AND b3.lineage LIKE CONCAT(b2.lineage,'%')) lft,
                    (SELECT count(b3.binaryid) as rightcount,0 as rightpv
                    FROM `binary` b1, `binary` b2, `binary` b3
                    WHERE b1.binaryid={$bid} AND b2.binaryid=b1.rghtnode AND b3.lineage LIKE CONCAT(b2.lineage,'%')) rght";
        $query = mysqli_query($link,$query);
        while($res=mysqli_fetch_assoc($query))
        {
            $binary_uid_count  = $res['totalcount'];
            $binary_vg         = $res['totalpv'];
            $binary_uid_left   = $res['leftcount'];
            $binary_vg_left    = $res['leftpv'];
            $binary_uid_right  = $res['rightcount'];
            $binary_vg_right   = $res['rightpv'];
        }

}

$binary_uid_count  = 0;
$binary_vg         = 0;
$binary_uid_left   = 0;
$binary_vg_left    = 0;
$binary_uid_right  = 0;
$binary_vg_right   = 0;
getAggregateVals($user_bid,$binary_uid_count,$binary_vg,$binary_uid_left,$binary_vg_left,$binary_uid_right,$binary_vg_right,$link);

include('../templates/en/account/header.php');
include('../templates/en/account/binary.php');


$query=mysqli_query($link,"SELECT b1.*,b1.depth-b2.depth depthdiff,`name` from `binary` b1, `binary` b2, `users` u WHERE b2.binaryid={$binid} AND b1.lineage LIKE concat(b2.lineage,'%') AND b1.depth-b2.depth<4 AND u.userid=b1.userid ORDER BY depthdiff") or die(mysql_error());
while($res=mysqli_fetch_assoc($query)) {appendData($res);}
mysqli_free_result($query);
?>