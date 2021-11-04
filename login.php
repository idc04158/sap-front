<?php

 $search_id = $_POST["search_id_box"];
 $search_pw = $_POST["search_pw_box"];
//  echo("<h2>검색할이름</h2>".$search_name."<hr>");

 $id=mysqli_connect("localhost", "root", "","login_db" );//접속 

 $result = mysqli_query($id, "SELECT * FROM login_t 
	WHERE user_name LIKE '%$search_id%'");

 $record = mysqli_fetch_array( $result );
 echo "핸폰번호: " . $record['u_phone'];
 echo "주소: " . $record['u_addr'] . "<hr>";

 mysqli_close($id); //접속종료
?>	