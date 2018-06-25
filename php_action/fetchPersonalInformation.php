<?php 	

require_once 'core.php';

$userId = $_POST['userId'];

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

$query = "SELECT firstname FROM personal_information WHERE userId = $userId";
$data = mysqli_query($dbc, $query);

if(mysqli_num_rows($data) == 1) { 
    
    $row = mysqli_fetch_array($data);
} // if num_rows

mysqli_close($dbc);

echo json_encode($row);