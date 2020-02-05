<?php 

	$id=$_POST['edit_id'];
	$name=$_POST['edit_name'];
	$email=$_POST['edit_email'];
	$gender=$_POST['edit_gender'];
	$address=$_POST['edit_address'];


	$oldprofile=$_POST['edit_oldprofile'];
	$newprofile=$_FILES['edit_newprofile'];



	$fullpath =$oldprofile;
	if ($newprofile['size']>0) {

		unlink($oldprofile);
		//upload file
		$basepath='photo/';
		$fullpath=$basepath.$newprofile['name'];
		move_uploaded_file($newprofile['tmp_name'], $fullpath);
		
	}

	$student =array(

		"name"=>$name,
		"email"=>$email,
		"gender"=>$gender,
		"address"=>$address,
		"profile"=>$fullpath,





	);	

	$jsonData=file_get_contents('studentlist.json');
	if (!$jsonData) {

		$jsonData='[]';
	}

	//convert into array from json
	$data_arr=json_decode($jsonData);
	$data_arr[$id]=$student;
	$json_obj=json_encode($data_arr,JSON_PRETTY_PRINT);

	file_put_contents('studentlist.json', $json_obj);
	header("location:index.php");





 ?>