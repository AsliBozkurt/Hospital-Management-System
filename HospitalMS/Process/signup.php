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
if(isset($_POST['signup-btn'])){
    /*
     * testing the inputs...
    */
    $firstName = test_input($_POST['firstName']);
    $lastName = test_input($_POST['lastName']);
    $gender = test_input($_POST['gender']);
    $birthDate = date('y-m-d', strtotime(test_input($_POST['birthDate'])));
    $phoneNumber = test_input($_POST['phone']);
    $email = test_input($_POST['email']);
    $pwd = test_input($_POST['password']);
    # creating the connection
    require 'connection.php';
    /*
     * Mysql query for selecting email from users table
     * this query checks if the patients have already account if not signup
    */
    $sql = "SELECT * FROM users WHERE email = '$email';";
    $result = mysqli_query($connection, $sql);
    $check = mysqli_num_rows($result);
    if($check >0){
        header('Location: ../signup.php?error=emailAlreadyExists:'.$email);
        exit();
    }else{
        /*
        * Mysql query for entering the data to the users table
        */
        $sql = "INSERT INTO users(firstName, lastName, gender, birthDate, phoneNumber, email, password, type) VALUES('$firstName','$lastName','$gender','$birthDate','$phoneNumber','$email','$pwd',0);";
        mysqli_query($connection, $sql);
        header("Location: ../login.php?signup=success");
        exit();
    }
}else{
    header("Location: ../index.php");
    exit();
}