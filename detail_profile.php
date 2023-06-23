
<?php
include "Database/connect.php";

$enrollmentNumber = $_GET['er'];
$stmt = $con->prepare("SELECT * FROM `user` where enrollment_number =?");
	$stmt->bind_param("i", $enrollmentNumber);
	$stmt->execute();
	$result = $stmt->get_result();
	if ($result->num_rows == 1) {
		$row = $result->fetch_assoc();
		$id = !empty($row['id']) ? $row['id'] : "";
		$first_name = !empty($row['first_name']) ? $row['first_name'] : "";
		$middle_name = !empty($row['middle_name']) ? $row['middle_name'] : "";
		$last_name = !empty($row['last_name']) ? $row['last_name'] : "";
		$er_num = !empty($row['enrollment_number']) ? $row['enrollment_number'] : "";
		$email = !empty($row['email']) ? $row['email'] : "";
		$branch = !empty($row['branch']) ? $row['branch'] : "";
		$semester = !empty($row['semester']) ? $row['semester'] : "";
		$skills = !empty($row['skills']) ? $row['skills'] : "";
		$description = !empty($row['description']) ? $row['description'] : "";
		$github_link = !empty($row['github_link']) ? $row['github_link'] : "";
		$photo_name  = !empty($row['photo']) ? $row['photo'] : "";

	}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="detail_profile.css">
</head>

<body>
    <div class="context">
        <div class="container">
            <h2 class="text-center font-bold mb">User Application</h2>

            <table class="table table-bordered table1">
                <tbody>
                    <tr>
                        <td><b>Name</b></td>
                        <td><?php echo $first_name; ?></td>
                        <td><b>Enrollment Number </b></td>
                        <td>201290116020</td>
                        <td rowspan="4" width="100px"><img src="assets/images/user2.jpg" alt="" width="180px"></td>
                    </tr>
                    <tr>
                        <td><b>Course</b></td>
                        <td>B.E</td>
                        <td><b>Branch</b></td>
                        <td>IT</td>
                    </tr>
                    <tr>
                        <td><b>Semester</b></td>
                        <td>3</td>
                        <td><b>Email Id</b></td>
                        <td>asdd54@bdh.com</td>
                    </tr>
                    <tr>
                        <td colspan="4"> <b>GitHub Link : </b><a href="">link</a></td>
                    </tr>
                    <tr>
                        <td><b>Skills :</b></td>
                        <td colspan="5">HTML,css,jS</td>
                    </tr>


                    <tr>
                        <td colspan="5">
                            <b>About Us :</b> <br><br>
                            <p class="text-justify"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis
                                provident, maiores eveniet, itaque omnis corrupti, quam id accusamus quo harum facere!
                                Molestiae aspernatur minima consequuntur nemo qui voluptate cumque hic eaque dicta,
                                maxime porro! Laudantium doloribus unde ab, labore mollitia excepturi, facere sunt enim
                                soluta nam saepe natus! Dicta, itaque.</p>
                        </td>
                    </tr>

                </tbody>
            </table>

            <table class="table table-bordered table2">
                <tbody>
                    <tr>
                        <td width="100px" rowspan="3"><img src="assets/images/user2.jpg" alt="" width="100px"></td>
                    </tr>
                    <tr>
                        <td><b>Name :</b> <br>
                            JUNEJA RIJVAN
                        </td>
                    </tr>
                    <tr>
                        <td><b>Enrollment :</b> <br>
                            2012901016020
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Course :</b>
                            B.E
                        </td>
                        <td>
                            <b>Branch:</b>
                            IT
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <b>Semester :</b>
                            6
                        </td>
                        <td>
                            <b>GitHub:</b>
                            <a href="">link</a>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <b>Email :</b>
                            avbjd@gmail.com
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <b>skills :</b> <br>
                            ffd,ddhd,djhfhf,ssjhf
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <b>About us :</b> <br>
                            <p class="text-justify"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis
                                provident, maiores eveniet, itaque omnis corrupti, quam id accusamus quo harum facere!
                                Molestiae aspernatur minima consequuntur nemo qui voluptate cumque hic eaque dicta,
                                maxime porro! Laudantium doloribus unde ab, labore mollitia excepturi, facere sunt enim
                                soluta nam saepe natus! Dicta, itaque.</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
    <div class="area">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>

</body>

</html>