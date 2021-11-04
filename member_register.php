
<html>
<meta charset="UTF-8">
<head>
    <meta charset="UTF-8">
    <title>member_register</title>
    <link rel="stylesheet" href="member_register.css">
</head>
<body>
<?php if($u_tour == 1){
    echo("14일 이내 해외여행 이력이 있습니다");}
    else{$u_tour == 0 ; echo ("14일 이내 해외여행 이력이 없습니다");}
    //value빈 곳이 있어서 warning이 뜨지만 지금 해결하기에는 버겁
?>
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
        <td>
            <?php echo($_POST["u_addr"])?></td>
    </tr>
    <tr>
        <td>
            핸드폰번호</td>
        <td>
            <?php echo($_POST["u_phone"])?></td>
    </tr>
    <tr>
        <td>국외여행여부</td>
        <td><?=($_POST["u_tour"])?></td>
    </tr>
    <tr>
        <td>이메일주소</td>
        <td><?=($_POST["u_email"])?></td>
    </tr>
    <tr>
        <td>주민등록번호 뒷자리</td>
        <td><?=($_POST["u_personal_id"])?></td>
    </tr>

<?php 
$db_id = mysqli_connect("localhost", "root", "", "member_db"); //db_id는 db닫을 때 사용
$result= mysqli_query($db_id,
"INSERT INTO info_t( u_addr, u_name, u_phone, u_email, u_personal_id, u_tour )
VALUES('$_POST[u_addr]', '$_POST[u_name]', '$_POST[u_phone]', '$_POST[u_email]', '$_POST[u_personal_id]', '$_POST[u_tour]')");

mysqli_close($db_id);//db닫음

?>
    
</table>
</body>