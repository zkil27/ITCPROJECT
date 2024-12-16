<?php
    session_start();
    include 'database.php';
    ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>   
    <div id="mainContainer"> 
        <div id="loginContainer">
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" id="loginForm">
                <div id="loginHeaderContainer"><span style="font-size: 36px;">Mapa de</span><br>Dasmarinas</div>
                <div id="loginInput">
                    <div id="loginEmailContainer">
                        <input type="text" id="loginEmail" placeholder="Username or Email" name="email">
                    </div>
                    <div id="loginPasswordContainer">
                        <input type="password" id="loginPassword" placeholder="Password" name="password">
                    </div>
                    <div id="forgotPasswordContainer">
                        <a href="#" id="forgotPasswordLink">Forgot Password</a>
                    </div>
                </div>
                <div id="loginButtonContainer">
                    <input type="submit" name="loginSubmit" value="LOG IN" id="loginButton">
                </div>
                <div id="signinLinkContainer"><a href="#" id="signinLink" onclick="Toggle()">Create an Account</a></div>    
            </form>
        </div>
        <div id="signinContainer">
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" id="singinForm">
                <div id="signinHeaderContainer">SIGN IN</div>
                <div id="signinStudentNumContainer">
                    <input type="text" id="signinStudentNumber" placeholder="Student Number" name="studentnum">
                </div>
                <div id="singinFullNameContainer">       
                    <input type="text" id="signinFullName" placeholder="Full Name" name="fullname">
                </div>
                <div id="signinEmailContainer">
                    <input type="text" id="signinEmail" placeholder="Email" name="email">
                </div>
                <div id="signinPhoneNumContainer">
                    <input type="text" id="siginPhoneNum" placeholder="Phone Number" name="phonenumber">
                </div>
                <div id="signinGenderContainer">
                    <div id="radioFormContainer">
                        <div id="maleContainer">
                            <input type="radio" name="gender" id="male" value="Male">
                            <label for="male">Male</label>
                        </div>
                        <div id="femaleContainer">
                            <input type="radio" name="gender" id="female" value="Female">
                            <label for="female">Female</label>
                        </div>
                        <div id="othersContainer">
                            <input type="radio" name="gender" id="others" value="Others">
                            <label for="others">Others</label>
                        </div>
                    </div>
                </div>
                <div id="signinCourseContainer">
                    <input type="text" id="signinCourse" placeholder="Course" name="course">
                </div>
                <div id="signinPasswordContainer">
                    <input type="password" id="signinPassword" placeholder="Password" name="password">
                </div>
                <div id="confirmPasswordContainer">
                    <input type="password" id="signinConfirmPassword" placeholder="Confirm Password">
                </div>
                <div id="signinButtonContainer">
                    <input id="signinButton" type="submit" name="signinSubmit" value="SIGN IN">
                </div>
                <div id="loginLinkContainer"><a href="#" id="loginLink" onclick="Toggle()">Have an Account?</a></div>
            </form>
        </div>
    </div>
<script src="script.js"></script>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["signinSubmit"])){
            $studentnum = $_POST["studentnum"];
            $fullname = $_POST["fullname"];
            $email = $_POST["email"];
            $phonenumber = $_POST["phonenumber"];
            $gender = isset($_POST["gender"]) ? $_POST["gender"] : null;
            $course = $_POST["course"];
            $password = $_POST["password"];

            // Check if fields are empty
            if(empty($studentnum) || empty($fullname) || empty($email) || empty($phonenumber) || empty($gender) || empty($course) || empty($password)){
                echo '<script>alert("Please fill up all fields")</script>';
            } else {
                // Check for duplicates
                $checkDuplicate = "SELECT * FROM usersInfo WHERE EMAIL='$email' OR STUDENT_NUM='$studentnum'";
                $result = mysqli_query($conn, $checkDuplicate);

                if (mysqli_num_rows($result) > 0) {
                    echo '<script>alert("Email or Student Number already exists")</script>';
                } else {
                    $sql = "INSERT INTO usersInfo (STUDENT_NUM, FULLNAME, EMAIL, PHONE_NUM, GENDER, COURSE, PASSWORD)
                            VALUES ('$studentnum', '$fullname', '$email', '$phonenumber' , '$gender', '$course', '$password')"; 
                    if (mysqli_query($conn, $sql)) {
                        echo '<script>alert("Registration successful")</script>';
                    } else {
                        error_log("Error: " . mysqli_error($conn));
                        echo '<script>alert("An error occurred during registration. Please try again later.")</script>';
                    }
                }
            }
        } 
        if(isset($_POST["loginSubmit"])){
            $email = $_POST["email"];
            $password = $_POST["password"];

            if(empty($email) || empty($password)){
                echo '<script>alert("Please fill up all fields")</script>';
            } else {
                $sql = "SELECT * FROM usersInfo WHERE EMAIL='$email' AND PASSWORD='$password'";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    $_SESSION['ID'] = $row['ID']; 
                    header("Location: dashboard.php");
                    exit();
                } else {
                    echo '<script>alert("Invalid email or password")</script>';
                }
            }
        }
    }   
?>
