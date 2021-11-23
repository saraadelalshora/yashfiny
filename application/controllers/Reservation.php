<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Reservation extends CI_Controller {
  public function __construct() {
    parent::__construct();

    $this->load->model(array(
        'website/appointment_model',
        'website/home_model',
        'website/department_model',
        'website/appointment_instruction_model',
        'website/patient_model',
        'website/menu_model',
        'enquiry_model',
  			'website/about_model',
    ));
  }


  public function index(){
		$data['title'] = display('contact');
		#-----------Setting-------------#
        $data['setting'] = $this->home_model->setting();
        // redirect if website status is disabled
        if ($data['setting']->status == 0)
            redirect(base_url('login'));

       $data['basics'] = $this->home_model->basic_setting();
       $data['languageList'] = $this->home_model->languageList();
       $data['about'] = $this->about_model->read();
       $data['deptsFooter'] = $this->department_model->read_footer();
       //get menu list dynamically
       $data['parent_menu'] = $this->menu_model->get_parent_menu();
		#-----active appointment instruction--------#
       // $data['instruction'] = $this->appointment_instruction_model->read_active_instuction();

		     $data['content'] = $this->load->view('website/reservation',$data,true);
       $this->load->view('website/index', $data);
	}








}
?>
