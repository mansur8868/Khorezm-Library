<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Card_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get card by id
     */
    function get_card($id)
    {
        return $this->db->get_where('cards',array('id'=>$id))->row_array();
    }

    function get_user_cards($id)
    {
        $this->db->select("cards.*, books.name as bookname,booksinn.inn");
        $this->db->join('booksinn','booksinn.id=cards.booksinn_id','inner');
        $this->db->join('books','books.id=booksinn.books_id','inner');
        return $this->db->get_where('cards',array('cards.user_id'=>$id,'cards.status'=>0))->result_array();
    }

    function get_user_cards_history($id)
    {
        $this->db->select("cards.*, books.name as bookname,booksinn.inn");
        $this->db->join('booksinn','booksinn.id=cards.booksinn_id','inner');
        $this->db->join('books','books.id=booksinn.books_id','inner');
        return $this->db->get_where('cards',array('cards.user_id'=>$id,'cards.status'=>1))->result_array();
    }
        
    /*
     * Get all cards
     */
    function get_all_cards()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('cards')->result_array();
    }
        
    /*
     * function to add new card
     */
    function add_card($params)
    {
        $this->db->insert('cards',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update card
     */
    function update_card($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('cards',$params);
    }
    
    /*
     * function to delete card
     */
    function delete_card($id)
    {
        return $this->db->delete('cards',array('id'=>$id));
    }

    function get_all_card_count(){
        $this->db->from('cards');
        return $this->db->count_all_results();
    }
}

