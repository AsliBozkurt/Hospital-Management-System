<?php
    require 'sidebar.php';
    function test_input($input) {
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }
    if(isset($_GET['deleteDoctor'])){
        require '../Process/connection.php';
        $id = test_input($_GET['deleteDoctor']);
        $sql = "DELETE FROM doctors WHERE id=$id;";
        $sql = mysqli_query($connection,$sql);
        header("Location: doctor.php");
        exit();
    }
?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Poppins:wght@100&display=swap');
    
    *{
        font-family: 'Montserrat', sans-serif;
    }
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
                        <th scope="col">Name</th>
                        <th scope="col">Speciality</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Email</th>
                        <th scope="col">Room Number</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            require '../Process/connection.php';
                            $sql = "SELECT * FROM doctors";
                            $result = mysqli_query($connection, $sql);
                            $index = 0;
                                while($row = mysqli_fetch_assoc($result)){
                        ?>
                                    <tr>
                                    <td><?php echo ++$index; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['speciality'] ?></td>
                                    <td><?php echo $row['phoneNumber'] ?></td>
                                    <td><?php echo $row['email'] ?></td>
                                    <td><?php echo $row['roomNumber'] ?></td>
                                    <td>
                                        <a href="doctor.php?deleteDoctor=<?php echo $row['id']?>"><i class="fas fa-trash"></i></a>
                                    </td>
                                    </tr>
                        <?php            
                                }
                        ?>
                    </tbody>
                </table>
           </div>
       </div>
    </div>
</div>