<?php
include_once './sql_con.php';
$mode = filter_input(INPUT_GET, "mode");
$data = filter_input(INPUT_GET, "data");

echo "Hello";

if ($mode === "REGISTER") {
    $stmt = $link->prepare('INSERT INTO __user_registration(name,username,email,mobile,role)VALUES(?,?,?,?)');
    $stmt->bind_param('sssis', $data['name'], $data['username'], $data['email'], $data['mobile'], $data['role']);
    $stmt->execute();
    if ($stmt->error) exit($stmt->error . "Failure");
    print_r($mode . " success" . json_encode($data));
    exit();
}
