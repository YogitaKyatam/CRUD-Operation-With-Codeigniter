<?php

class MainController extends CI_Controller {
    
    public function index()
    {
        $this->load->view('header');
        $this->load->view('main');
    }

    public function insertForm()
    {
        $data['title']='Register Form';

        $this->load->view('header');
        $this->load->view('insert',$data);
    }
    public function displayRecord()
    {
        $data['title']='Display Record';
        $data['users']=$this->crudmodule->displayData();

        $this->load->view('header');
        $this->load->view('display',$data);
    }
    public function update($id)
    {
        $uid=$id;
        $data['title']='Update Record';
        
        $data['userdata']=$this->crudmodule->fetchRecord($uid);
        $this->load->view('header');
        $this->load->view('update',$data);
    }
    public function delete($id)
    {
        $uid=$id;
        $data['title']='Delete Record';
        
        $data['userdata']=$this->crudmodule->fetchRecord($uid);
        $this->load->view('header');
        $this->load->view('delete',$data);
    }
}

?>
