<?php
//start a new session
session_start();

//fetch new user details
$name = $_POST["usrname"];
$email = $_POST["email"];
$passcode = $_POST["psw"];
$re_passcode = $_POST["re_password"];
$contact = $_POST["contact"];

//server and database details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

//check if both passwords match
if ($passcode == $re_passcode) {
    //create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    //check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    //create query to insert data
    $sql = "INSERT INTO details (name, email, password, contact)
        VALUES ('$name', '$email', '$passcode', '$contact')";

    //check query execution
    if ($conn->query($sql) === true) {
        $_SESSION["user"] = $name;
        $_SESSION["email"] = $email;
        $_SESSION["contact"] = $contact;
        //echo "Sign up successful";
        header("Location: http://localhost/final_project_sdp/profile.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>