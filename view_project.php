<?php include "Database/connect.php"; ?>
<?php

$project_id = mysqli_real_escape_string($con, $_GET['id']);
$stmt = $con->prepare("SELECT u.first_name, u.last_name, p.id as project_id, p.project_name, p.description, p.technology_used, p.github_repo_link FROM projects p JOIN user u ON p.mentor_id = u.id Where p.id = $project_id AND p.is_active=1 AND p.is_delete=0");
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows == 1) {
    
    $row = $result->fetch_assoc();
    $mentor_name = $row['first_name'] . " " . $row['last_name'];
    $project_name = !empty($row['project_name']) ? $row['project_name'] : "";
    $description = !empty($row['description']) ? $row['description'] : "";
    $technology_used = !empty($row['technology_used']) ? $row['technology_used'] : "";
    $github_repo_link = !empty($row['github_repo_link']) ? $row['github_repo_link'] : "";
} else {
    echo "No Data Found";
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif !important;
        }

        .table-area-cont {
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-items: center;
            justify-content: center;
        }

        table {
            border: 1px solid #ccc;
            border-collapse: collapse;
            margin: 0;
            padding: 0;
            width: 90%;
            table-layout: fixed;
        }

        table caption {
            font-size: 1.5em;
            margin: .5em 0 .75em;
        }

        table tr {
            background-color: #f8f8f8;
            border: 1px solid #ddd;
            padding: .35em;
        }

        table th,
        table td {
            padding: .625em;
            text-align: center;
        }

        table th {
            font-size: .85em;
            letter-spacing: .1em;
            text-transform: uppercase;
        }

        @media screen and (max-width: 600px) {
            table {
                border: 0;
            }

            table caption {
                font-size: 1.3em;
            }

            table thead {
                border: none;
                clip: rect(0 0 0 0);
                height: 1px;
                margin: -1px;
                overflow: hidden;
                padding: 0;
                position: absolute;
                width: 1px;
            }

            table tr {
                border-bottom: 3px solid #ddd;
                display: block;
                margin-bottom: .625em;
            }

            table td {
                border-bottom: 1px solid #363636;
                display: block;
                font-size: .8em;
                text-align: right;
            }

            table td::before {
                /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
                content: attr(data-label);
                float: left;
                font-weight: bold;
                text-transform: uppercase;
            }

            table td:last-child {
                border-bottom: 0;
            }
        }

        #col-1 {
            width: 20%;
            border: 1px solid rgb(99, 99, 99);
        }

        #col-2 {
            border: 1px solid rgb(99, 99, 99);
        }

        .text-left {
            text-align: left;
        }

        .tag {
            background-color: #cdccccea;
            display: flex;
            justify-content: center;
            justify-items: center;
            width: fit-content;
            border-radius: 8px;
            padding: 2px 30px;
        }

        .flex-row {
            display: flex;
            gap: 5px;
        }

        .btn {
            cursor: pointer;
        }

        .btn {
            display: inline-block;
            font-weight: 400;
            line-height: 1.53;
            color: #697a8d;
            text-align: center;
            vertical-align: middle;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            background-color: transparent;
            border: 1px solid transparent;
            padding: 0.4375rem 1.25rem;
            font-size: 0.9375rem;
            border-radius: 0.375rem;
            transition: all 0.2s ease-in-out;
        }

        a,
        a:hover,
        a:focus {
            text-decoration: none;
        }

        .btn-primary {
            color: #fff !important;
            background-color: #696cff !important;
            border-color: #696cff;
            box-shadow: 0 0.125rem 0.25rem 0 rgba(105, 108, 255, 0.4);
        }
    </style>
    <?php include "include/importhead.php"; ?>

    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="componants/header/header.css">
    <link rel="stylesheet" href="componants/footer/footer.css">

</head>

<body>
    <?php include "componants/header/header.php"; ?>
    <div class="table-area-cont">
        <table>
            <tbody>
                <tr>
                    <td id="col-1">
                        Project ID
                    </td>
                    <td id="col-2" class="text-left">
                        <?php echo "PID".$project_id; ?>
                    </td>
                </tr>
                <tr>
                    <td id="col-1">
                        Project Name
                    </td>
                    <td id="col-2" class="text-left">
                    <?php echo $project_name; ?>
                    </td>
                </tr>
                <tr>
                    <td id="col-1">
                        Project Discription
                    </td>
                    <td id="col-2" class="text-left">
                    <?php echo $description; ?>
                    </td>
                </tr>

                <tr>
                    <td id="col-1">
                        Mentor Name
                    </td>
                    <td id="col-2" class="text-left">
                    <?php echo $mentor_name; ?>
                    </td>
                </tr>
                <tr>
                    <td id="col-1">
                        Technology Used
                    </td>
                    <td id="col-2" class="text-left">
                        <?php $array = explode(',', $technology_used); 
                        foreach ($array as $key => $value) {
                            if ($value === end($array)) {
                                echo " " . $value;
                            } else {
                                echo $value . ", ";
                            }
                        }
                            ?>
                    </td>
                </tr>
                <tr>
                    <td id="col-1">
                        Action
                    </td>
                    <td id="col-2" class="text-left">
                        <a href="<?php echo $github_repo_link; ?>" class="btn btn-icon btn-primary text-white">
                            View project
                        </a>
                        <a href="request_contribution.php?id=<?php echo $row['project_id']; ?>" class="btn btn-icon btn-primary text-white">
                            Apply
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
        
    </div>

    <?php include "componants/footer/footer.php"; ?>

</body>

</html>