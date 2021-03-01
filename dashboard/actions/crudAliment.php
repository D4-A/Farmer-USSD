<?php
// Connect the database
require_once '../ussd/connect.php';
 
    // Define variables and initialize with empty values
    $name = $province = $prix = "";
    $name_err = $province_err = $prix_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }
    
    // Validate province
    $input_province = trim($_POST["province"]);
    if(empty($input_province)){
        $province_err = "Please enter an province.";     
    } else{
        $province = $input_province;
    }
    
    // Validate price
    $input_prix = trim($_POST["prix"]);
    if(empty($input_prix)){
        $prix_err = "Please enter the price.";     
    } elseif(!ctype_digit($input_prix)){
        $prix_err = "Please enter a positive value.";
    } else{
        $prix = $input_prix;
    }
    
    // Check input errors before inserting in database
    if(empty($name_err) && empty($province_err) && empty($prix_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO aliments (name, province, prix) VALUES (?, ?, ?)";
 
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("sss", $param_name, $param_province, $param_prix);
            
            // Set parameters
            $param_name = $name;
            $param_province = $province;
            $param_prix = $prix;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Records created successfully. Redirect to landing page
                header("location: ../aliment.php");
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