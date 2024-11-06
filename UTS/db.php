<?php
$serverName = "your_server_name"; // e.g., "localhost" or "127.0.0.1"
$connectionOptions = [
    "Database" => "your_database_name",
    "Uid" => "your_username",
    "PWD" => "your_password",
];

// Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);

if (!$conn) {
    die(print_r(sqlsrv_errors(), true));
}
?>
