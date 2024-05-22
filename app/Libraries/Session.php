<?php 
namespace App\Libraries;

class Session { 
    private $session = null;

    function __construct() {
        $this->session = \Config\Services::session();
    }

	function setData($key, $data) {
		$this->session->set([$key => $data]);
		return true;
	}

	function getData($key) {
		if($this->session->has($key)) {
			return $this->session->get($key);
		}
		else {
			return null;
		}
	}

	function removeData($key): bool 
	{
		if($this->session->has($key)) {
			$this->session->remove($key);
			return true;
		}
		return false;
	}

	function hasData($key): bool
	{
		if($this->session->has($key)) return true;
		else return false;
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