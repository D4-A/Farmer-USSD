<!DOCTYPE html>  
 <html lang="en" class="no-js">  
    <?php include 'includes/head.php'; ?> 
    <body>  
    <?php include 'includes/nav.php'; ?>
        <div class="container">  
        <div style="width:800px;">
            <h2>Login</h2>
            <p>Please fill in your credentials to login.</p>
            <form action="actions/login.php" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" value="">
                    <span class="help-block"></span>
                </div>    
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                    <span class="help-block"></span>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Login">
                </div>
                <p>Don't have an account? <a href="registerForm.php">Sign up now</a>.</p>
            </form>
        </div>  
        </div>  
    </body>  
</html>