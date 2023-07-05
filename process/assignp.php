<?php

require_once ('dbh.php');

$pname = $_POST['pname'];
$eid = $_POST['eid'];
$subdate = $_POST['duedate'];

$sql = "INSERT INTO `project`(`eid`, `pname`, `duedate` , `status`) VALUES ('$eid' , '$pname' , '$subdate' , 'Due')";

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
$sql1 = "select email from employee where $eid";
$result1 = mysqli_query($conn, $sql1);

if(mysqli_num_rows($result1)>0)
{
while($row=mysqli_fetch_assoc($result1))
{

mail("$row["email"]","ABCD","Hello","ABCD");
}
}



?>