
<html>
<meta charset="UTF-8">
<head>
    <meta charset="UTF-8">
    <title>member_register</title>
    <link rel="stylesheet" href="member_register.css">
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
    
</table>
</body>