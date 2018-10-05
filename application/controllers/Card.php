<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Card extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Card_model');
        $this->load->model('User_model');

    }
    public function index($id){
        $data['user'] = $this->User_model->get_user($id);
        $data['cards'] = $this->Card_model->get_user_cards($id);
        $data['_view'] = 'card/index';
        $this->load->view('layouts/main',$data);
    }

    public function history($id){
        $data['user'] = $this->User_model->get_user($id);
        $data['cards'] = $this->Card_model->get_user_cards_history($id);
        $data['_view'] = 'card/history';
        $this->load->view('layouts/main',$data);
    }

    public function addbook($id){
        $this->load->model('Booktype_model');
        $data['all_booktypes'] = $this->Booktype_model->get_all_booktypes();
        $data['user_id'] = $id;
        $data['_view'] = 'card/addbook';
        $this->load->view('layouts/main',$data);
    }

    function save($user_id){
        $params = [
            'booksinn_id' => $this->input->post('booksinn'),
            'user_id' => $user_id,
            'takedate' => date('Y-m-d'),
            'status' =>0,
        ];
        $this->Card_model->add_card($params);
        $this->load->model('Booksinn_model');
        $this->Booksinn_model->update_booksinn($this->input->post('booksinn'),array('user_id'=>$user_id));
        redirect('/card/index/'.$user_id);
    }


    function cardoff($id,$user_id,$booksinn_id){
        $this->Card_model->update_card($id,array('status'=>1,'returndate'=>date('Y-m-d')));
        $this->load->model('Booksinn_model');
        $this->Booksinn_model->update_booksinn($booksinn_id,array('user_id'=>0));
        redirect('/card/index/'.$user_id);

    }
}