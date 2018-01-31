 <?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class Crud extends CI_Controller {  
      //functions  
      function index(){  
        
        $data['_view'] = 'knowledge/index';
        $this->load->view('layouts/main',$data);
           $data["title"] = "Codeigniter Ajax CRUD with Data Tables and Bootstrap Modals";  
        $data['_view'] = 'knowledge/index';
        $this->load->view('layouts/main',$data);
      }  

function fetch_user(){  
           $this->load->models("crud_model");  
           $data['knowledge'] = $this->crud_model->make_datatables();

           $data = array();  
           foreach($data['knowledge'] as $row)  
           {  
                $sub_array = array();  
                $sub_array[] = '<img src="'.base_url().'resources/img/upload/'.$row->fileupload.'" class="img-thumbnail" width="50" height="35" />';  
                $sub_array[] = $row->type; 
                $sub_array[] = $row->name;  
                $sub_array[] = $row->text;  
                $sub_array[] = '<button type="button" name="edit" id="'.$row->Know_Id.'" class="btn btn-warning btn-xs update">edit</button>';  
                $sub_array[] = '<button type="button" name="remove" id="'.$row->Know_Id.'" class="btn btn-danger btn-xs delete">remove</button>';  
                $data[] = $sub_array;  
           }  
            $output = array(  
                "draw"                    =>     intval($_POST["draw"]),  
                "recordsTotal"          =>      $this->crud_model->get_all_data(),  
                "recordsFiltered"     =>     $this->crud_model->get_filtered_data(),  
                "data"                    =>     $data  
           );  
           echo json_encode($output);  
      }  
      function user_action(){  
           if($_POST["action"] == "Add")  
           {  
                $insert_data = array(  
                    'type' => $this->input->post('type'),
                    'name' => $this->input->post('name'),
                    'text' => $this->input->post('text'),  
                    'fileupload'                    =>     $this->upload_image()  
                );  
                $this->load->models('crud_model');  
                $this->crud_model->insert_crud($insert_data);  
                echo 'Data Inserted';  
           }  
           
       function upload_image()  
      {  
           if(isset($_FILES["user_image"]))  
           {  
                $extension = explode('.', $_FILES['user_image']['name']);  
                $new_name = rand() . '.' . $extension[1];  
                $destination = '.resources/img/upload/' . $new_name;  
                move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);  
                return $new_name;  
           }  
      }  
      } 