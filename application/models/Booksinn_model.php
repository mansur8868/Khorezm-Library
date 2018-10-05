<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Booksinn_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get booksinn by id
     */
    function get_booksinn($id)
    {
        return $this->db->get_where('booksinn',array('id'=>$id))->row_array();
    }
    
    /*
     * Get all booksinn count
     */
    function get_all_booksinn_count()
    {
        $this->db->from('booksinn');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all booksinn
     */
    function get_all_booksinn($params = array())
    {
        $this->db->select("booksinn.*, books.name as bookname");
        $this->db->join('books','books.id=booksinn.books_id','inner');
        $this->db->order_by('id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('booksinn')->result_array();
    }
        
    /*
     * function to add new booksinn
     */
    function add_booksinn($params)
    {
        $this->db->insert('booksinn',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update booksinn
     */
    function update_booksinn($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('booksinn',$params);
    }
    
    /*
     * function to delete booksinn
     */
    function delete_booksinn($id)
    {
        return $this->db->delete('booksinn',array('id'=>$id));
    }

    function get_bookinn_by_book($id){
        return $this->db->get_where('booksinn',array('books_id'=>$id,'user_id'=>0))->result_array();

    }
}
