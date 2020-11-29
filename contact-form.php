<?php

//Include config file
require_once "config.php";

//Define variables
$name = $email = $subject = $message = "";
$name_err = $email_err = $subject_err = $message_err = "";

//Processing form data
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

    //Validate subject
    if (empty(trim($_POST["subject"]))) {
        $subject_err = "Please enter subject.";
    } else {
        $subject = trim($_POST["subject"]);
    }

    //Validate message
    if (empty(trim($_POST["message"]))) {
        $message_err = "Please enter a message.";
    } else {
        $message = trim($_POST["message"]);
    }

    // Check input errors before inserting in database
    if (empty($name_err) && empty($email_err) && empty($subject_err) && empty($message_err)) {

        // Prepare an insert statement
        $sql = "INSERT INTO contact (name, email, subject, message) VALUES (?, ?, ?, ?)";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssss", $param_name, $param_email, $param_subject, $param_message);

            // Set parameters
            $param_name = $name;
            $param_email = $email;
            $param_subject = $subject;
            $param_message = $message;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Redirect to contact page
                header("location: contact-form.html");
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
 