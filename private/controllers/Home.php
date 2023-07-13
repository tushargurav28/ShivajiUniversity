<?php

/**
 *   home controller
 */
class Home extends Controller
{
	function index()
	{
		
		// $User = $this->load_model('User'); 
		$user = new User();
		// $data = $db->query("select * from users");
		// $data = $User->where('firstname','tushar'); 
	

		$arr['firstname'] = "tushar";
		// $arr['lastname'] = "Gurav";
		// $arr['date'] = "2023-07-09 21:08:20";
		// $arr['user_id'] = "2018003460";
		// $arr['gender'] = "male";
		// $arr['school_id'] = "2018003460";
		// $arr['rank'] = "student";
		

		$id = 33;
		// $user->insert($arr);                  
		$user->update($id ,$arr);
		// $user->delete($id);
		$data = $user->findAll();



		$this->view('home',['rows'=>$data]);
	}
}
?>