<?php
// Terima data dari ESP8266
$data_from_esp = $_POST['sensor_data']; // Misalnya, data yang dikirim adalah 'sensor_data'

// Lakukan proses data di sini, misalnya, simpan ke database
// Contoh:
$db_connection = mysqli_connect("localhost", "root", " ", "monitoring_system");
mysqli_query($db_connection, "INSERT INTO sensor_data_table (data) VALUES ('$data_from_esp')");

// Kirim respons kembali ke ESP8266
$response = array("status" => "success", "message" => "Data received and processed successfully");
echo json_encode($response);
?>