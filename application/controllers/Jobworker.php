<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobworker extends CI_Controller {

	
	 public function __construct() {
        parent::__construct();
	}


    public function index()
  {
//$this->load->view('Admin/include/header');
$this->load->view('Jobwork/workerlogin');
 //$this->load->view('Admin/include/footer');
  }

	public function dashboard()
	{

    $this->load->view('Jobwork/header');
    $this->load->view('Jobwork/job_dashboard');
    $this->load->view('Jobwork/footer');
    
  }

    


	 

      //echo $result;die;
      //if($result){
        //$this->session->set_flashdata('success','record added successfully');
      //}else{
        //$this->session->set_flashdata('fail','unable to add please check');
      //}
      
      //redirect('product/productlist');
 //redirect




public function signin() {
        $mailid = $this->input->post('email');
        $paswd = $this->input->post('password');
        
      $result = $this->db->get_where('worker', array('email' =>$mailid, 'password' => $paswd));
    $data=$result->row_array();
   
    
    
    //echo '<pre>'; print_r($data); die; 
      $this->session->set_userdata('user',$data);
       $user = $this->session->userdata('user');
         // $num=$result->num_rows();
 //echo 'hii'; die;
        if(count($data)>0){
        	//echo 'hii'; die;
             $this->session->set_flashdata('success_message', 'Signin successfully');
//redirect('Admin/loginview'); die;
             redirect('Jobworker/dashboard');
        }
        else{
            $this->session->set_flashdata('error_message', 'Invalid Email Or Password');
            redirect('Jobworker/index');
            }
    }
     public function logout(){
        $newdata = array(
                'email'  =>'',
                'password' => '',
               );
              
        $this->session->unset_userdata($newdata);
        $this->session->sess_destroy();
      redirect('Jobworker/index');
      
     }
    
    public function profile(){
        
//databsen se data session id  ke through
$session = $this->session->userdata('user');

   $id = $session['id'];
   
   $data['userrecord'] = $this->db->get_where('worker',array('id'=>$id))->row_array();
   
//print_r($data); die; 

    $this->load->view('Jobwork/header');
    $this->load->view('Jobwork/profile',$data);
    $this->load->view('Jobwork/footer');
     
    }
        
    /* 
    $par1 = create, update, delete
    $par2 = id
    */




 public function usermanagement(){
   
   $formArray['name']=$this->input->post('name');
    $formArray['email']=$this->input->post('email');
    $formArray['password']=$this->input->post('password');
    $formArray['mobilenumber']=$this->input->post('mobilenumber');
    
   
//print_r($formArray['hobbies']);  die;

    $session = $this->session->userdata('user');
   $hidden_id =$this->input->post('hidden_id');
   $this->db->where( 'id' ,$hidden_id);
    $result=$this->db->update('worker',$formArray);
    ///echo $this->db->last_query();
   //print_r($result); die;
    if ($result) {
        # code...
    $this->session->set_flashdata('success','record update successfully');
    redirect('Jobworker/dashboard');
    }
else{

      $this->session->set_flashdata('failure','record not updated');
     redirect('Jobworker/profile');
  }
  


    //
   
 } 
 }  
?>