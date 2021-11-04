
<html>
<meta charset="UTF-8">
<head>
    <meta charset="UTF-8">
    <title>member_register</title>
    <link rel="stylesheet" href="member_reg.css">
</head>
<body>
<table border =2>
    <tr>
        <td class="table_name">
            회원가입정보</td>
    </tr>
    <tr>
        <td>이름</td>
        <td><?=($_POST["u_name"])?></td>
    </tr>
    <tr>
        <td>
            주소</td>
        <td bgcolor = gray>
            <?php echo($_POST["u_addr"])?></td>
    </tr>
    <tr>
        <td>
            핸드폰번호</td>
        <td>
            <?php echo($_POST["u_phone"])?></td>
    </tr>
    
</table>

<?php 
$id = mysqli_connect("localhost", "root", "", "info_db");

$result= mysqli_query($id, 
"INSERT INTO info_t( u_addr, u_name, u_phone )
VALUES('$_POST[u_addr]', '$_POST[u_name]', '$_POST[u_phone]')");

// $result= mysqli_query($id, 
// "INSERT INTO info_t( u_addr, u_name, u_phone )
// VALUES('kang', 'incheon', '010-7797-6892)");
mysqli_close($id);

?>
</body>