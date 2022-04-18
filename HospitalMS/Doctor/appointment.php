<?php require 'sidebar.php';?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Poppins:wght@100&display=swap');
    
    *{
        font-family: 'Montserrat', sans-serif;
    }
    .fa-chevron-circle-left{
        margin: 30px 0 30px;
        color: #7900FF;
    }
    th, td{
        font-size: 15px;
    }
    .fa-chevron-circle-left{
        margin: 30px 0 30px;
        color: #7900FF;
    }
    .fa-minus-circle{
        color: red;
        font-size: 20px;
    }
</style>
<div class="main">
    <div class="container">
        <a href="dashboard.php"><i class="fas fa-chevron-circle-left"></i></a>
        <div class="card">
            <div class="card-body">
            <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                        <th scope="col">Index</th>
                        <th scope="col">Name</th>
                        <th scope="col">Diseases</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $speciality = $_SESSION['speciality'];
                            require '../Process/connection.php';
                            $sql = "SELECT * FROM appointment WHERE diseases='$speciality'";
                            $result = mysqli_query($connection, $sql);
                            $check = mysqli_num_rows($result);
                                $index = 0;
                                while($row = mysqli_fetch_assoc($result)){
                        ?>
                                    <tr>
                                    <td><?php echo ++$index; ?></td>
                                    <td>
                                        <?php
                                            $patient_id = $row['patient_id']; 
                                            $sql = "SELECT * FROM users WHERE id = '$patient_id'";
                                            $resultt = mysqli_query($connection, $sql);
                                            while($roww = mysqli_fetch_assoc($resultt)){
                                                echo $roww['firstName']." ".$roww['lastName'];
                                            }
                                        ?>
                                    </td>
                                    <td><?php echo $row['diseases'] ?></td>
                                    <td><?php echo $row['appointment_date'] ?></td>
                                    <td><?php echo $row['appointment_time'] ?></td>
                                    <td>
                                    <a href="appointment.php?delete=<?php echo $row['id']?>"><i class="fas fa-minus-circle"></i></i></a>
                                    </td>
                                    </tr>
                        <?php            
                                }
                        ?>
                    </tbody>
            </div>
        </div>
    </div>
</div>