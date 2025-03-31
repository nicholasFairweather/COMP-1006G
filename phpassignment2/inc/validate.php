<?php
    $username = $_POST['username'];
    $password = hash('sha512', $_POST['password']);

    require_once 'database.php';


//set up and run the query
    $sql = "SELECT userId FROM phpUsers WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

$count = $result -> rowCount();

//check if anything matches 
if ($count == 1){
    echo "Logged in Successfully";

    foreach($result as $row){
    session_start();
    $_SESSION['userId'] = $row['userId'];
    }
    
}
else{
    echo "Invalid Login";
}
$conn = null;

?>
