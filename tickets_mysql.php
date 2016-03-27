<?php
session_start();

if(isset($_POST['VerifyName'])){
    
    $_SESSION['testvalue'] = $_POST['name_txtbox'];
    $con = new mysqli("localhost", "root", "chebon01", "busbook");

$value = $_SESSION['testvalue'];

$query = mysqli_query($con, "SELECT * FROM ticketmsafiri01 WHERE Name='".$value."'");

if(mysqli_num_rows($query) > 0){

    echo "User is verified and OK";
}else{
    // do something
    echo "User doesn't exist, please check other fields.";
}

} else if(isset($_POST['VerifyId'])){
    
    $_SESSION['testvalue'] = $_POST['id_txtbox'];
    $con = new mysqli("localhost", "root", "", "busbook");

$value = $_SESSION['testvalue'];

$query = mysqli_query($con, "SELECT * FROM ticketmsafiri01 WHERE Idno='".$value."'");

if(mysqli_num_rows($query) > 0){

    echo "User is verified and OK";
}else{
    // do something
    echo "User doesn't exist, please check other fields.";
}

} else if(isset($_POST['VerifyPhone'])){
    
    $_SESSION['testvalue'] = $_POST['phone_txtbox'];
    $con = new mysqli("localhost", "root", "", "busbook");

$value = $_SESSION['testvalue'];

$query = mysqli_query($con, "SELECT * FROM ticketmsafiri01 WHERE Phone='".$value."'");

if(mysqli_num_rows($query) > 0){

    echo "User is verified and OK";
}else{
    // do something
    echo "User doesn't exist, please check other fields.";
}

}

echo "<br />";
?>

<html>
    <head>
        <style type="text/css">
            a {
                text-decoration: none;
                font-size: 17px;
            }
        </style>
    </head>
    <body>
        <a href="ticket verify.php">Go back</a>
    </body>
</html>