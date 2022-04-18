<?php require 'Layout/header.php' ?>
<style>
    .form-div{
        margin: 10% 30% 5%;
        width: 500px;
        padding: 20px;
        border-radius: 7px;
        box-shadow: 5px 5px 15px -5px rgba(0, 0, 0, 0.2);
        background-color: #F7F7F7;
    }
    .form-div input{
        margin: 7px 0;
        font-family: Arial, Helvetica, sans-serif;
    }
    h3{
        text-align:center;
        margin: 10px 0;
    }
</style>
<div class="container">
    <div class="form-div signup">
        <h3>Signup</h3>
        <form action="Process/signup.php" method="post">
            <input class="form-control" type="text" name="firstName" placeholder="Enter your first name" required>
            <input class="form-control" type="text" name="lastName" placeholder="Enter your last name" required>
            <select name="gender" class="form-select" id="">
                <option disabled selected>Choose your gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            <input class="form-control" type="date" name="birthDate" placeholder="Enter your birth date" required>
            <input class="form-control" type="text" name="phone" placeholder="Enter your phone number" required>
            <input class="form-control" type="email" name="email" placeholder="Enter your email" required>
            <input class="form-control" type="password" name="password" placeholder="Enter your password" required>
            <button class="btn form-control" style="background-color: #7900FF; color:#fff" type="submit" name="signup-btn">Signup</button>
        </form>
    </div>
</div>
<?php require 'Layout/footer.php' ?>