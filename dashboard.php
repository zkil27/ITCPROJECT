<?php
    session_start();
    include 'database.php';

    if (!isset($_SESSION['ID'])) {
        echo '<script>alert("Session ID not set")</script>';
        exit();
    }
?>
<?php
    $ID = $_SESSION['ID'];
    $sql = "SELECT * FROM usersInfo WHERE ID = '$ID'";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die('Query failed: ' . mysqli_error($conn));
    }
    $row = mysqli_fetch_assoc($result);

    if(mysqli_num_rows($result) > 0){
        $studentnum = $row['STUDENT_NUM'];
        $fullname = $row['FULLNAME'];
        $email = $row['EMAIL'];
        $phonenumber = $row['PHONE_NUM'];
        $gender = $row['GENDER'];
        $course = $row['COURSE'];
    } else {
        echo '<script>alert("NO USER FOUND")</script>';
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <nav id="navContainer">
            <div id="navLogoContainer"><span style="font-size: 26px;">Mapa de</span><br>Dasmarinas</div>
            <h1>Student Dashboard</h1> 
        </nav>
    
<div id="dashContainer">
    <div id="dashboard">
        <div id="welcome">
        <h5>Welcome, <?php echo $fullname?> !</h5>
        <p>Here is your dashboard overview</p>
    </div>
        
        <table id="details">
            <thead>
                <tr>
                    <th id="yukona">Field</th>
                    <th id="pls">Information</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="F">Student ID</td>
                    <td> <?php echo $studentnum?></td>
                </tr>
                <tr>
                    <td class="F">Email</td>
                    <td> <?php echo $email?></td>
                </tr>
                <tr>
                    <td class="F">Phone Number</td>
                    <td> <?php echo $phonenumber?></td>
                </tr>
                <tr>
                    <td class="F">Gender</td>
                    <td> <?php echo $gender?></td>
                </tr>
                <tr>
                    <td class="F">Course</td>
                    <td> <?php echo $course?></td>
                </tr>
                <tr>
                    <td class="F"></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="F"></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="F"></td>
                    <td></td>
                </tr>
            </tbody>
        </table>

        <div id="buttons">
            <a href="#" id="updateBTN">Update Profile</a>
            <a href="#" id="gradeBTN">View Grades</a>
            <a href="logout.php" id="logoutBTN"><img src="logout.png" alt="" width="20" height="19"></a>
            
        </div>
    </div>
</div>
</body>
</html>



