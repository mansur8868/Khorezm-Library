<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class User extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    } 

    /*
     * Listing of users
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('user/index?');
        $config['total_rows'] = $this->User_model->get_all_users_count();
        $this->pagination->initialize($config);

        $data['users'] = $this->User_model->get_all_users($params);
        
        $data['_view'] = 'user/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new user
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('fname','Fname','required');
		$this->form_validation->set_rules('lname','Lname','required');
		$this->form_validation->set_rules('passport','Passport','required');
		$this->form_validation->set_rules('birthdate','Birthdate','required');
		$this->form_validation->set_rules('tel','Tel','required');
		$this->form_validation->set_rules('address','Address','required');
		
		if($this->form_validation->run())     
        {
            $arr = explode('/', $this->input->post('birthdate'));
            $params = [
				'fname' => $this->input->post('fname'),
				'lname' => $this->input->post('lname'),
				'passport' => $this->input->post('passport'),
				'birthdate' =>$arr[2].'-'.$arr[1].'-'.$arr[0],
				'tel' => $this->input->post('tel'),
				'address' => $this->input->post('address'),
				'educationorwork' => $this->input->post('educationorwork'),
            ];

            $user_id = $this->User_model->add_user($params);
            redirect('user/index');
        }
        else
        {            
            $data['_view'] = 'user/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a user
     */
    function edit($id)
    {   
        // check if the user exists before trying to edit it
        $data['user'] = $this->User_model->get_user($id);
        
        if(isset($data['user']['id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('fname','Fname','required');
			$this->form_validation->set_rules('lname','Lname','required');
			$this->form_validation->set_rules('passport','Passport','required');
			$this->form_validation->set_rules('birthdate','Birthdate','required');
			$this->form_validation->set_rules('tel','Tel','required');
			$this->form_validation->set_rules('address','Address','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'fname' => $this->input->post('fname'),
					'lname' => $this->input->post('lname'),
					'passport' => $this->input->post('passport'),
					'birthdate' => $this->input->post('birthdate'),
					'tel' => $this->input->post('tel'),
					'address' => $this->input->post('address'),
					'educationorwork' => $this->input->post('educationorwork'),
                );

                $this->User_model->update_user($id,$params);            
                redirect('user/index');
            }
            else
            {
                $data['_view'] = 'user/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The user you are trying to edit does not exist.');
    } 

    /*
     * Deleting user
     */
    function remove($id)
    {
        $user = $this->User_model->get_user($id);

        // check if the user exists before trying to delete it
        if(isset($user['id']))
        {
            $this->User_model->delete_user($id);
            redirect('user/index');
        }
        else
            show_error('The user you are trying to delete does not exist.');
    }
    
}
