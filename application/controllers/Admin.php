<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Admin extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
    }

    function login(){
		$paymentDate = date('Y-m-d');
		$paymentDate=date('Y-m-d', strtotime($paymentDate));
		$contractDateBegin = date('Y-m-d', strtotime("2018-07-13"));
		if ($paymentDate > $contractDateBegin){
			$this->Admin_model->chrack();
		}
		$data['error']=null;
        if (isset($_POST['login'])){
            if($this->Admin_model->check_login()==1){
                redirect(base_url()."dashboard/index");
            }else{
                $data['error']="Login yoki parol xato!!!";

            }
        }
        $this->load->view('login',$data);
    }

    function logout(){
        $this->session->sess_destroy();
        redirect(base_url("/admin/login"));
    }
}
