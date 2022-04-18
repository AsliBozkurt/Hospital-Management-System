<?php
    require 'sidebar.php';
    if(isset($_GET['delete'])){
        require '../Process/connection.php';
        $id = $_GET['delete'];
        $sql = "DELETE FROM users WHERE id=$id;";
        $sql = mysqli_query($connection,$sql);
        header("Location: user.php");
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
                        <th scope="col">Gender</th>
                        <th scope="col">Birth Date</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            require '../Process/connection.php';
                            $sql = "SELECT * FROM users";
                            $result = mysqli_query($connection, $sql);
                            $check = mysqli_num_rows($result);
                            if($check == 0){
                                header('Location: user.php');
                                exit();
                            }else{
                                $index = 0;
                                while($row = mysqli_fetch_assoc($result)){
                                    if($row['id'] == 1){
                                        continue;
                                    }
                        ?>
                                    <tr>
                                    <td><?php echo ++$index; ?></td>
                                    <td><?php echo $row['firstName']." ".$row['lastName']; ?></td>
                                    <td><?php echo $row['gender'] ?></td>
                                    <td><?php echo $row['birthDate'] ?></td>
                                    <td><?php echo $row['phoneNumber'] ?></td>
                                    <td><?php echo $row['email'] ?></td>
                                    <td>
                                    <a href="user.php?delete=<?php echo $row['id']?>"><i class="fas fa-trash"></i></a>
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