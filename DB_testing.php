<?php 

$db_id = mysqli_connect("localhost", "root", "", "temp_db"); //db_id는 db닫을 때 사용

$result= mysqli_query($db_id,
"INSERT INTO info_t( u_addr, u_name, u_phone, u_email, u_personal_id, u_tour )
VALUES('$_POST[u_addr]', '$_POST[u_name]', '$_POST[u_phone]', '$_POST[u_email]', '$_POST[u_personal_id]', '$_POST[u_tour]')");

mysqli_close($db_id);//db닫음

?>