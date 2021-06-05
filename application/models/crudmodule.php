<?php

class CrudModule extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    
    public function insertData($post_image)
    {
        //USer data array
        $data = array(
            'name' => $this->input->post('txtName'),
            'zipcode' => $this->input->post('txtZipCode'),
            'email' => $this->input->post('txtEmail'),
            'username' => $this->input->post('txtUserName'),
            'password' => $this->input->post('txtPassword'),
            'post_image' => $post_image
        );

       return $this->db->insert('users',$data);
    }

    public function updateData($post_image)
    {
        $id=$this->input->post('txtID');
        //USer data array
        $data = array(
            'name' => $this->input->post('txtName'),
            'zipcode' => $this->input->post('txtZipCode'),
            'email' => $this->input->post('txtEmail'),
            'username' => $this->input->post('txtUserName'),
            'password' => $this->input->post('txtPassword'),
            'post_image' => $post_image
        );
        $this->db->where('id',$id); 
       return $this->db->update('users',$data);
    }
    public function deleteData($id)
    { 
        $uid=$id;
        $data = $this->db->where('id',$id);
        $data = $this->db->delete('users');
       
    }

    public function displayData()
    { 
        $data = $this->db->get('users');
        return $data->result_array();
    }

    public function fetchRecord($id)
    {
        $uid=$id;
        $data = $this->db->where('id',$id);
        $data = $this->db->get('users');
        return $data->result_array();
    }
}

?>