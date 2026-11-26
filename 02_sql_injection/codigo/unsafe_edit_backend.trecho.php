<?php
$stmt = $conn->prepare("UPDATE credential SET nickname=?, email=?, address=?, Password=?, PhoneNumber=? WHERE ID=?");
if ($stmt === false) { die("Prepared statement unavailable"); }
$stmt->bind_param("sssssi", $input_nickname, $input_email, $input_address, $hashed_pwd, $input_phonenumber, $id);
if (!$stmt->execute()) { die("Update failed"); }
$_SESSION['pwd'] = $hashed_pwd;

// if passowrd field is empty.
$stmt = $conn->prepare("UPDATE credential SET nickname=?, email=?, address=?, PhoneNumber=? WHERE ID=?");
if ($stmt === false) { die("Prepared statement unavailable"); }
$stmt->bind_param("ssssi", $input_nickname, $input_email, $input_address, $input_phonenumber, $id);
if (!$stmt->execute()) { die("Update failed"); }
