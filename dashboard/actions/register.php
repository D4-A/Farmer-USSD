<?php
    // Include connect file
    require_once '../ussd/connect.php';
 
    // Define variables and initialize with empty values
    $username = $email = $telephone = $password = $confirm_password = "";
    $username_err = $email_err = $telephone_err = $password_err = $confirm_password_err = "";
 
    // Processing form data when form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    
        // Validate username
        if(empty(trim($_POST["username"]))){
            $username_err = "Please enter a username.";
        } else{
            // Prepare a select statement
            $sql = "SELECT id FROM users WHERE username = ?";
            
            if($stmt = $mysqli->prepare($sql)){
                // Bind variables to the prepared statement as parameters
                $stmt->bind_param("s", $param_username);
                
                // Set parameters
                $param_username = trim($_POST["username"]);
                
                // Attempt to execute the prepared statement
                if($stmt->execute()){
                    // store result
                    $stmt->store_result();
                    
                    if($stmt->num_rows == 1){
                        $username_err = "This username is already taken.";
                    } else{
                        $username = trim($_POST["username"]);
                    }
                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }

                // Close statement
                $stmt->close();
            }
        }

        // Validate email
        if(empty(trim($_POST["email"]))){
            $email_err = "Please enter an email.";     
        } elseif(strlen(trim($_POST["email"])) < 6){
            $email_err = "email must have include an @.";
        } else{
            $email = trim($_POST["email"]);
        }

        // Validate telephone
        if(empty(trim($_POST["telephone"]))){
            $telephone_err = "Please enter a valid telephone number.";     
        } elseif(strlen(trim($_POST["telephone"])) < 6){
            $telephone_err = "telephone must have atleast 9 characters.";
        } else{
            $telephone = trim($_POST["telephone"]);
        }
        
        // Validate password
        if(empty(trim($_POST["password"]))){
            $password_err = "Please enter a password.";     
        } elseif(strlen(trim($_POST["password"])) < 6){
            $password_err = "Password must have atleast 6 characters.";
        } else{
            $password = trim($_POST["password"]);
        }
        
        // Validate confirm password
        if(empty(trim($_POST["confirm_password"]))){
            $confirm_password_err = "Please confirm password.";     
        } else{
            $confirm_password = trim($_POST["confirm_password"]);
            if(empty($password_err) && ($password != $confirm_password)){
                $confirm_password_err = "Password did not match.";
            }
        }
        
        // Check input errors before inserting in database
        if(empty($username_err) && empty($telephone_err) && empty($email_err) && empty($password_err) && empty($confirm_password_err)){
            
            // Prepare an insert statement
            $sql = "INSERT INTO users (username, telephone, email, pwd) VALUES (?, ?, ?, ?)";
            
            if($stmt = $mysqli->prepare($sql)){
                // Bind variables to the prepared statement as parameters
                $stmt->bind_param("ssss", $param_username, $param_telephone, $param_email, $param_password);
                
                // Set parameters
                $param_username = $username;
                $param_telephone = $telephone;
                $param_email = $email;
                $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
                
                // Attempt to execute the prepared statement
                if($stmt->execute()){
                    // Redirect to login page
                    header("location: ../loginForm.php");
                } else{
                    echo "Something went wrong. Please try again later.";
                }

                // Close statement
                $stmt->close();
            }
        }
        
        // Close connection
        $mysqli->close();
    }
?>