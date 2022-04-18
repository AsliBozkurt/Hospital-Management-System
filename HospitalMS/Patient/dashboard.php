<?php
    require 'sidebar.php';
?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Poppins:wght@100&display=swap');
    #dortluk{
        text-align:center;
        padding: 5%;
        font-family: 'Montserrat', sans-serif;
    }
    #dortluk img{
        cursor: pointer;
        width: 40%;
        margin-bottom: 10px;
    }
    #dortluk p{
        font-size: 12px;
        padding: 0 3%;
        color: black;
    }
</style>
<div class="main">
<div class="container">
        <div class="row data">
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                    <i class="fas fa-procedures"></i><br>
                    <span>
                        <?php
                            $userId;
                            if(isset($_SESSION['userID'])){
                                $userId = $_SESSION['userID'];
                            }
                            require '../Process/connection.php';
                            $sql = "SELECT * FROM appointment WHERE patient_id = '$userId'";
                            $result = mysqli_query($connection, $sql);
                            $appointment_amount = mysqli_num_rows($result);
                            echo $appointment_amount;
                        ?>
                        </span>
                    <span class="amount">Appointments</span>
                    <a href="appointments.php" class="btn btn-outline-success">See More</a>
                    </div>
                </div>
            </div>
            <div class="divider">
                <i class="fas fa-angle-down"></i>
            </div>
        </div>
        <section id="dortluk">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <img src="../images/time.svg" alt="">
                <h5>Quik Appointment</h5>
                <p>You can instantly make an appointment with the physician you want from the mobile application, the Web and the Alo182 Appointment line.</p>
            </div>
            <div class="col-lg-3">
            <img src="../images/location.svg" alt="">
                <h5>Nearest Hospital</h5>
                <p>You can find the nearest hospital to you by sharing your location information via Mobile Application and Web.</p>
            </div>
            <div class="col-lg-3">
            <img src="../images/steteskop.svg" alt="">
                <h5>The Doctor you want</h5>
                <p>It is up to you to make an appointment with the doctor you want on MHRS.</p>
            </div>
            <div class="col-lg-3">
            <img src="../images/what.svg" alt="">
                <h5>what do i have?</h5>
                <p>You can enter your complaint and get specific diagnostic recommendations and an outpatient clinic appointment.</p>
            </div>
        </div>
    </div>
</section> 
    </div>
</div>