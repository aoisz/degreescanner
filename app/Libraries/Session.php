<?php 
namespace App\Libraries;

class Session { 
    private $session = null;

    function __construct() {
        $this->session = \Config\Services::session();
    }

    function setUserSession($student_id){
		$data = [
			'student_id' => $student_id,
			'isLoggedIn' => true
		];
        $this->session->set($data);
		return true;
	} 
    
    public function logout(){
		$this->session->destroy();
		return true;
	}
}