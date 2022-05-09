<?php
require('creddb.php');
$sql = "CREATE TABLE Statement (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Description VARCHAR(60) NOT NULL,
userid VARCHAR(60) NOT NULL,
refid VARCHAR(30) NOT NULL,
withdrawl VARCHAR(30) NOT NULL,
balance VARCHAR(60) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP

)";



$sql = "INSERT INTO Statement (Description, userid, refid,withdrawl,balance)
VALUES ('ATM WITHDRAWL','18BCE7032','110','7000',8000)";


if (mysqli_query($conn, $sql)) {
  echo "   successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}
?>