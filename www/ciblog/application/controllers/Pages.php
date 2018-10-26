<?php
class Pages extends CI_Controller{
    public function view($pages = 'home'){
    if (!file_exists(APPPATH.'views/pages/'.$pages.'.php')){
        show_404();
    }
    $data['title']=ucfirst($pages);

    $this->load->view('templates/header');
    $this->load->view('pages/'.$pages, $data);
    $this->load->view('templates/footer');
    }
}

?>   