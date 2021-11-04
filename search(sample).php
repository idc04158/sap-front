<?php

 $search_name = $_GET["search_name_box"];  //검색어전달받음
 echo("<h2>검색할이름</h2>".$search_name."<hr>");//확인해본다.

 $id=mysqli_connect("localhost", "root", "","member_db" );//접속 

 // 실제로 검색하는 파트 
 $result = mysqli_query($id, "SELECT * FROM member_t 
	WHERE u_name LIKE '%$search_name%'");

 $record = mysqli_fetch_array( $result );
 echo "핸폰번호: " . $record['u_phone'];
 echo "주소: " . $record['u_addr'] . "<hr>";

 mysqli_close($id); //접속종료
?>	