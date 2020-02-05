<?php 

	$name=$_POST['name'];
	$email=$_POST['email'];
	$gender=$_POST['gender'];
	$address=$_POST['address'];
	$profile=$_FILES['profile'];

	/*var_dump($name,$email,$gender,$address,$profile);die();
*/
	//upload file
	$basepath ='photo/';
	$fullpath=$basepath.$profile['name'];
	move_uploaded_file($profile['tmp_name'], $fullpath);

	//create array
	$student =array(

		"name" => $name,
		"email"=>$email,
		"gender" => $gender,
		"address" => $address,
		"profile" => $fullpath

	);

	//get jsonData from json File
	$jsonData=file_get_contents('studentlist.json');
	if (!$jsonData) {

		$jsonData='[]';
	}

	//convert into array from json
	$data_arr=json_decode($jsonData);
	array_push($data_arr,$student);
	$json_obj=json_encode($data_arr,JSON_PRETTY_PRINT);

	file_put_contents('studentlist.json', $json_obj);
	header("location:index.php");




 ?>


