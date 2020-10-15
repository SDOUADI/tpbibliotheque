<?php
function uploadfile($fieldName,$overwrite=false)
   {
	   
	   
		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES[$fieldName]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		// Check if image file is a actual image or fake image

		$check = getimagesize($_FILES[$fieldName]["tmp_name"]);
		if($check !== false) 
		{
			echo "File is an image - " . $check["mime"] . ".";
			$uploadOk = 1;
		 } 
		  else 
		 {
			echo "File is not an image.";
			return null;
			$uploadOk = 0;
		}


// Check if file already exists
		if (file_exists($target_file) && !$overwrite) 
		{
		  echo "Sorry, file already exists.";
		  return null;
		  $uploadOk = 0;
		}

// Check file size
		if ($_FILES[$fieldName]["size"] > 500000) 
		{
		  echo "Sorry, your file is too large.";
		  return null;
		  $uploadOk = 0;
		}

// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) 
		{
		  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		  return null;
		  $uploadOk = 0;
		}

// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) 
		{
			return null;
		  echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} 
		else 
		{
			if (move_uploaded_file($_FILES[$fieldName]["tmp_name"], $target_file)) 
			{
				return $target_file;
	  
			//  echo "The file ". htmlspecialchars( basename( $_FILES[$fieldName]["name"])). " has been uploaded.";
			} 
			else 
			{
				return null;
				echo "Sorry, there was an error uploading your file.";
			}
		}
	
		return $target_file;

	}	

