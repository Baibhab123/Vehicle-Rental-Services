<?php
require 'data.php';
$name=$_GET["field1"];
$email=$_GET["field2"];
$type=$_GET["field3"];
$addr=$_GET["field4"];
$phone=$_GET["field5"];
$status=$_GET["field6"];

//echo $name." ".$email." ".$type." ".$addr." ".$phone." ".$status;
$sql="INSERT INTO user_details(ID,NAME,ADDRESS,PHONE,EMAIL,V_TYPE,STATUS) 
VALUES('NULL','$name','$addr',$phone,'$email','$type','$status') ";
$result=mysqli_query($conn,$sql);
if ($result!=NULL) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}




?>