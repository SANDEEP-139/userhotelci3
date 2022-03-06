 <?php
error_reporting(0);
if($updaterecord){
  $action='update';
}else{
  $action='create';
}
?>
<style>
    .error{
        color: red;
    }
</style>
<div class="container">
<div class="row">
        <div class="col-md-12">
            <?php
            $success=$this->session->userdata('success');
            if ($success != "") {   
            ?>
            <div class="alert alert-success"><?php  echo $success;?></div>
            <?php
             }
            ?>
            <?php
            $failure=$this->session->userdata('failure');
            if ($failure != "") {   
            ?>
            <div class="alert alert-success"><?php echo $failure; ?></div>
            <?php
             }
            ?>
        </div>
    </div> 
 <div id="content">
                <div class="row mb-4">
                    <div class="col-12 mb-4 mb-xl-0">
                                
                            </div>
                    <div class="col-12 col-sm-12">
                        <div class="row">
                            <div class="col-12 col-md-12 mb-4">
                                <div class="card redial-border-light redial-shadow">
                                    <div class="card-body" style="overflow: visible;">
                    <form  id="Addcompany" action="<?php  echo base_url();?>Product/companycreation_management/<?php  echo $action;?>" method="post">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="form-group">
              <label class="redial-font-weight-600">First name</label>
               <input type="hidden" name="id" value="<?php  echo $updaterecord['id'];?>">
    <input    onkeydown = "return Check(this,event)"  type="text"  name="Firstname" value="<?php  echo $updaterecord['Firstname'];?>" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="form-group">
                    <label class="redial-font-weight-600">Last name</label>
                <input   onkeydown = "return Check(this,event)"  type="text"  name="Lastname" value="<?php echo $updaterecord['Lastname']; ?>" class="form-control">
                        </div>
                    </div>
                    
                </div>
            
                
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        
                        
                        <div class="form-group">
                        <label class="redial-font-weight-600">Email address</label>
                        <input  onkeydown = "return Check(this,event)"  type="text" name="email" value="<?php  echo $updaterecord['email'];?>" class="form-control">
                        </div>
                        <div class="form-group">
                        <label class="redial-font-weight-600">Business name</label>
                        <input onkeydown = "return Check(this,event)"  type="text" name="business" value="<?php  echo $updaterecord['business'];?>" class="form-control">
                        </div>
                        
                        <div class="form-group">
                        <label class="redial-font-weight-600">Phone</label>
                        <input   onkeydown = "return Check(this,event)" type="number" name="contact" value="<?php  echo $updaterecord['contact'];?>" class="form-control">
                        </div>
                        <div class="form-group">
                        <label class="redial-font-weight-600">Companyname</label>
                        <input  onkeydown = "return Check(this,event)" type="text" name="company_name" value="<?php  echo $updaterecord['company_name'];?>" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                        <label class="redial-font-weight-600">Address</label>
                        <input  onkeydown = "return Check(this,event)"  type="text" name="address" value="<?php  echo $updaterecord['address'];?>" class="form-control">
                        </div>
                        <div class="form-group">
                        <label class="redial-font-weight-600">Type of business</label>
                        <select  name="business_type" class="form-control select2">
                            <optgroup label="">
                            <option value="CA"></option>
                            <option value="NV">business</option>
                            <option value="OR">Pending</option>
                            </optgroup>
                        </select>
                        </div>
                        <div class="form-group">
                        <label class="redial-font-weight-600">State</label>
                        <input  onkeydown = "return Check(this,event)"  type="text" name="state"  value="<?php  echo $updaterecord['state'];?>" class="form-control">
                        </div>
                        <div class="form-group">
                        <label class="redial-font-weight-600">Message</label>
                        <input  onkeydown = "return Check(this,event)"  type="text" name="message" value="<?php  echo $updaterecord['message'];?>" class="form-control">
                        </div>
                        
                        
                    </div>


                    <div class="form-group">
      <label class="redial-font-weight-600" style="margin-bottom: 10px;">Status</label>


<?php 
if($action=='update'){
?>
<select  name="status" class="form-control" id='k'>
  <option value="Active" <?php if($updaterecord['status']=='Active'){echo "selected";} ?>>Active</option>
  <option value="Inactive" <?php if($updaterecord['status']=='Inactive'){echo "selected";} ?>>Inactive</option>

</select>
<?php }else{?>



<select  name="status" class="form-control" id='p'>
  <option value="Active" selected="selectd">Active</option>
  <option value="Inactive">Inactive</option>

</select>
<?php }?>

 </div>
                </div>
                
                                            
                                            
                                            
                                           
                <button type="submit" class="btn btn-primary btn-sm ">ADD</button>
                    <a href="<?php  echo base_url().'Product/creationlist';?>" class="btn btn-primary btn-sm">Cancel</a>
                                        </form>

                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        <script src="<?php echo base_url();?>assets/erpjs/add_company.js"></script>
                </div>
            </div>
</div>