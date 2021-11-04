
<html>
<meta charset="UTF-8">
<head>
    <meta charset="UTF-8">
    <title>member_register</title>
    <link rel="stylesheet" href="member_reg.css">
</head>
<body>

<?php 
$search_name = $_GET["search_name_box"];
echo("당신이 찾는 사람은: ".$search_name."<br>");//확인해본다.

$id = mysqli_connect("localhost", "root", "", "member_db");

$result = mysqli_query($id, "SELECT * FROM info_t 
    WHERE u_name LIKE '%$search_name%'");

$record = mysqli_fetch_array( $result );
echo "핸드폰번호: " . $record['u_phone'] . "<br>";
echo "주소: " . $record['u_addr'] . "<br>";

mysqli_close($id); //접속종료
?>	