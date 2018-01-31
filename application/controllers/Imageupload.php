<?php
class Imageupload extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }
    function index()
    {
        $this->load->view->knowledge('add', array('error' => ' ' ));
    }
    function doupload() {
        $name_array = array();
        $count = count($_FILES['fileupload']['size']);
        foreach($_FILES as $key=>$value)
        for($s=0; $s<=$count-1; $s++) {
                $_FILES['fileupload']['type']=$value['type'][$s];
                $_FILES['fileupload']['name']=$value['name'][$s];
                $_FILES['fileupload']['text']    = $value['text'][$s];
                $_FILES['fileupload']['tmp_name'] = $value['tmp_name'][$s];
                $_FILES['fileupload']['error']       = $value['error'][$s];
                $_FILES['fileupload']['size']    = $value['size'][$s];
                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']    = '100';
                $config['max_width']  = '1024';
                $config['max_height']  = '768';
                $this->load->library('upload', $config);
                $this->upload->do_upload();
                $data = $this->upload->data();
                $name_array[] = $data['file_name'];
        }
         $names= implode(',', $name_array);
/*            $this->load->database();
            $db_data = array('id'=> NULL,'name'=> $names);
            $this->db->insert('testtable',$db_data);
*/            print_r($names);
    }
}