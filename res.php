<?php
header('Content-Type: application/json');
$con = mysqli_connect("10.200.99.234", "ruth", "password", "hackatec");
if (mysqli_connect_errno($con)) {
    echo "Failed to connect to DataBase: " . mysqli_connect_error();
} else {
    $data_points = array();
    $result = mysqli_query($con, "SELECT porcentage FROM registro_agua"); 
    while ($row = mysqli_fetch_array($result)) {
        $point = array("valor" => $row['porcentage']);
        array_push($data_points, $point);
    }
    echo json_encode($data_points);
}
mysqli_close($con);
?>