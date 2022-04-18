<?php
    require 'sidebar.php'; 
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
    if(isset($_POST['addDoctor-btn'])){
        $name = test_input($_POST['fullName']);
        $speciality = test_input($_POST['speciality']);
        $phone = test_input($_POST['phone']);
        $email = test_input($_POST['email']);
        $roomNumber = test_input($_POST['roomNum']);
        $pwd = test_input($_POST['password']);
        /*
         * requiring the connection
        */
        require '../Process/connection.php';
        /*
         * This query checks if the docor with the same email address already exists on the table
        */
        $sql = "SELECT * FROM doctors WHERE email = '$email'";
        $result = mysqli_query($connection, $sql);
        /*
         * checking the query
         */
        $check = mysqli_num_rows($result);
        if($check > 0){
            $_SESSION['message'] = "The given email address  has been already used!";
            $_SESSION['msg_type']= "danger";
            header('Location: addDoctors.php?error=emailAlreadyExists='.$email);
            exit();
        }else{
            $sql = "INSERT INTO doctors(name, phoneNumber, email, speciality, password, roomNumber, type) VALUES('$name','$phone','$email','$speciality','$pwd','$roomNumber',2);";
            mysqli_query($connection, $sql);
            $_SESSION['message'] = "The doctor has been already recorded!";
            $_SESSION['msg_type']= "success";
            header('Location: addDoctors.php?doctorAddedd');
            exit();
        }
    }
?>
<!-- 
    *
 -->
<style>
    .container{
        padding:5% 10% 10%;
    }
    .card{
        padding:2%;
    }
    .card input{
        margin: 10px 0;
        border-left: 5px solid #ffc800;
    }
</style>
<!-- 
    *
 -->
<div class="main">
    <div class="container">
        <?php if(isset($_SESSION['message'])): ?>
            <div class="alert alert-<?php echo $_SESSION['msg_type']; ?> alert-dismissible fade show" role="alert">
                <span class="message">
                <?php
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                ?>
                </span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <div class="card">
            <div class="card-body">
                <form action="" method="post">
                    <input class="form-control" type="text" name="fullName" placeholder="Enter the doctor's name" required>
                    <input class="form-control" type="text" name="speciality" placeholder="Enter the doctor's speciality" required>
                    <input class="form-control" type="text" name="phone" placeholder="Enter the doctor's phone number" required>
                    <input class="form-control" type="email" name="email" placeholder="Enter the doctor's email" required>
                    <input class="form-control" type="text" name="roomNum" placeholder="Enter the doctor's room number" required>
                    <input class="form-control" type="password" name="password" placeholder="Enter a password" required>
                    <button class="form-control btn" style="background-color: #7900FF;color:#fff" name="addDoctor-btn" type="submit">Add Doctor</button>
                </form>
            </div>
        </div>
    </div>
</div>
   