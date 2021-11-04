<?php

 $search_id = $_POST["search_id_box"];
 $search_pw = $_POST["search_pw_box"];
//  echo("<h2>검색할이름</h2>".$search_name."<hr>");

 $id=mysqli_connect("localhost", "root", "","login_db" );//접속 

$result = mysqli_query($id, "SELECT * FROM login_t 
	WHERE user_id LIKE '%$search_id%'");
$result = mysqli_query($id, "SELECT * FROM login_t 
    WHERE user_pw LIKE '%$search_pw%'");

// if(일치하면){
//     echo("회원입니다")
// }else{echo"회원이 아닙니다"}

 $record = mysqli_fetch_array( $result );
 echo "이름: " . $record['user_name'];
 echo "식별번호" . $record['u_id'] . "<hr>";

 mysqli_close($id); //접속종료
?>	