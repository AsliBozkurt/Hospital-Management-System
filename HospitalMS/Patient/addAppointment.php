<?php
    require 'sidebar.php';
    if(isset($_POST['addAppointment-btn'])){
        $patient_id = $_SESSION['userID'];
        $doctor_id;
        $diseases = $_POST['diseases'];
        #
        require '../Process/connection.php';
        $sql = "SELECT id FROM doctors WHERE speciality = '$diseases'";
        $result = mysqli_query($connection, $sql);
        while($row = mysqli_fetch_assoc($result)){
            $doctor_id = $row['id'];
        }
        #
        $appointment_date = date('y-m-d', strtotime($_POST['appointment_date']));
        $appointment_time = $_POST['appointment_time'];
        $sql = "SELECT appointment_time FROM appointment WHERE patient_id='$patient_id' and appointment_date = '$appointment_date'";
        $result = mysqli_query($connection, $sql);
        $check = mysqli_num_rows($result);
        if(!$check > 0){
            $sql = "INSERT INTO appointment(patient_id, doctor_id,diseases,appointment_date,appointment_time) VALUES('$patient_id','$doctor_id','$diseases','$appointment_date','$appointment_time')";
            mysqli_query($connection, $sql);
            $_SESSION['message'] = "Successfully done1";
            $_SESSION['msg_type'] = "success";
            header('Location: addAppointment.php?appointmentAddedd');
            exit();
        }else{
            while($row = mysqli_fetch_assoc($result)){
                if(in_array($appointment_time, $row)){
                    $_SESSION['message'] = "Failed! You've already an appointment on ". $appointment_date ." at " .$appointment_time;
                    $_SESSION['msg_type'] = "danger";
                    header('Location: addAppointment.php?error');
                    exit();
                }else{
                    $sql = "INSERT INTO appointment(patient_id, doctor_id,diseases,appointment_date,appointment_time) VALUES('$patient_id','$doctor_id','$diseases','$appointment_date','$appointment_time')";
                    mysqli_query($connection, $sql);
                    $_SESSION['message'] = "Successfully done1";
                    $_SESSION['msg_type'] = "success";
                    header('Location: addAppointment.php?appointmentAddedd');
                    exit();
                }
            }
        }
    }
?>
<style>
    .container{
        padding:5% 5% 10%;
    }
    .card{
        padding:2%;
    }
    .card input{
        margin: 10px 0;
        border-left: 5px solid #ffc800;
    }
</style>
<div class="main">
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
                        <input class="form-control" type="text" name="fullName" value="<?php echo $_SESSION['firstName']." ".$_SESSION['lastName']; ?>" required>
                        <select name="diseases" class="form-select" id="" required>
                            <option value="" selected disabled>Choose Your Diseases</option>
                            <?php
                                require '../Process/connection.php';
                                $sql = "SELECT * FROM doctors";
                                $result = mysqli_query($connection, $sql);
                                while($row = mysqli_fetch_assoc($result)){
                            ?>
                                    <option value="<?php echo $row['speciality']; ?>"><?php echo $row['speciality']; ?></option>
                            <?php        
                                }
                            ?>
                        </select>
                        <input class="form-control" type="date" name="appointment_date" placeholder="Choose the appointment date" required>
                        <select class="form-select" name="appointment_time" id="">
                            <option value="" selected disabled>Choose the time</option>
                            <option value="08:00-08:45 AM">08:00-08:45 AM</option>
                            <option value="09:00-09:45 AM">09:00-09:45 AM</option>
                            <option value="10:00-10:45 AM">10:00-10:45 AM</option>
                            <option value="11:00-11:45 AM">11:00-11:45 AM</option>
                            <option value="12:00-12:45 AM">12:00-12:45 AM</option>
                            <option value="13:00-13:45 AM">13:00-13:45 AM</option>
                            <option value="14:00-14:45 AM">14:00-14:45 AM</option>
                            <option value="15:00-15:45 AM">15:00-15:45 AM</option>
                            <option value="16:00-16:45 AM">16:00-16:45 AM</option>
                        </select>
                        <button class="form-control btn" style="background-color: #7900FF;color:#fff" name="addAppointment-btn" type="submit">Take Appoinment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>