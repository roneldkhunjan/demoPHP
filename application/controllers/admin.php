<?php

class Admin extends MY_Controller{
    
    public function dashboard()
    {
         $this->load->view('admin/dashboard');
//          $this->load->view('articlesmodel');
//        $articles = $ this ->articles->articles_list();
//        $this->load->view('admin/dashboard',['articles'=>$articles]);
       
    }
//	
}