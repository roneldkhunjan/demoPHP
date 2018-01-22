<?php

class Login extends MY_Controller
{
    public function index()
	  {
        $this->load->helper('form');
	  	$this->load->view('public/admin_login');
        
	  }

    public function admin_login()
    {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('username','UserName','required|alpha|trim');
         $this->form_validation->set_rules('password','PASSWORD','required');
        
         $this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
        
        
        if($this->form_validation->run()){
            
            $username= $this->input->post('username');
            $password= $this->input->post('password');
          
            $this->load->model('loginmodel');
            
           
             $login_id =   $this->loginmodel->login_valid($username, $password);
                if($login_id){
                    $this->load->library('session');
                    
                    $this->session->set_userdata('user_id',$login_id);
                   
                    
               return redirect('admin/dashboard');
                   
                             
                //authentication passed
            }else{
                echo "password donot match";
                //authentication failed
        }
                                         }
        
                                     else{
            	$this->load->view('public/admin_login');
            
                                          }
        
    }
}