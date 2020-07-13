<?php
//start a new session
session_start();
//fetch details
$name = $_POST["username"];
$passcode = $_POST["password"];

//database and server details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//create sql query
$sql = "SELECT * FROM details WHERE name='$name' && password='$passcode'";

//execute the query
$result = $conn->query($sql);

//check the result
if ($result->num_rows > 0) {
    //output of each row
    while ($row = $result->fetch_assoc()) {
        $_SESSION["id"] = $row["id"];
        $_SESSION["user"] = $row["name"];
        $_SESSION["contact"] = $row["contact"];
        $_SESSION["email"] = $row["email"];

        //redirect to logged in home page
        header("Location: http://192.168.64.2/logged_in_homepage.php");
    }
} else {
    echo "0 results";
}

$conn->close();
?>