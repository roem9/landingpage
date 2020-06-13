<?php
class Produk extends CI_CONTROLLER{
    public function __construct(){
        parent::__construct();
        $this->load->model('Materi_model');
        $this->load->model('Main_model');
    }

    public function madu($id){
        $data = $this->Main_model->get_one("marketing", ["MD5(id_marketing)" => $id]);
        // var_dump($data);
        $this->load->view("madu/madurandu/index.php", $data);
    }
    
    public function kantas($id){
        $data = $this->Main_model->get_one("marketing", ["MD5(id_marketing)" => $id]);
        // var_dump($data);
        $this->load->view("page/kantas", $data);
    }
}