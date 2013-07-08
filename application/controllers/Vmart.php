<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vmart extends CI_Controller {

    public function index() {
        
        $this->load->view('landingpage');
    }

}
function validate_credentials()
	{
		
		$this->load->helper('url');
		$this->load->model('membership_model');
		$query = $this->membership_model->validate();
		
		if($query) // if the user's credentials validated...
		{
			$data = array(
				'username' => $this->input->post('username'),
				'is_logged_in' => true
			);
			$this->session->set_userdata($data);
			redirect('Vmart/user_logged_in');
		}
		else // incorrect username or password
		{
			$this->index();
		}
	}
        
        function create_member()
	{
		
		
	}
        
?>
