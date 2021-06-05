<?php

class CrudController extends CI_Controller
{
    public function insertData()
    {   
        $data['title']='Register Form';
        
        $this->form_validation->set_rules('txtName','Name','required');
        $this->form_validation->set_rules('txtZipCode','Zip Code','required');
        $this->form_validation->set_rules('txtEmail','Email','required');
        $this->form_validation->set_rules('txtUserName','User Name','required');
        $this->form_validation->set_rules('txtPassword','Password','required');
    
        if($this->form_validation->run() === FALSE)
        {
            $this->load->view('header');
            $this->load->view('insert',$data);          
        }
        else 
        { 
             //upload image
             $config['upload_path']='./assets/images';
             $config['allowed_types']='gif|jpg|png';
             
             $this->load->library('upload',$config);
            if(!$this->upload->do_upload()){
             $errors = array('error'=>$this->upload->display_errors());
             $post_image = 'noimage.jpg';
            }else {
              $data= array('upload_data' => $this->upload->data());
              $post_image = $_FILES['userfile']['name'];
            }
 

            $this->crudmodule->insertData($post_image);
            echo "<script>alert('Data Save')</script>";
            redirect("maincontroller/displayRecord");
            
        } 
    }

    public function updateData()
    {
        $this->form_validation->set_rules('txtID','ID','required');
        $this->form_validation->set_rules('txtName','Name','required');
        $this->form_validation->set_rules('txtZipCode','Zip Code','required');
        $this->form_validation->set_rules('txtEmail','Email','required');
        $this->form_validation->set_rules('txtUserName','User Name','required');
        $this->form_validation->set_rules('txtPassword','Password','required');
    
        if($this->form_validation->run() === FALSE)
        {
            $this->load->view('header');
            $this->load->view('update',$data);          
        }
        else 
        { 
             //upload image
             $config['upload_path']='./assets/images';
             $config['allowed_types']='gif|jpg|png';
             
            $this->load->library('upload',$config);
            
            if(!$this->upload->do_upload()){
             $errors = array('error'=>$this->upload->display_errors());
             $post_image = 'noimage.jpg';
            }else {
              $data= array('upload_data' => $this->upload->data());
              $post_image = $_FILES['userfile']['name'];
            }

            $this->crudmodule->updateData($post_image);
            echo "<script>alert('Data Save')</script>";
            redirect("maincontroller/displayRecord");
            
        } 
    }
    public function deleteData()
    {
        $id=$this->input->post('txtID');

        $this->crudmodule->deleteData($id); 
        redirect("maincontroller/displayRecord"); 
    }
}


?>