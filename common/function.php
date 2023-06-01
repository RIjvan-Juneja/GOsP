<?php
// check if name only contains letters and whitespace
function only_alphabet($data)
{
    if(empty($data)){
        return "please do not leave this field empty";
    }
	if (!preg_match("/^[a-zA-Z]+$/", $data)) {
        return "Invalid ! Please enter only alphabets.";
    } 
}
function encryptPassword($password) {
    return md5($password);
}
function validateNumber($data) {
    // Remove all non-numeric characters from the phone number
    $cleanNumber = preg_replace('/\D/', '', $data);
    // check for empty field
    if(empty($data)){
        return "please do not leave this field empty";
    }
    // Check if the cleaned phone number matches the original input
    if ($cleanNumber !== $data) {
        return 'Invalid! It should contain only numbers and no spaces.';
    }

    // Check if the phone number has a length of 10 digits
    if (strlen($cleanNumber) !== 10) {
        return 'Invalid! It should be 10 digits long.';
    }

    // Other validation rules can be added here if needed

    return ""; // Empty string indicates validation success
}
function validateEnrNumber($data) {
    // Remove all non-numeric characters from the phone number
    $cleanNumber = preg_replace('/\D/', '', $data);
     // check for empty field
     if(empty($data)){
        return "please do not leave this field empty";
    }
    // Check if the cleaned phone number matches the original input
    if ($cleanNumber !== $data) {
        return 'Invalid! It should contain only numbers and no spaces.';
    }

    // Check if the phone number has a length of 10 digits
    if (strlen($cleanNumber) !== 12) {
        return 'Invalid! It should be 12 digits long.';
    }

    // Other validation rules can be added here if needed

    return ""; // Empty string indicates validation success
}


function validate_data($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

function filterEmail($field)
{
	// Sanitize e-mail address
	$field = filter_var(trim($field), FILTER_SANITIZE_EMAIL);

	// Validate e-mail address
	if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
		return $field;
	} else {
		return FALSE;
	}
}

function validateDropDown($selectedOption) {
    if (empty($selectedOption)) {
        return "Please select an option.";
    }
}

function validateEmail($email) {
     // check for empty field
     if(empty($email)){
        return "please do not leave this field empty";
    }
    // Sanitize email address
    $email = filter_var(trim($email), FILTER_SANITIZE_EMAIL);

    // Validate email address
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "Invalid email";
    } 
}

function filterString($field)
{
	// Sanitize string
	$field = filter_var($field, FILTER_SANITIZE_STRING);
	$field = trim($field);
	$field = stripslashes($field);
	$field = htmlspecialchars($field);

	if (!empty($field)) {
		return $field;
	} else {
		return FALSE;
	}
}
function generate_password()
{
    $str = "abcdefghijklmnopqrstuvwxyz1234567890123456789";
    $random_str = str_shuffle($str);
    $ran_three = substr($random_str, 0, 3);
    $pass = "gosp@" . $ran_three;
    return $pass;
}


function validate_image($image_type, $image_size)
{
    if ($image_type == "image/png" || $image_type == "image/jpg" || $image_type == "image/jpeg") {
        if ($image_size < 5242880) {
            $response = [
                'status' => 200,
                'message' => 'Image is valid',
            ];
        } else {
            $response = [
                'status' => 400,
                'message' => 'File Size must be Smaller Than 5 MB.',
            ];
        }
    } else {
        $response = [
            'status' => 400,
            'message' => 'Selected Files is Not an Image.',
        ];
    }
    
    return $response;
}
function upload_single_file($file, $target_directory, $validation_check)
{
    // read the image files array

    if (isset($file)) {
        $image_name = $file['name'];
        $image_size = $file['size'];
        $image_tmp = $file['tmp_name'];
        $image_type = $file['type'];

        // rename of file 
        $new_file_name = $image_name;
        // check file type 
        if ($validation_check == 1) {
        if ($image_type == "image/png" || $image_type == "image/jpg" || $image_type == "image/jpeg" || $image_type == "image/webp") {
            // check image size
            if ($image_size < 5242880){
                if (!file_exists($target_directory)) {
                    mkdir($target_directory, 0777, true);
                }
                // File is an image, move it to the uploads directory
                if (move_uploaded_file($image_tmp, $target_directory . $new_file_name)) {
                    // File was successfully uploaded, add its details to the array of uploaded images
                    $response = [
                        'status' => 200,
                        'message' => $new_file_name,
                    ];
                    return $response;
                    
                } else {
                    $response = [
                        'status' => 400,
                        'message' => 'File is not uploaded',

                    ];
                    return $response;
                }
            } else {
                $response = [
                    'status' => 400,
                    'message' => 'File Size must be Smaller Than 5 MB.',
                ];
                return $response;
            }
        } else {
            $response = [
                'status' => 400,
                'message' => 'Selected Files is Not an Image....',
            ];
            return $response;
        }
        } else {
            if (!file_exists($target_directory)) {
                mkdir($target_directory, 0777, true);
            }
            // File is an image, move it to the uploads directory
            if (move_uploaded_file($image_tmp, $target_directory . $new_file_name)) {
                // File was successfully uploaded, add its details to the array of uploaded images
                $response = [
                    'status' => 200,
                    'message' => $new_file_name,
                ];
                return $response;
             
            } else {
                $response = [
                    'status' => 400,
                    'message' => 'File is not uploaded',
                ];
                return $response;
            }
        }
    } else {
        $response = [
            'status' => 400,
            'message' => 'No Data Found',
        ];
        return $response;
    }
}



function upload_single_file_new($file, $target_directory, $validation_check)
{
    if (isset($file['name'])) {
        $image_name = $file['name'];
        $image_size = $file['size'];
        $image_tmp = $file['tmp_name'];
        $image_type = $file['type'];

        // rename the file 
        $new_file_name = $image_name;
        
        // check file type 
        if ($validation_check == 1) {
            if ($image_type == "image/png" || $image_type == "image/jpg" || $image_type == "image/jpeg" || $image_type == "image/webp") {
                // check image size
                if ($image_size < 5242880){
                    if (!file_exists($target_directory)) {
                        mkdir($target_directory, 0777, true);
                    }
                    // File is an image, move it to the uploads directory
                    if (move_uploaded_file($image_tmp, $target_directory . $new_file_name)) {
                        // File was successfully uploaded, add its details to the array of uploaded images
                        $response = [
                            'status' => 200,
                            'message' => $new_file_name,
                        ];
                        return $response;
                    } else {
                        $response = [
                            'status' => 400,
                            'message' => 'File is not uploaded',
                        ];
                        return $response;
                    }
                } else {
                    $response = [
                        'status' => 400,
                        'message' => 'File Size must be Smaller Than 5 MB.',
                    ];
                    return $response;
                }
            } else {
                $response = [
                    'status' => 400,
                    'message' => 'Selected File is Not an Image.',
                ];
                return $response;
            }
        } else {
            if (!file_exists($target_directory)) {
                mkdir($target_directory, 0777, true);
            }
            // File is an image, move it to the uploads directory
            if (move_uploaded_file($image_tmp, $target_directory . $new_file_name)) {
                // File was successfully uploaded, add its details to the array of uploaded images
                $response = [
                    'status' => 200,
                    'message' => $new_file_name,
                ];
                return $response;
            } else {
                $response = [
                    'status' => 400,
                    'message' => 'File is not uploaded',
                ];
                return $response;
            }
        }
    } else {
        $response = [
            'status' => 400,
            'message' => 'No Data Found',
        ];
        return $response;
    }
}



?>