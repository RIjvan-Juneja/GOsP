<?php
include "../../common/function.php";
include('../../Database/connect.php');


$id = $_GET['enrollment_number'];
$password = generate_password();
echo $password;
$enc_password = encryptPassword($password);
$q = $con->prepare("SELECT phone_number FROM user WHERE enrollment_number = ? ");
$q->bind_param("i", $id);
$q->execute();
$result1 = $q->get_result();
if ($result1->num_rows == 1) {
    $row = $result1->fetch_assoc();
    $phone_number = !empty($row['phone_number']) ? $row['phone_number'] : "";
}


$msg = "Congratulations! You Are Eligible for GOsP, Now You Can 
Login And Become Contributor or Mentor Your <br> username : ". $id . "<br />". "password : ".$password ;


$stmt = $con->prepare("UPDATE `user` SET status = 'active', password = ? WHERE enrollment_number = ? ");
$stmt->bind_param("ss", $enc_password, $id);
$result = $stmt->execute();

if ($result) {
    $_SESSION['status'] = "Status changed Successfully";
    $_SESSION['status_code'] = "success";
    echo $_SESSION['status'];
    // echo "<script>setTimeout(function(){window.location='pending_student.php'},1000);</script>";

    // // Account details
    // $apiKey = urlencode('NzE3MjcyMzc1NTVhNDY1MDQxNGM0MTZkNTE1OTM2NzA=');
    // // Message details
    // $numbers = array($phone_number);
    // $sender = urlencode('TXTLCL');
    // $message = rawurlencode($msg);

    // $numbers = implode(',', $numbers);

    // // Prepare data for POST request
    // $data = array('apikey' => $apiKey, 'numbers' => $numbers, 'sender' => $sender, 'message' => $message);
    // // Send the POST request with cURL
    // $ch = curl_init('https://api.textlocal.in/send/');
    // curl_setopt($ch, CURLOPT_POST, true);
    // curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // $response = curl_exec($ch);
    // curl_close($ch);
    // Process your response here
    // echo $response;

} else {
    $_SESSION['status'] = "laboratories Deletion Failed";
    $_SESSION['status_code'] = "error";

    echo "<script>setTimeout(function(){window.location='pending_student.php.php'},1000);</script>";
}
?>