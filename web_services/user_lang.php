<?php
	include '../db.php';
	
	$umid=$_REQUEST['um_id'];


	$response=array();
	
	$data=mysqli_query($con, "select * from user_lang t1, pro_lang t2 where t1.pl_id = t2.pl_id and t1.um_id=".$umid) or die(mysqli_error($con));

	if(mysqli_num_rows($data)!=0)
	{
		$response['success']=201;
		while($row=mysqli_fetch_array($data))
		{$response['data'][]=$row;}
		$response['message']="Login Successfull";
	}
	else
	{
		$response['success']=200;
		$response['message']="UserID or Password Incorrect";
	}
	echo json_encode($response);
?>