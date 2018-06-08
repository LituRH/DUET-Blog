<?php		  	
//for File Upload start
	$filename = $_FILES["file2"]["name"];
	$file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
	$file_ext = substr($filename, strripos($filename, '.')); // get file name
	$filesize = $_FILES["file2"]["size"];
	$allowed_file_types = array('.doc','.docx','.rtf','.pdf','.jpeg','.jpg','.png','.PDF','.JPEG','.JPG','.PNG');	

	if (in_array($file_ext,$allowed_file_types) && ($filesize < 2000000000000))
	{	
		// Rename file
		//$newfilename = md5($file_basename) . $file_ext;
		// $fname=($nid.$to.$e_id);
		$newfilename1 = rand(1,9999).$file_ext;
		//$newfilename = $fname.$file_ext;
		if (file_exists("upload/" . $newfilename1))
		{
			// file already exists error
			echo "You have already uploaded this file.";
			$fg=1;
		}
		else
		{		
			move_uploaded_file($_FILES["file2"]["tmp_name"], "upload/". $newfilename1);
		
			//echo "File uploaded successfully.";		
		}
	}

	   //for File Upload End
	   
	   ?>