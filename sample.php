<?php
echo 'Hello!';

$servername = getenv('IP');
$username = getenv('C9_USER');
$password = "";
$database = "c9";
$dbport = 3306;

$db = new mysqli($servername,$username,$password,$database,$dbport);

if($db->connect_error){
    die("Connection Failed:". $db->connect_error);
}
echo "Connected successfully (".$db->host_info.")";

$sql = "INSERT INTO dep (dept_no, dept_name) VALUES(1, 'datasel')";

if($db->query($sql)===TRUE){
    echo "New record created successfully";
}
else{
    echo "Error: " .$sql . "<br>" . $db->error;
}

$db->close();
?>