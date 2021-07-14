<?php
header('Content-Type: application/json');
$conn = mysqli_connect("localhost","root","","project_uas_bpwl");
$sqlQuery = "SELECT tahun as tahun,
            lionair, citylink, airasia, batik FROM grafik
            ORDER BY tahun ASC";
$result = mysqli_query($conn,$sqlQuery);
$data = array();
foreach ($result as $row){
    $data[] = $row;
}
mysqli_close($conn);
echo json_encode($data);
?>