<?php

 $search_id = $_POST["search_id_box"];
 $search_pw = $_POST["search_pw_box"];
//  echo("<h2>검색할이름</h2>".$search_name."<hr>");

 $id=mysqli_connect("localhost", "root", "","login_db" );//접속 

 //입력받은 값과 같은걸 찾아서 result에 저장해라
$result_id = mysqli_query($id, "SELECT * FROM login_t 
	WHERE user_id LIKE '%$search_id%'");
$result_pw = mysqli_query($id, "SELECT * FROM login_t 
    WHERE user_pw LIKE '%$search_pw%'");

//쿼리 받아온 정보를 가져오기
$record_id = mysqli_fetch_array( $result_id );
$record_pw = mysqli_fetch_array( $result_pw );

//검색어랑 db에 있는 내용이랑 일치하면 회원여부를 print
if(record_id == search_id && record_id == search_id ){
    echo("회원입니다");
}else{echo("회원이 아닙니다");}



 echo "이름: " . $record['user_name'];
 echo "식별번호" . $record['u_id'] . "<hr>";

 mysqli_close($id); //접속종료
?>	