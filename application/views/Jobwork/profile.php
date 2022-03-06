   <?php

error_reporting(0);
if($updaterecord){
  $action='update';
}else{
  $action='create';
}
?>
 <div id="content">
 <div class="row mb-4">
<div class="col-12 mb-4 mb-xl-0">
                                <div class="card redial-border-light redial-shadow mb-4">
                                    <div class="card-body">
                                                
                <form   method ="post"  id="Addcategory" action="<?php  echo base_url().'Jobworker/usermanagement/'.$action;?>">
  <div class="row">

    <div class="col-md-6">
      <div class ="form-group">
        <label for="Name"><!--  Profile Name  -->Name<span class="validation-color" style="color: red;">*</span></label>
       <input type="hidden" name="hidden_id" value="<?php echo $userrecord['id']; ?>">
        <input type="text" name="name" value="<?php  echo $userrecord['name'];?>" class="form-control">
        
      </div>
	  <div class ="form-group">
        <label for="Email"><!-- Profile Email  -->Email<span class="validation-color" style="color: red;">*</span></label>     
        <input type="text" name="email" value="<?php  echo $userrecord['email'];?>" class="form-control" disabled>
        
      </div>
	   <div class ="form-group">
        <label for="Password"><!-- Profile Email  -->Password<span class="validation-color" style="color: red;">*</span></label>     
        <input type="text" name="password" value="<?php  echo $userrecord['password'];?>" class="form-control" >
        
      </div>
	  <div class ="form-group">
        <label for="Contact"><!-- Profile Contact  -->Contact<span class="validation-color" style="color: red;">*</span></label>     
        <input type="text" name="mobilenumber" value="<?php  echo $userrecord['mobilenumber']; ?>" class="form-control">
		 </div>
	 
    
      <div class ="form-group">
     <button type="submit" class="btn btn-primary btn-sm ">Submit</button>
        
        
      </div>
      
    </div>
    
  </div>
  </form>

                            
                                    </div>    
                                </div>
                            </div>
							                   













				   
                   

                    
                    
                    
