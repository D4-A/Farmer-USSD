<?php
    // Include config file
    require_once "../ussd/connect.php";
    
    // Define variables and initialize with empty values
    $username = $telephone = $email = $pwd = "";
    $username_err = $telephone_err = $email_err = $pwd_err = "";
    
    // Processing form data when form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        // Validate username
        $input_username = trim($_POST["name"]);
        if(empty($input_username)){
            $username_err = "Please enter a username.";
        } elseif(!filter_var($input_username, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
            $username_err = "Please enter a valid username.";
        } else{
            $username = $input_username;
        }
        
        // Validate telephone
        $input_telephone = trim($_POST["telephone"]);
        if(empty($input_telephone)){
            $telephone_err = "Please enter a telephone.";     
        } else{
            $telephone = $input_telephone;
        }
        
        // Validate email
        $input_email = trim($_POST["email"]);
        if(empty($input_email)){
            $email_err = "Please enter the email.";     
        } elseif(!ctype_digit($input_email)){
            $email_err = "Please enter a positive value.";
        } else{
            $email = $input_email;
        }
        
        // Check input errors before inserting in database
        if(empty($name_err) && empty($address_err) && empty($salary_err)){
            // Prepare an insert statement
            $sql = "INSERT INTO provinces (name) VALUES (?)";
    
            if($stmt = $mysqli->prepare($sql)){
                // Bind variables to the prepared statement as parameters
                $stmt->bind_param("s", $param_name);
                
                // Set parameters
                $param_name = $name;
                
                // Attempt to execute the prepared statement
                if($stmt->execute()){
                    // Records created successfully. Redirect to landing page
                    header("location: ../province.php");
                    exit();
                } else{
                    echo "Something went wrong. Please try again later.";
                }
                
            }
            
            // Close statement
            $stmt->close();
        }
        
        // Close connection
        $mysqli->close();
    }
?>