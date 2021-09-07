<?php
    function uploadFile($input_Name,$target_dir,$allowtypes,$max_size,$override){
	$upload_status=true;
	$target_file=$target_dir."/" . basename($_FILES[$input_Name]["name"]);
	$error=array();

	$types="";
	if(is_array($allowtypes)){
		foreach ($allowtypes as $key => $type) {
			$types=$type.",";
		}
	}
	
	$types=trim($types,",");

	if(!isset($_FILES[$input_Name]))
	{
		$error[]="không có dữ liệu file";
		$upload_status=false;
	}
	
	if($_FILES[$input_Name]['error'] !=0){
		$error[]="Dữ liệu upload bị lỗi";
		$upload_status=false;
	}

	$imageFileType= strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	if(!in_array($imageFileType,$allowtypes)){
		$error[]="Chỉ được upload các định dạng : " .$types;
		$upload_status=false;
	}
	
	if($_FILES[$input_Name]["size"] > $max_size*1024*1024){
		$error[]="Image should not be larger than  $max_size (MB).";
		$upload_status=false;

	}
	if(file_exists($target_file) && $override==false){
		$error[]="file name already exists";
		$upload_status=false;
	}
	
	if($upload_status){
		if(move_uploaded_file($_FILES[$input_Name]["tmp_name"], $target_file)){
			return array(true,$target_file);
		}
		else{
			$error[]="fail uploade.Please check";
			return array(false,$error);
		}
	}
	else{
		// echo $error;die();
		return array(false,$error);
	}
}
 ?>