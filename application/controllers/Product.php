 
<?php
class product extends CI_Controller 
{



public function __construct()
	{
	/*call CodeIgniter's default Constructor*/
	parent::__construct();
	
	
	}
	// #@par1 = id
	//$par1= read,update,delete
	//$par2=id	
//


//ajax// show data

    //ajax show data//
            public function taxactive(){
  
 	$id  =$this->input->post('cat_id');
	$this->db->where( 'id' ,$id);
        $user=$this->db->update('tax
',array('status' => $this->input->post('title')));
if($user)
{
	$this->session->set_flashdata('success','status changed successfully');
}
else{
	$this->session->set_flashdata('failure','status not changed');

}


}
        
        
          public function getactivecustomer(){
  
 	$id  =$this->input->post('cat_id');
	$this->db->where( 'id' ,$id);
	$user=$this->db->update('customer',array('status' => $this->input->post('title')));
if($user)
{
	$this->session->set_flashdata('success','status changed successfully');
}
else{
	$this->session->set_flashdata('failure','status not changed');

}


}
      public function getcoloractive(){
  
 	$id  =$this->input->post('cat_id');
	$this->db->where( 'id' ,$id);
	$user=$this->db->update('color',array('status' => $this->input->post('title')));
if($user)
{
	$this->session->set_flashdata('success','status changed successfully');
}
else{
	$this->session->set_flashdata('failure','status not changed');

}


}
      public function getprintactive(){
  
 	$id  =$this->input->post('cat_id');
	$this->db->where( 'id' ,$id);
	$user=$this->db->update('print',array('status' => $this->input->post('title')));
if($user)
{
		$this->session->set_flashdata('success','status changed successfully');
}

else{
	$this->session->set_flashdata('failure','status not changed');
}
   
    } 
    public function getproductactive(){
  
 	$id  =$this->input->post('cat_id');
	$this->db->where( 'id' ,$id);
	$user=$this->db->update('product',array('status' => $this->input->post('title')));
if($user)
{
	
	$this->session->set_flashdata('success','status changed successfully');
}
else{

	$this->session->set_flashdata('failure','status not changed');
}
   
    } 
      public function getsubcatactive(){
 
 	$id  =$this->input->post('cat_id');
	$this->db->where( 'id' ,$id);
	$user=$this->db->update('add_subcategory',array('status' => $this->input->post('title')));
	//echo $this->db->last_query(); die;
if($user)
{
	
	$this->session->set_flashdata('success','status changed successfully');
}
else{
	$this->session->set_flashdata('failure','status not changed');
}
   
    
    } 

public function getactive(){
  
 	$id  =$this->input->post('cat_id');
	$this->db->where( 'id' ,$id);
	$user=$this->db->update('add_category',array('status' => $this->input->post('title')));
if($user)
{
	


	$this->session->set_flashdata('success','status changed successfully');
}
else{
	$this->session->set_flashdata('failure','status not changed');

}

   
    } 

//subcategory//

public function getproduct($par1=''){
       

       $result = $this->db->get_where('add_subcategory',array('category'=>$par1))->result_array();
      //print_r($result);die;
       $output = '';
       foreach($result as $value){
       	?>
       	<option value="<?php  echo $value['category'];?>"><?php  echo $value['subcategory_name'];?>	</option>
       	<?php
       

       }


     
    } 



    
	//name//

public function productlist(){
	
//$pagedata =$this->db->get('product')->result_array(); 

$this->db->from('product');
$this->db->order_by("id", "desc");
$query = $this->db->get(); 
 $pagedata = $query->result_array();





//echo '<pre>';
//print_r($pagedata); die;

foreach($pagedata as $key=>$value){
	$res = $this->db->get_where('add_category',array('id'=>$value['fabric_category']))->row_array();
	$ress = $this->db->get_where('add_subcategory',array('id'=>$value['fabric_subcategory']))->row_array();
	$res1 = $this->db->get_where('print',array('id'=>$value['select_print_type']))->row_array();
	$res2 = $this->db->get_where('color',array('id'=>$value['select_color']))->row_array();
 $pagedata[$key]['fabric_category'] = $res['category_name'];
 $pagedata[$key]['fabric_subcategory'] = $ress['subcategory_name'];
  $pagedata[$key]['select_print_type'] = $res1['printtype_name'];
  $pagedata[$key]['select_color'] = $res2['color_type'];
	}
	$pagedata['record'] = $pagedata;
	//echo '<pre>'; print_r($pagedata); die; 
    $this->load->view('Admin/include/header');
    $this->load->view('Admin/listproduct',$pagedata);
    $this->load->view('Admin/include/footer');
   	//redirect('product/productlist');
}
	

	// product all list//
public function updateproductlist($par1='', $par2 = ''){
$pagestatus;
	$pagedata['id']=$par1;
  //print_r($pagedata); die;
	if($par1){
$pagedata['updaterecord'] = $this->db->get_where('product',array('id'=>$par1))->row_array();

	}
        
        $pagedata['pagestatus']="";
        
        if(!empty($par1)&& !empty($par2)){
            $pagedata['pagestatus']= $par2;
//            if($par2=='view'){
//            
//         }
        }
	// category
	
 
	$pagedata['record'] = $this->db->get('add_category')->result_array();
	$pagedata['record2'] = $this->db->get('print')->result_array();
	$pagedata['record4'] = $this->db->get('color')->result_array();
	$pagedata['record3'] = $this->db->get('add_subcategory')->result_array();
        
        
   //print_r($pagedata); die;
	// $pagedata = 
 $this->load->view('Admin/include/header');
 $this->load->view('Admin/productadd',$pagedata);
 $this->load->view('Admin/include/footer');
   
   //	redirect('product/productlist');
}
	/* 
	$par1 = create, update, delete
	 
        $par2 = id
	*/

//product add//
        
        


 public function product_management($par1='',$par2='',$par3='')
         { 

if(!empty($_FILES['uploadfile']['name']))
{
    $config['upload_path'] = 'uploads/';
    $config['allowed_types'] = 'gif|jpg|png|jpeg';
    $this->load->library('upload', $config);
    $this->upload->initialize($config);
    @unlink('uploads');

    if (!$this->upload->do_upload('uploadfile')) 
        {
        $error = array('error' => $this->upload->display_errors());
       }

    else {
 
    $file_name =  $this->upload->data();

    $filename = $file_name['file_name'];
 
    }
    }else
    {
        $filename = $_POST['update_uploadfile'];
    }
 $data=array(
    
'Item_code'=>$this->input->post('Item_code'),
'Item_name'=>$this->input->post('Item_name'),              
'fabric_category'=>$this->input->post('fabric_category'),
'fabric_subcategory'=>$this->input->post('fabric_subcategory'),
'fabric_type'=>$this->input->post('fabric_type'),
'select_print_type'=>$this->input->post('select_print_type'),
'select_color'=>$this->input->post('select_color'),
'price'=>$this->input->post('price'),
'quantity'=>$this->input->post('quantity'),
'about_the_item'=>$this->input->post('about_the_item'),
'thread_count'=>$this->input->post('thread_count'),
'construction'=>$this->input->post('construction'),
'gram'=>$this->input->post('gram'),
'floor_number'=>$this->input->post('floor_number'),
'rack_number'=>$this->input->post('rack_number'),
'fabric'=>$this->input->post('fabric'),
'uploadfile'=>$filename,
'status'=>$this->input->post('status'),
'weave'=>$this->input->post('weave')


	);
 
 
//print_r($data); die;
   $this->load->view('Admin/include/header');
    $this->load->view('Admin/productadd');
    $this->load->view('Admin/include/footer');
 


 if($par1=='create'){
            

	 		
	 		
	 	$user=$this->db->insert('product' ,$data);
	 	if ($user) {
		# code...
	$this->session->set_flashdata('success','record added successfully');
    }
else{

      $this->session->set_flashdata('failure','record not added');
	
  }
  
//redirect('Product/productlist');
	 		//
}
	 		


   if($par1=='update'){
	



	
	$id  =$this->input->post('id');
	$this->db->where( 'id' ,$id);
	$user=$this->db->update('product',$data);
	 ///echo $this->db->last_query();
 //  print_r($user); die;

	if ($user) {
		# code...
	$this->session->set_flashdata('success','record update successfully');
   }
else{

     $this->session->set_flashdata('failure','record not updated');
	
  }
  redirect('product/productlist');

}
	//update user recoord



 //redirect
//
	//delete
	 if ($par1=='delete') {
		 
		 
		
	 	$id=$par2;
	 	$this->db->where('id' ,$id);
	    $user=$this->db->delete('product');

	 	# code...
	  	 if($user){
	  	 	$this->session->set_flashdata('success','record deleted successfully');
	  	 	
	  	 }
	  	else
	  	{ 
	  	 $this->session->set_flashdata('failure','record not found in database');
	  
	  	}
	redirect(base_url().'product/productlist');
	  
	//
 }


//upload//

//upload//

 }  
   


//product list //


//tranferlist//

public function listjobworker()
{
//$pagedata['record'] =$this->db->get('worker')->result_array(); 
$this->db->from('worker');
$this->db->order_by("id", "desc");
$query = $this->db->get(); 
 $pagedata['record'] = $query->result_array();

	//$pagerecord['record']=$this->db->get('tranfer')->result_array(); 
 // print_r($pagedata); die;
	$this->load->view('Admin/include/header');
    $this->load->view('Admin/listjob',$pagedata);
    $this->load->view('Admin/include/footer');
   
   	}


public function updatejobworker($par1=''){
$pagerecord['id']=$par1;
if($par1){
$pagerecord['updaterecord'] = $this->db->get_where('worker',array('id'=>$par1))->row_array();	
}


 $this->load->view('Admin/include/header');
    $this->load->view('Admin/addjobwork',$pagerecord);
    $this->load->view('Admin/include/footer');
}
//add tranfer//

 public function jobwoker_management($par1='',$par2='',$par3=''){
   

 $data=array(

'name'=>$this->input->post('name'),
'username'=>$this->input->post('username'),
'email'=>$this->input->post('email'),
'password'=>$this->input->post('password'),
'mobilenumber'=>$this->input->post('mobilenumber')
         
         
	);

  $this->load->view('Admin/include/header');
    $this->load->view('Admin/addjobwork');
    $this->load->view('Admin/include/footer');


 if($par1=='create'){
            

	 		 $this->db->insert('worker' ,$data);
	 		
	 	}
	 		//echo $result;die;
	 		if($result){
	 			$this->session->set_flashdata('success','record added successfully');
	 	}else{
	 			$this->session->set_flashdata('fail','unable to add please check');
	 		}
	 		
	 		 redirect('product/listjobworker');
 //redirect


   if($par1=='update'){
	
	
	$id  =$this->input->post('id');
	$this->db->where( 'id' ,$id);
	$result=$this->db->update('worker',$data);

	if ($result) {
		# code...
	$this->session->set_flashdata('success','record update successfully');
    }
else{

      $this->session->set_flashdata('failure','record not updated');
	
  }
  redirect('product/listjobworker');

}
	//update user recoord

 

 //redirect
//
	//delete
	 if ($par1=='delete') {
		 
		 
		
	 	$id=$par2;
	 	$this->db->where('id' ,$id);
	    $user=$this->db->delete('worker');

	 	# code...
	  	 if($user){
	  	 	$this->session->set_flashdata('success','record deleted successfully');
	  	 	
	  	 }
	  	else
	  	{ 
	  	 $this->session->set_flashdata('failure','record not found in database');
	  
	  	}
	redirect(base_url().'product/listjobworker');
	  
	//
 }




   
   
}
// tranfer end//

// sales list//
public function creationlist()
{

	//$pagedata['record']=   $this->db->get('company')->result_array(); 
 // print_r($pagedata); die;
$this->db->from('company');
$this->db->order_by("id", "desc");
$query = $this->db->get(); 
 $pagedata['record'] = $query->result_array();
	
	 $this->load->view('Admin/include/header');
    $this->load->view('Admin/viewcompany',$pagedata);
    $this->load->view('Admin/include/footer');
   
   	
}


public function updatecreation($par1=''){
	$pagedata['id']=$par1;
	if($par1){
 $pagedata['updaterecord']= $this->db->get_where('company',array('id' =>$par1))->row_array();
	}
	

 $this->load->view('Admin/include/header');
    $this->load->view('Admin/addcompany',$pagedata);
    $this->load->view('Admin/include/footer');
}   
   

// sales add//

public function companycreation_management($par1='',$par2='',$par3=''){
   

 $data=array(
    
'Firstname'=>$this->input->post('Firstname'),
'Lastname'=>$this->input->post('Lastname'),
'email'=>$this->input->post('email'),
'business'=>$this->input->post('business'),
'contact'=>$this->input->post('contact'),
'company_name'=>$this->input->post('company_name'),
'address'=>$this->input->post('address'),
'business_type'=>$this->input->post('business_type'),
'state'=>$this->input->post('state'),
'message'=>$this->input->post('message')

	
	);
  $this->load->view('Admin/include/header');
    $this->load->view('Admin/addcompany');
    $this->load->view('Admin/include/footer');
 if($par1=='create'){
            

	 		 $result=$this->db->insert('company' ,$data);
	 		 if($result){
	 		$this->session->set_flashdata('success','record added successfully');
	 		}else{
	 			$this->session->set_flashdata('fail','unable to add please check');
	 		}
	 		
	 		
	 	}
	 		


   if($par1=='update'){
	
	
	$id  =$this->input->post('id');
	$this->db->where( 'id' ,$id);
	$result=$this->db->update('company',$data);

	if ($result) {
		# code...
	$this->session->set_flashdata('success','record update successfully');
    }
else{

      $this->session->set_flashdata('failure','record not updated');
	
  }
  redirect('product/creationlist');

}
	//update user recoord

 

 //redirect
//
	//delete
	 if ($par1=='delete') {
		 
		 
		
	 	$id=$par2;
	 	$this->db->where('id' ,$id);
	    $user=$this->db->delete('company');

	 	# code...
	  	 if($user){
	  	 	$this->session->set_flashdata('success','record deleted successfully');
	  	 	
	  	 }
	  	else
	  	{ 
	  	 $this->session->set_flashdata('failure','record not found in database');
	  
	  	}
	redirect(base_url().'product/creationlist');
	  
	//
 }




   
   
}
// create job//



//create last//
// sales list//

//userlist//


 
 

   
   

// add  user//





//add user list//

//bill list//


 

   
   

/// bill addd//


// end bill//
//customer list//





   
   
// add customer//



//  add end list//
//  supplly list//
public function supplierlist()
{
$pagedata =$this->db->get(' add_supply')->result_array();


foreach($pagedata as $key=>$value){
	$res = $this->db->get_where('add_category',array('id'=>$value['category']))->row_array();
 $pagedata[$key]['category'] = $res['category_name'];
}
 //print_r($pagedata); die;
$pagedata['record'] = $pagedata;
	//$pagedata['record']=   $this->db->get('add_supply')->result_array(); 
 // print_r($pagedata); die;
	
	 $this->load->view('Admin/include/header');
    $this->load->view('Admin/supplylist',$pagedata);
    $this->load->view('Admin/include/footer');
   
   	
}
  
  public function updatesupplier($par1=''){

  	$pagedata['id']=$par1;
  	if($par1){
$pagedata['updaterecord'] = $this->db->get_where('add_supply',array('id'=>$par1))->row_array();

	}

	$pagedata['record']=   $this->db->get('add_category')->result_array(); 
 $this->load->view('Admin/include/header');
    $this->load->view('Admin/addsupply',$pagedata);
    $this->load->view('Admin/include/footer');
   
  }

   
   


//  add supply//
public function supplier_management($par1='',$par2='',$par3=''){
   

 $data=array(
    
'category'=>$this->input->post('category'),
'name'=>$this->input->post('name'),
'credit_period'=>$this->input->post('credit_period'),
'pan'=>$this->input->post('pan'),
'opening_balance'=>$this->input->post('opening_balance'),
'contact_person_name'=>$this->input->post('contact_person_name'),
'address'=>$this->input->post('address'),
'country'=>$this->input->post('country'),
'state'=>$this->input->post('state'),
'city'=>$this->input->post('city'),
'status'=>$this->input->post('status')
              
	);


// print($data); die;
  $this->load->view('Admin/include/header');
    $this->load->view('Admin/addsupply');
    $this->load->view('Admin/include/footer');
   
 if($par1=='create'){
            

	 $result=$this->db->insert('add_supply' ,$data);
	 		if($result){
	 			$this->session->set_flashdata('success','suppllier added successfully');
	 		}else{
	 		$this->session->set_flashdata('fail','unable to add please check');
	 		}
	 	}
	 		
	 		//if($result){
	 			//$this->session->set_flashdata('success','record added successfully');
	 		//}else{
	 			//$this->session->set_flashdata('fail','unable to add please check');
	 		//}
	 		
	 		//redirect('product/productlist');
 //redirect


   if($par1=='update'){
	
	
	$id  =$this->input->post('id');
	$this->db->where( 'id' ,$id);
	$result=$this->db->update('add_supply',$data);

	if ($result) {
		# code...
	$this->session->set_flashdata('success','record update successfully');
    }
else{

      $this->session->set_flashdata('failure','record not updated');
	
  }
  redirect('product/supplierlist');

}
	//update user recoord

 

 //redirect
//
	//delete
	 if ($par1=='delete') {
		 
		 
		
	 	$id=$par2;
	 	$this->db->where('id' ,$id);
	    $user=$this->db->delete('add_supply');

	 	# code...
	  	 if($user){
	  	 	$this->session->set_flashdata('success','record deleted successfully');
	  	 	
	  	 }
	  	else
	  	{ 
	  	 $this->session->set_flashdata('failure','record not found in database');
	  
	  	}
	redirect(base_url().'product/supplierlist');
	  
	//
 }




   
   
}






 
// purchase return//


//category list//

public function categorylist($par1=''){
	//$pages['record']=   $this->db->get('add_category')->result_array(); 
	$this->db->from('add_category');
$this->db->order_by("id", "desc");
$query = $this->db->get(); 
 $pagedata['record'] = $query->result_array();

  //echo "<pre>";print_r($pagedata); die;
      $this->load->view('Admin/include/header');
    $this->load->view('Admin/listcategory',$pagedata);
    $this->load->view('Admin/include/footer');
   
   	
}

public function updatecategory($par1=''){
$page['id']=$par1;
if($par1){
$page['updaterecord'] = $this->db->get_where('add_category',array('id'=>$par1))->row_array();
//print_r($page); die;
	}

      $this->load->view('Admin/include/header');
    $this->load->view('Admin/addcategory',$page);
    $this->load->view('Admin/include/footer');
}
	/* 
	$par1 = create, update, delete
	$par2 = id
	*/


// category add//

 public function mastercategory_management($par1='',$par2='',$par3=''){
 

 $data=array(
     
	'category_name'=>$this->input->post('category_name'),
	'status'=>$this->input->post('status')
	);
 //print_r($data); die;
   $this->load->view('Admin/include/header');
    $this->load->view('Admin/addcategory');
    $this->load->view('Admin/include/footer');
//redirect('Product/categorylist');

 if($par1=='create'){
            

	  $result=$this->db->insert('add_category' ,$data);	
	 	
	 if($result){
	 $this->session->set_flashdata('success','category added successfully');
	 	redirect( base_url().'Product/updatecategory');
	 }else{
	 $this->session->set_flashdata('fail','unable to add please check');
	 			///redirect('Product/mastercategory_management');
	 		}
	 	// redirect( base_url().'Product/categorylist');	
       
	 	}	

	 	 
	 		
	 		//redirect('Product/Categorylist');
 //redirect

   if($par1=='update'){
	
	
	$id  =$this->input->post('id');
	$this->db->where( 'id' ,$id);
	$result=$this->db->update('add_category',$data);

	if ($result) {
		# code...
	$this->session->set_flashdata('success','record update successfully');
	redirect( base_url().'Product/updatecategory');
    }
else{

      $this->session->set_flashdata('failure','record not updated');
	
  }
 // redirect('Product/categorylist');

}
	//update user recoord

 

 //redirect
//
	//delete
	 if ($par1=='delete') {
		 
		 
		
	 	$id=$par2;
	 	$this->db->where('id' ,$id);
	    $result=$this->db->delete('add_category');

	 	# code...
	  	 if($result){
	  	  	$this->session->set_flashdata('success','record deleted successfully');
	  	redirect( base_url().'Product/categorylist');
	  	 	
	  	  }
	  	 else
	  	 { 
	  	  $this->session->set_flashdata('failure','record not found in database');
	  
	  	 }
	//redirect(base_url().'product/categorylist');
	  
	//
 }




   
   
}
//printype//

public function printlist($par1=''){
	//$pagedata['record']=   $this->db->get('print')->result_array();
$this->db->from('print');
$this->db->order_by("id", "desc");
$query = $this->db->get(); 
 $pagedata['record'] = $query->result_array(); 
	$pagedata['id']=$par1;
	
	if($par1){
$pagedata['updaterecord'] = $this->db->get_where('print',array('id'=>$par1))->row_array();
//print_r($page); die;
	}
	
	
  //print_r($pagedata); die;
    $this->load->view('Admin/include/header');
    $this->load->view('Admin/Printtype',$pagedata);
    $this->load->view('Admin/include/footer');
   
   	
}


	/* 
	$par1 = create, update, delete
	$par2 = id
	*/


// category add//

 public function printtype_management($par1='',$par2='',$par3=''){
   

 $data=array(
     
'printtype_name'=>trim($this->input->post('printtype_name')),
'status'=>$this->input->post('status')
	
	);
 //print_r($data); die;
   


 if($par1=='create'){
            

	 		 $result=$this->db->insert('print' ,$data);	
			 
			 if($result){
	 		 	$this->session->set_flashdata('success','record added successfully');
	 		}else{
	 		 	$this->session->set_flashdata('fail','unable to add please check');
	 		 }
	 		
			 redirect('Product/printlist');
	 	}
	 		// if($result){
	 		// 	$this->session->set_flashdata('success','record added successfully');
	 		// }else{
	 		// 	$this->session->set_flashdata('fail','unable to add please check');
	 		// }
	 		
	 		//redirect('product/productlist');
 //redirect

   if($par1=='update'){
	
	
	$id  =$this->input->post('id');
	$this->db->where( 'id' ,$id);
	$result=$this->db->update('print',$data);

	if ($result) {
		# code...
	$this->session->set_flashdata('success','record update successfully');
    }
 else{
       $this->session->set_flashdata('failure','record not updated');
	
  }
  redirect('Product/printlist');

}
	//update user recoord

 

 //redirect
//
	//delete
	 if ($par1=='delete') {
		 
		 
		
	 	$id=$par2;
	 	$this->db->where('id' ,$id);
	    $result=$this->db->delete('print');

	 	# code...
	  	 if($result){
	  	  	$this->session->set_flashdata('success','record deleted successfully');
	  	 	
	  	 }
	   else
	  	{ 
	  	  $this->session->set_flashdata('failure','record not found in database');
	  
	  	 }
	redirect(base_url().'Product/printlist');
	  
	//
 }




   
   
}
//end//


// color list//

public function colorlist($par1=''){
	//$pagedata['record']=   $this->db->get('color')->result_array();
$this->db->from('color');
$this->db->order_by("id", "desc");
$query = $this->db->get(); 
 $pagedata['record'] = $query->result_array(); 
	$pagedata['id']=$par1;
	 
	if($par1){
$pagedata['updaterecord'] = $this->db->get_where('color',array('id'=>$par1))->row_array();
//print_r($page); die;
	}
	
	
  //print_r($pagedata); die;
    $this->load->view('Admin/include/header');
    $this->load->view('Admin/colortype',$pagedata);
    $this->load->view('Admin/include/footer');
   
   	
}


	/* 
	$par1 = create, update, delete
	$par2 = id
	*/


// category add//

 public function colortype_management($par1='',$par2='',$par3=''){
   

 $data=array(
     
'color_type'=>trim($this->input->post('color_type')),
'status'=>$this->input->post('status')
	
	);
 //print_r($data); die;
   


 if($par1=='create'){
            

	 		 $result=$this->db->insert('color' ,$data);	
			  if($result){
	 		 	$this->session->set_flashdata('success','color added successfully');
	 		 }else{
	 		 	$this->session->set_flashdata('fail','unable to add please check');
	 		 }
			 
			 redirect('Product/colorlist');
	 	}
	 		// if($result){
	 		// 	$this->session->set_flashdata('success','record added successfully');
	 		// }else{
	 		// 	$this->session->set_flashdata('fail','unable to add please check');
	 		// }
	 		
	 		//redirect('product/productlist');
 //redirect

   if($par1=='update'){
	
	
	$id  =$this->input->post('id');
	$this->db->where( 'id' ,$id);
	$result=$this->db->update('color',$data);

	if ($result) {
// 		# code...
	$this->session->set_flashdata('success','record update successfully');
    }
 else{

      $this->session->set_flashdata('failure','record not updated');
	
  }
  redirect('Product/colorlist');

}
	//update user recoord

 

 //redirect
//
	//delete
	 if ($par1=='delete') {
		 
		 
		
	 	$id=$par2;
	 	$this->db->where('id' ,$id);
	    $result=$this->db->delete('color');

	 	# code...
	  	  if($result){
	  	  	$this->session->set_flashdata('success','record deleted successfully');
	  	 	
	  	 }
	  	 else
	  	 { 
	  	  $this->session->set_flashdata('failure','record not found in database');
	  
	  	 }
	redirect(base_url().'Product/colorlist');
	  
	//
 }




   
   
}

public function subcatlist(){	


//$pagedata =$this->db->get('add_subcategory')->result_array();
$this->db->from('add_subcategory');
$this->db->order_by("id", "desc");
$query = $this->db->get(); 
 $pagedata = $query->result_array(); 


foreach($pagedata as $key=>$value){
	$res = $this->db->get_where('add_category',array('id'=>$value['category']))->row_array();
 $pagedata[$key]['category'] = $res['category_name'];
}
 //print_r($pagedata); die;
$pagedata['record'] = $pagedata; 

 //print_r($pagedata); die;
  $this->load->view('Admin/include/header');
  $this->load->view('Admin/listsubcategory',$pagedata);
  $this->load->view('Admin/include/footer');
   
   	
}

	/* 
	$par1 = create, update, delete
	$par2 = id
	*/
public function updatesubcat($par1=''){
$pagedata['id']=$par1;
if($par1){
$pagedata['updaterecord'] = $this->db->get_where('add_subcategory',array('id'=>$par1))->row_array();

	}

$pagedata['record3']=$this->db->get_where('add_category',array('status'=>'Active'))->result_array();

  $this->load->view('Admin/include/header');
    $this->load->view('Admin/subcategoryadd',$pagedata);
    $this->load->view('Admin/include/footer');

}



 public function mastersubcateg_management($par1='',$par2='',$par3=''){
   

 $data=array(
 	 'category'=>trim($this->input->post('category')),
    	'subcategory_name'=>trim($this->input->post('subcategory_name')),
    	'status'=>$this->input->post('status')
	);
 //print_r($data); die;
// $data['record'] = $this->db->get('add_category')->result_array();
   $this->load->view('Admin/include/header');
    $this->load->view('Admin/subcategoryadd');
    $this->load->view('Admin/include/footer');



 if($par1=='create')
 {
            

	 		 $result=$this->db->insert('add_subcategory' ,$data);
	 		
	 	}
	 		if($result){
	 			$this->session->set_flashdata('success','subcategory added successfully');
	 				redirect( base_url().'Product/updatesubcat');
	 		}else{
	 			$this->session->set_flashdata('fail','unable to add please check');
	 			///redirect('Product/mastercategory_management');
	 		}
 //redirect


   if($par1=='update'){
	
	
	$id  =$this->input->post('id');
	$this->db->where( 'id' ,$id);
	$result=$this->db->update('add_subcategory',$data);

	if ($result) {
		# code...
	$this->session->set_flashdata('success','record update successfully');
    }
else{

      $this->session->set_flashdata('failure','record not updated');
	
  }
  redirect('Product/subcatlist');

}
	//update user recoord

 

 //redirect
//
	//delete
	 if ($par1=='delete') {
		 
		 
		
	 	$id=$par2;
	 	$this->db->where('id' ,$id);
	    $result=$this->db->delete('add_subcategory');

	 	# code...
	  	 if($result){
	  	 	$this->session->set_flashdata('success','record deleted successfully');
	  	 	
	  	 }
	  	else
	  	{ 
	  	 $this->session->set_flashdata('failure','record not found in database');
	  
	  	}
	redirect(base_url().'Product/subcatlist');
	  
	//
 }




   
   
}



// ////////Order management///////////////


public function customerlist()
{
$pagedata =$this->db->get(' customer
                                               ')->result_array();


foreach($pagedata as $key=>$value){
	$res = $this->db->get_where('add_category
',array('id'=>$value['category']))->row_array();
 $pagedata[$key]['category'] = $res['category_name'];
}
 //print_r($pagedata); die;
$pagedata['record'] = $pagedata;
	//$pagedata['record']=   $this->db->get('add_supply')->result_array(); 
 // print_r($pagedata); die;
	
 $this->load->view('Admin/include/header');
    $this->load->view('Order/Listcustomer',$pagedata);
    $this->load->view('Admin/include/footer');
   
   	
}
  
public function updatecustomer($par1=''){

      $pagedata['id']=$par1;
      if($par1){
$pagedata['updaterecord'] = $this->db->get_where('customer
',array('id'=>$par1))->row_array();

      }
$pagedata['record']=   $this->db->get('add_category
                                                                               ')->result_array(); 
$this->load->view('Admin/include/header');
  $this->load->view('Order/addcustomer',$pagedata);
  $this->load->view('Admin/include/footer');

}

   
   


//  add supply//
public function customer($par1='',$par2='',$par3=''){
   

 $data=array(
    
'category'=>$this->input->post('category'),
'name'=>$this->input->post('name'),
'credit_period'=>$this->input->post('credit_period'),
'pan'=>$this->input->post('pan'),
'opening_balance'=>$this->input->post('opening_balance'),
'contact_person_name'=>$this->input->post('contact_person_name'),
'address'=>$this->input->post('address'),
'country'=>$this->input->post('country'),
'state'=>$this->input->post('state'),
'city'=>$this->input->post('city'),
'status'=>$this->input->post('status')
              
	);


// print($data); die;
  $this->load->view('Admin/include/header');
    $this->load->view('Order/addcustomer');
    $this->load->view('Admin/include/footer');
   
 if($par1=='create'){
            

	 $result=$this->db->insert('customer
' ,$data);
	 		if($result){
	 			$this->session->set_flashdata('success','customer added successfully');
	 		}else{
	 		$this->session->set_flashdata('fail','unable to add please check');
	 		}
	 	}
	 		
	 		;
 //redirect


   if($par1=='update'){
	
	
	$id  =$this->input->post('id');
	$this->db->where( 'id' ,$id);
	$result=$this->db->update('customer
',$data);

	if ($result) {
		# code...
	$this->session->set_flashdata('success','customer update successfully');
    }
else{

      $this->session->set_flashdata('failure','record not updated');
	
  }
  redirect('Product/customerlist');

}
	//update user recoord

 

 //redirect
//
	//delete
	 if ($par1=='delete') {
		 
		 
		
	 $id=$par2;
	 $this->db->where('id' ,$id);
	    $user=$this->db->delete('customer
');

	 	# code...
	  	 if($user){
	  	 	$this->session->set_flashdata('success','customerdeleted successfully');
	  	 	
	  	 }
	  	else
	  	{ 
	  	 $this->session->set_flashdata('failure','record not found in database');
	  
	  	}
	redirect(base_url().'Product/customerlist');
	  
	//
 }




   
   
}



public function taxlist($par1=''){
	//$pagedata['record']=   $this->db->get('print')->result_array();
$this->db->from('tax');
$this->db->order_by("id", "desc");
$query = $this->db->get(); 
 $pagedata['record'] = $query->result_array(); 
	$pagedata['id']=$par1;
	
	if($par1){
$pagedata['updaterecord'] = $this->db->get_where('tax',array('id'=>$par1))->row_array();
//print_r($page); die;
	}
	
	
  //print_r($pagedata); die;
    $this->load->view('Admin/include/header');
    $this->load->view('Order/managetax',$pagedata);
    $this->load->view('Admin/include/footer');
   
   	
}


	/* 
	$par1 = create, update, delete
	$par2 = id
	*/


// category add//

 public function Tax($par1='',$par2='',$par3=''){
   

 $data=array(
     
'tax_name'=>trim($this->input->post('tax_name')),
'tax_percentage'=>$this->input->post('tax_percentage'),
'status'=>$this->input->post('status')
	
	);
 //print_r($data); die;
   


 if($par1=='create'){
            

	 		 $result=$this->db->insert('tax' ,$data);	
			 
			 if($result){
	 		 	$this->session->set_flashdata('success','record added successfully');
	 		}else{
	 		 	$this->session->set_flashdata('fail','unable to add please check');
	 		 }
	 		
			 redirect('Product/taxlist');
	 	}
	 		
 //redirect

   if($par1=='update'){
	
	
	$id  =$this->input->post('id');
	$this->db->where( 'id' ,$id);
	$result=$this->db->update('tax',$data);

	if ($result) {
		# code...
	$this->session->set_flashdata('success','record update successfully');
    }
 else{
       $this->session->set_flashdata('failure','record not updated');
	
  }
  redirect('Product/taxlist');

}
	//update user recoord

 

 //redirect
//
	//delete
	 if ($par1=='delete') {
		 
		 
		
	 $id=$par2;
	 $this->db->where('id' ,$id);
	    $result=$this->db->delete('tax');

	 	# code...
	  	 if($result){
	  	  	$this->session->set_flashdata('success','record deleted successfully');
	  	 	
	  	 }
	   else
	  	{ 
	  	  $this->session->set_flashdata('failure','record not found in database');
	  
	  	 }
	redirect(base_url().'Product/taxlist');
	  
	//
 }




   
   
}
//end//


/////////////order management///////////////
}
	 
?>
