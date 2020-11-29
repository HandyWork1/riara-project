<?php

//Include config file
require_once "config.php"; 

//Declaring variables
$name = $email = $phone = $date = $time = $message =  "";
$name_err = $email_err = $phone_err = $date_err = $time_err = $message_err =  "";

//Processing reservation data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Validate name
    if (empty(trim($_POST["name"]))) {
        $name_err = "Please enter a name";
    } else {
        $name = trim($_POST["name"]);
    }

    //Validate email
    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter an email.";
    } else {
        $email = trim($_POST["email"]);
    }

    //Validate phone number
    if (empty(trim($_POST["phone"]))) {
        $phone_err = "Please enter a phone number.";
    } else {
        $phone = trim($_POST["phone"]);
    }

    //Validate date
    if (empty(trim($_POST["date"]))) {
        $date_err = "Please choose a date.";
    } else {
        $date = trim($_POST["date"]);
    }

    //validate time
    if (empty(trim($_POST["time"]))) {
        $time_err = "Please select a time.";
    } else {
        $time = trim($_POST["time"]);
    }

    //Validate message
    if (empty(trim($_POST["message"]))) {
        $message_err = "Please write a message.";
    } else {
        $message = trim($_POST["message"]);
    }
    
    // Check input errors before inserting in database
    if (empty($name_err) && empty($email_err) && empty($phone_err) && empty($date_err) && empty($time_err) && empty($message_err)) {

        // Prepare an insert statement
        $sql = "INSERT INTO reservation (name, email, phone, date, time, message) VALUES (?, ?, ?, ?, ?, ?)";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssisss", $param_name, $param_email, $param_phone, $param_date,  $param_time, $param_message);

            // Set parameters
            $param_name = $name;
            $param_email = $email;
            $param_phone = $phone;
            $param_date = $date;
            $param_time = $time;
            $param_message = $message;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Redirect to contact page
                header("location: reservation.html");
            } else {
                echo "Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Close connection
    mysqli_close($link);
}


?>