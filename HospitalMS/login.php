<?php require 'Layout/header.php' ?>
<style>
    .form-div{
        margin: 10% 30%;
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
    <div class="form-div">
        <h3>Login</h3>
        <form action="Process/login.php" method="post">
            <input class="form-control" type="email" name="email" placeholder="Enter your email" required>
            <input class="form-control" type="password" name="password" placeholder="Enter your password" required>
            <button style="background-color: #7900FF; color:#fff" class="btn form-control" type="submit" name="login-btn">Login</button>
            <a href="doctorLogin.php" class="form-control btn" style="background-color: #B983FF; color:#fff">Login as a doctor</a>
        </form>
    </div>
</div>
<?php require 'Layout/footer.php' ?>