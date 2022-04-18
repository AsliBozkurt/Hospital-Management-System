<?php
    require 'sidebar.php';
    if(isset($_GET['delete'])){
        require '../Process/connection.php';
        $id = $_GET['delete'];
        $sql = "DELETE FROM appointment WHERE id=$id;";
        $sql = mysqli_query($connection,$sql);
        header("Location: appointments.php");
        exit();
    }
?>
<style>
    th, td{
        font-size: 15px;
    }
    .fa-chevron-circle-left{
        margin: 30px 0 30px;
        color: #7900FF;
    }
    .fa-trash{
        color: red;
        font-size: 20px;
        box-shadow: 5px 5px 15px -5px rgba(0, 0, 0, 0.5);
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
                        <th scope="col">Diseases</th>
                        <th scope="col">Doctor</th>
                        <th scope="col">Appointment Date</th>
                        <th scope="col">Appointment Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $userId;
                            if(isset($_SESSION['userID'])){
                                $userId = $_SESSION['userID'];
                            }
                            require '../Process/connection.php';
                            $sql = "SELECT * FROM appointment WHERE patient_id='$userId'";
                            $result = mysqli_query($connection, $sql);
                            $check = mysqli_num_rows($result);
                            if($check == 0){
                                header('Location: appointments.php');
                                exit();
                            }else{
                                $index = 0;
                                while($row = mysqli_fetch_assoc($result)){
                        ?>
                                    <tr>
                                    <td><?php echo ++$index; ?></td>
                                    <td><?php echo $row['diseases'] ?></td>
                                    <td>
                                        <?php
                                            $doctor_id = $row['doctor_id']; 
                                            $sql = "SELECT name FROM doctors WHERE id = '$doctor_id'";
                                            $resultt = mysqli_query($connection, $sql);
                                            while($roww = mysqli_fetch_assoc($resultt)){
                                                echo $roww['name'];
                                            }
                                        ?>
                                    </td>
                                    <td><?php echo $row['appointment_date'] ?></td>
                                    <td><?php echo $row['appointment_time'] ?></td>
                                    <td>
                                    <a href="appointments.php?delete=<?php echo $row['id']?>"><i class="fas fa-trash"></i></a>
                                    </td>
                                    </tr>
                        <?php            
                                }
                            }
                        ?>
                    </tbody>
                </table>
           </div>
       </div>
    </div>
</div>