<?php
$mysqli = new mysqli("localhost", "root", "root", "brian", 8889);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";


$sql = 'select * from inventory';

$result = $mysqli->query($sql);

while($row = $result->fetch_assoc()){

    echo '<pre>';
    print_r($row);
    echo '</pre>';
}
