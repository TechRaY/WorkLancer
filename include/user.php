<?php

include_once 'db.php';

class User{
	
	
	
	public function isLoginExist($username, $password){		
				
		$query = "select * from users where EmailID = '$username' AND Password = '$password' Limit 1";

		$result = mysqli_query($con,$query);
		if(mysqli_num_rows($result) > 0){
			//mysqli_close($this->db->getDb());
			return true;
		}		
		//mysqli_close($this->db->getDb());
		return false;		
	}
	
	public function createNewRegisterUser($name, $password,$skillsets,$linkedin,$email,$contact){


			
		$query = "insert into users(Username, Password, SkillSets,LinkedInID,EmailID, Mobile) values ('$name', '$password','$skillsets','$linkedin',$email,'$contact')";

		

		$inserted = mysqli_query($con, $query);
		echo $inserted;


		if($inserted == 1){
			$json['success'] = 1;									
		}else{
			$json['success'] = 0;
		}
		//mysqli_close($this->db->getDb());
		return $json;
	}
	
	public function loginUsers($username, $password){
			
		$json = array();
		$canUserLogin = isLoginExist($username, $password);
		if($canUserLogin){
			$json['success'] = 1;
		}else{
			$json['success'] = 0;
		}
		return $json;
	}

}


?>