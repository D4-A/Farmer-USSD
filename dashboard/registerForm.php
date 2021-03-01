<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>

<body>
    <?php include 'includes/nav.php'; ?>
    <div class="container">
        <div style="padding-bottom:20px;width:800px;">
            <h2>Sign Up</h2>
            <p>Please fill this form to create an account.</p>
            <form action="actions/register.php" method="post">
                <div class="form-group ">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" value="">
                    <span class="help-block"></span>
                </div>
                <div class="form-group ">
                    <label>Telephone</label>
                    <input type="text" name="telephone" class="form-control" value="">
                    <span class="help-block"></span>
                </div>
                <div class="form-group ">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="">
                    <span class="help-block"></span>
                </div>    
                <div class="form-group ">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" value="">
                    <span class="help-block"></span>
                </div>
                <div class="form-group ">
                    <label>Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control" value="">
                    <span class="help-block"></span>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Submit">
                    <input type="reset" class="btn btn-default" value="Reset">
                </div>
                <p>Already have an account? <a href="loginForm.php">Login here</a>.</p>
            </form>
        </div>
    </div>
</body>
</html>