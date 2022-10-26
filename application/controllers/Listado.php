<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listado extends CI_Controller {
    public function __construct() {
		parent::__construct();
		$this->load->library(array('datatable'));
		$this->load->model('listado_model');
	}	
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index(){
		$this->load->view('welcome_message');
	}

    function loaddata(){
        $query="SELECT id, name, job, phone, status, attendance
			FROM guests";

	
        $primaryKey = 'Id';

        $columns = array(
            array( 'db' => 'id',     'dt' => 0,
                'formatter' => function($d,$row){ 
                    $html = '<label class="au-checkbox">
                                <input type="checkbox" class="check-attendance" data-id="'.$d.'" '.(($row['attendance'] == 1) ? 'checked' : '').'>
                                <span class="au-checkmark"></span>
                            </label>';
                    return $html;
                }),
            array( 'db' => 'name',     'dt' => 1,
                'formatter' => function($d,$row){ return $d;}),
            array( 'db' => 'job',     'dt' => 2,
                'formatter' => function($d,$row){ return $d;}),
            array( 'db' => 'phone',     'dt' => 3,
                'formatter' => function($d,$row){ return $d;}),
			array( 'db' => 'status',     'dt' => 4,
				'formatter' => function($d,$row){ return $d;}),
            array( 'db' => 'id', 'dt' => 5,
               'formatter' => function($d, $row){

               	$html=' <div class="table-data-feature">
                            <button class="item btn-edit-guest" data-toggle="tooltip" data-placement="top" title="Editar" data-id="'.$d.'">
                                <i class="zmdi zmdi-edit"></i>
                            </button>
                            <button class="item btn-delete-guest" data-toggle="tooltip" data-placement="top" title="Eliminar"  data-id="'.$d.'">
                                <i class="zmdi zmdi-delete"></i>
                            </button>
                        </div>';
               
				
                return $html;
                
            })
        );
        $data=$this->datatable->simple($_GET, $query, $primaryKey, $columns);
        $data=$this->utf8_encode_deep($data);
        echo json_encode($data);
    }

    function save(){
        $data = array();
        parse_str($_POST['data'], $data);

        if($_POST['action'] == "update"){
            $this->listado_model->update($_POST['id'], $data);
        }else{
            $this->listado_model->save($data);
        }
    }

    function attendance(){
        $this->listado_model->updateAttendance($_POST['id'], array("attendance" => (($_POST['val'] == "true") ? 1 : 0)));
    }

    function delete(){
        $this->listado_model->delete($_POST['id']);
        
    }


    function getGuest(){
        $guest = $this->listado_model->getGuest($_POST['id']);
        echo json_encode($guest);
    }

    function utf8_encode_deep(&$array) {
		array_walk_recursive($array, function(&$item, $key){
	    	if(is_null($item)){$item='';}
	        if(!mb_detect_encoding($item, 'utf-8', true)){
	                $item = utf8_encode($item);
	        }
    	});
    	return $array;
	}
}
