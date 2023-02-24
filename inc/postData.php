<?php
session_start();


// initialise variables
$values = $errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($_POST as $key => $post) {
        $values[$key] = trim(filter_input(INPUT_POST, $key, FILTER_SANITIZE_STRING));
        $errors[$key] = "";
        if (empty($values[$key])) {
            $errors[$key] = "Please enter ";
            switch ($key) {
                case "fname":
                case "lname":
                case "email": 
                    $errors[$key] .= 'your ' . $key . '.';
                    break;
                case "message":
                    $errors[$key] .= 'a ' . $key . '.';
                    break;
            }
        }
    }
    
    
    if (!filter_var($values["email"], FILTER_VALIDATE_EMAIL) && empty($errors["email"])) {
        $errors["email"] = "Please enter a valid email";
    }


    $_SESSION['errors'] = $errors;
    // insert values into table 
    if (empty(implode('', $errors))) {
        add_contact($values);
    } else {
        $_SESSION['success'] = false;
        $_SESSION['values'] = $values;
    } 
    
}
header('Location:'.$_SERVER['HTTP_REFERER'].'#form');
exit;



function add_contact($values) {
    include('connection.php');
    try {
        $results = $db->prepare("
            INSERT INTO `contact_form` (`fname`, `lname`, `email`, `message`) 
            VALUES (?, ?, ?, ?);
        ");
        $results->bindParam(1, $values["fname"], PDO::PARAM_STR);
        $results->bindParam(2, $values["lname"], PDO::PARAM_STR);
        $results->bindParam(3, $values["email"], PDO::PARAM_STR);
        $results->bindParam(4, $values["message"], PDO::PARAM_STR);

        $results->execute();
        $_SESSION['success'] = true;
    } catch (Exception $e) {
        echo $e->getMessage();
        $_SESSION['success'] = false;
    }
}
