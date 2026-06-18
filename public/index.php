<?php

// require_once "../config/database.php";
require_once __DIR__ . "/../config/database.php";


$sql = "select * from todos";
$stmt = $pdo->query($sql);
$todos = $stmt->fetchALL(PDO::FETCH_ASSOC);


// データ確認
echo "DB接続成功";
echo "<pre>";
print_r($todos);
echo "</pre>";