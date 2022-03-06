 
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
                                      <form  id="Addworker" action="<?php  echo base_url();?>Product/jobwoker_management/<?php  echo $action;?>" method="post">
                
                
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                        <label class="redial-font-weight-600">Employee Name</label>
                        <input type="hidden" name="id" value="<?php  echo $updaterecord['id'];?>">
                        <input onkeydown = "return Check(this,event)"  type="text" name="name"  value="<?php  echo $updaterecord['name'];?>" class="form-control">
                        </div>
                        <div class="form-group">
                        <label class="redial-font-weight-600">Username</label>
                        <input onkeydown = "return Check(this,event)"  type="text" name="username" value="<?php  echo $updaterecord['username'];?>" class="form-control">
                        </div>
                        <div class="form-group">
                        <label class="redial-font-weight-600">Email Address</label>
                        <input onkeydown = "return Check(this,event)"  type="text" name="email" value="<?php echo $updaterecord['email'];?>" class="form-control">
                        </div>
                        <div class="form-group">
                        <label class="redial-font-weight-600">Password</label>
                        <input onkeydown = "return Check(this,event)"  type="Password" name="password" value="<?php echo $updaterecord['password']; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                        <label class="redial-font-weight-600">Contact</label>
                        <input onkeydown = "return Check(this,event)"  type="text" name="mobilenumber" value="<?php echo $updaterecord['mobilenumber']; ?>" class="form-control">
                        </div>
                    
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                       
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
                </div>
                              
                                            
                                            
                 <button type="submit" class="btn btn-primary btn-sm ">ADD</button>
                    <a href="<?php  echo base_url().'Product/listjobworker';?>" class="btn btn-primary btn-sm">Cancel</a>
        

                                        </form>

                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        <script src="<?php echo base_url();?>assets/erpjs/add_work.js"></script>
                </div>
            </div>
</div>