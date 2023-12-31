<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,800;0,900;1,800&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500&display=swap" rel="stylesheet" />

    <!-- Bootstrap -->

    <!-- JavaScript Bundle with Popper -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/c4a758ffac.js" crossorigin="anonymous"></script>


    <title>View Results </title>
</head>

<body>


    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="view_results.php">View Patient Details <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="test_results.php">View Test results <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="querybox.php">sponsors</a>
                </li>

            </ul>
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="search.php"> Search <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>



    <!-- table -->

    <div class="container">
        <h1>Patient Details</h1>
        <table class="table table-hover">
            <tr>
                <th>Patient ID</th>
                <th>RBC Count</th>
                <th>WBC Count</th>
                <th>HCT Count</th>
                <th>MCH Count</th>
                <th>MCV Count</th>
                <th>Platelet Count</th>
                <th>Lymphocytes</th>
                <th>Update</th>
                <th>Delete</th>

            </tr>
            <?php
            include("connection.php");



            $sql = "SELECT * FROM blood_test_results";
            $result = mysqli_query($mysql, $sql);


            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                    <td>" . $row["Patient_id"] . "</td>
                    <td>" . $row["RBC_count"] . "</td>
                    <td>" . $row["WBC_count"] . "</td>
                    <td>" . $row["HCT_count"] . "</td>
                    <td>" . $row["MCH_count"] . "</td>
                    <td>" . $row["MCV_count"] . "</td>
                    <td>" . $row["Platelet_count"] . "</td>
                    <td>" . $row["Lymphocytes"] . "</td>
                    <td><a href = 'update1.php?pid=$row[Patient_id] & rbc=$row[RBC_count] & wbc=$row[WBC_count] & hct=$row[HCT_count] & mch=$row[MCH_count] & mcv=$row[MCV_count] & pc=$row[Platelet_count] & lym=$row[Lymphocytes]'>Edit/Update</a>
                    <td><a href = 'delete1.php?pid=$row[Patient_id]'>Delete</a>  </td>
                    </tr>";
                }
            } else {
                echo "no result";
            }
            ?>

        </table>
    </div>

</body>

</html>