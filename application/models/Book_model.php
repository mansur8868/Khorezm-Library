<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Book_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get book by id
     */
    function get_book($id)
    {
        return $this->db->get_where('books',array('id'=>$id))->row_array();
    }
    
    /*
     * Get all books count
     */
    function get_all_books_count()
    {
        $this->db->from('books');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all books
     */
    function get_all_books($params = array())
    {
        $this->db->select("books.*, booktypes.name as typename");
        $this->db->join('booktypes',"booktypes.id=books.booktypes_id");
        $this->db->order_by('id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('books')->result_array();
    }
        
    /*
     * function to add new book
     */
    function add_book($params)
    {
        $this->db->insert('books',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update book
     */
    function update_book($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('books',$params);
    }
    
    /*
     * function to delete book
     */
    function delete_book($id)
    {
        return $this->db->delete('books',array('id'=>$id));
    }

    function get_book_by_type($id){
        return $this->db->get_where('books',array('booktypes_id'=>$id))->result_array();

    }
}
