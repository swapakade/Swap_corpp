<?php

require_once ('dbh.php');

$pname = $_POST['pname'];
$eid1 = $_POST['eid1'];
$eid2= $_POST['eid2'];
$eid3 = $_POST['eid3'];
$eid4 = $_POST['eid4'];
$subdate = $_POST['duedate'];

$sql = "INSERT INTO `project1`(`eid1`,`eid2`,`eid3`,`eid4`, `pname`, `duedate` , `status`) VALUES ('$eid1' ,'$eid2' ,'$eid3' ,'$eid4' , '$pname' , '$subdate' , 'Due')";

$result = mysqli_query($conn, $sql);


if(($result) == 1){
    
    
    header("Location: ..//assignproject.php");
}

else{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Assign')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}
//$sql1 = "select email from employee where $eid";
//$result1 = mysqli_query($conn, $sql1);

//if(mysqli_num_rows($result1)>0)
//{
//while($row=mysqli_fetch_assoc($result1))
//{

//mail("$row["email"]","ABCD","Hello","ABCD");
//}
//}



?>