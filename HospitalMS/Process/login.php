<?php
/*
 * the test_input() function does all the checking for the inputs entered by users
 * it Strip unnecessary characters (extra space, tab, newline) from the user input data (with the PHP trim() function)
 * it remove backslashes (\) from the user input data (with the PHP stripslashes() function)
*/
function test_input($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}
/*
 * Checking for the login
 * In this part it checks the logins for admin or patients
 * Type '0' for patients & type '1' for Admin
 * Admin Email address: admin@gmail.com
 * Admin password: 12345 
*/
if(isset($_POST['login-btn'])){
    /*
     * testing the inputs...
    */
    $email = test_input($_POST['email']);
    $pwd = test_input($_POST['password']);
    # creating the connection
    require 'connection.php';
    # Mysql query for selecting data from users table, where the users informations are saved
    $sql = "SELECT * FROM users WHERE email = '$email';";
    $result = mysqli_query($connection, $sql);
    # checking the result of the query
    $check = mysqli_num_rows($result);
    if($check != 1){
        header('Location: ../login.php?error=noUserFound');
        exit();
    }else{
        while($row = mysqli_fetch_assoc($result)){
            if($row['password'] != $pwd){
                header('Location: ../login.php?error=invalidEmailOrPassword');
                exit();
            }else{
                session_start();
                $_SESSION['userID'] = $row['id'];
                $_SESSION['firstName'] = $row['firstName'];
                $_SESSION['lastName'] = $row['lastName'];
                $_SESSION['gender'] = $row['gender'];
                $_SESSION['birthDate'] = $row['birthDate'];
                $_SESSION['phoneNumber'] = $row['phoneNumber'];
                $_SESSION['email'] = $row['email'];
                if($row['type'] == 0){
                    header("Location: http://localhost/hospitalMS/Patient/dashboard.php?login=sucess");
                    exit();
                }else if($row['type'] == 1){
                    header("Location: http://localhost/hospitalMS/Admin/dashboard.php?login=sucess");
                    exit();
                }
            }
        }
    }
}
/*
 * checking the login for doctors
 * Type '2'
*/
else if(isset($_POST['login-btn-doctor'])){
    $email = test_input($_POST['email']);
    $pwd = test_input($_POST['password']);
    #
    # creating the connection
    require 'connection.php';
    # Mysql query for selecting data from users table, where the users informations are saved
    $sql = "SELECT * FROM doctors WHERE email = '$email'";
    $result = mysqli_query($connection, $sql);
    # checking the result of the query
    $check = mysqli_num_rows($result);
    if($check == 0){
        header('Location: ../doctorLogin.php?noUserFound');
        exit();
    }else{
        while($row = mysqli_fetch_assoc($result)){
            if($row['password'] != $pwd){
                header('Location: ../doctorLogin.php?error=invalidEmailOrPassword');
                exit();
            }else{
                session_start();
                $_SESSION['doctorID'] = $row['id'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['phone'] = $row['phoneNumber'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['speciality'] = $row['speciality'];
                $_SESSION['roomNumber'] = $row['roomNumber'];
                header('Location: ../Doctor/dashboard.php?login=sucess');
                exit();
            }
        }
    }
}else{
    header("Location: ../index.php");
    exit();
}
