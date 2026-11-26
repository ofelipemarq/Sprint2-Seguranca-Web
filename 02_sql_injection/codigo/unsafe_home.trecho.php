<?php
session_start();
$input_uname = $_GET['username'];
$input_pwd = $_GET['Password'];
$hashed_pwd = sha1($input_pwd);

$conn = getDB();
// Sql query to authenticate the user
$sql = "SELECT id, name, eid, salary, birth, ssn, phoneNumber, address, email, nickname, Password
FROM credential WHERE name=? and Password=?";
$stmt = $conn->prepare($sql);
if ($stmt === false || !$stmt->bind_param("ss", $input_uname, $hashed_pwd)
    || !$stmt->execute() || !($result = $stmt->get_result())) {
    echo "</div>";
    echo "</nav>";
    echo "<div class='container text-center'>";
    die('There was an error running the query [' . $conn->error . ']\n');
    echo "</div>";
}
