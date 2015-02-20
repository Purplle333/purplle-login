<?php
function getDetails($name)
{
	$books = array(
		"php"=>200,
		"java"=>300,
		"c"=>400
	);
	
		foreach($books as $book=>$price)
	{
		if($book==$name)
		{
			return $price;
			break;
		}
	}
}

// public function get_user($email)
// {
		// $sql = mysql_query("SELECT id, username, email, city, sport FROM profile WHERE email = $email", $this->db);
		// if(mysql_num_rows($sql) > 0)
		// {
		// $result = array();
		// while($rlt = mysql_fetch_array($sql,MYSQL_ASSOC))
		// {
		// $result[] = $rlt;
		// }
		// // If success everythig is good send header as "OK" and return list of users in JSON format
		// $this->response($this->json($result), 200);
		// }
// }
?>