 
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
 <div id="content">
                <div class="row mb-4">
                    <div class="col-12 mb-4 mb-xl-0">
                                
                            </div>
                    <div class="col-12 col-sm-12">
                        <div class="row">
                            <div class="col-12 col-md-12 mb-4">
                                <div class="card redial-border-light redial-shadow">
                                    <div class="card-body" style="overflow: visible;">
                                      <form  id="Addsupplier" action="<?php  echo base_url();?>Product/supplier_management/<?php  echo $action;?>" method="post">
                <div class="row">
                    
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="form-group">
                        <label class="redial-font-weight-600" style="margin-bottom: 10px;"> category</label>
                          <select class="form-control select2" id="category" name="category" onchange="test(this.value);" style="width: 100%;">
                        <option value="">--Select--</option>

                        <?php foreach ($record as $key=>$value){

                        ?>

                        <option <?php if(!empty($updaterecord)){if($updaterecord['category']==$value['id']){echo "selected";}} ?> value='<?php  echo $value['id'];?>'>
                          <?php  echo $value['category_name'];?></option>

                        <?php }?>                                               </select>
                        </div>
                    </div>
                   
                </div>
                
                
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                        <label class="redial-font-weight-600" style="margin-bottom: 10px;">Name</label>
                        <input type="hidden" name="id" value="<?php  echo $updaterecord['id'];?>">
                        <input onkeydown = "return Check(this,event)" id="name" type="text" name="name" value="<?php  echo $updaterecord['name'];?>" class="form-control">
                        </div>
                        <div class="form-group">
                        <label class="redial-font-weight-600" style="margin-bottom: 10px;">credit period</label>
                        <input onkeydown = "return Check(this,event)" type="text"  name="credit_period" value="<?php  echo $updaterecord['credit_period'];?>" class="form-control">
                        </div>
                        <div class="form-group">
                        <label class="redial-font-weight-600" style="margin-bottom: 10px;">Pan</label>
                        <input onkeydown = "return Check(this,event)"type="text" name="pan" value="<?php  echo $updaterecord['pan'];?>" class="form-control">
                        </div>
                        <div class="form-group">
                        <label class="redial-font-weight-600" style="margin-bottom: 10px;">Opening balance</label>
                        <input   onkeydown = "return Check(this,event)" type="text" name="opening_balance" value="<?php  echo $updaterecord['opening_balance'];?>" class="form-control">
                        </div>
                        <div class="form-group">
                        <label class="redial-font-weight-600" style="margin-bottom: 10px;">Contact person name</label>
                        <input onkeydown = "return Check(this,event)" type="text" name="contact_person_name" value="<?php  echo $updaterecord['contact_person_name'];?>" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                        <label class="redial-font-weight-600" style="margin-bottom: 10px;">Address</label>
                        <input onkeydown = "return Check(this,event)" type="text" name="address" value="<?php  echo $updaterecord['address'];?>" class="form-control">
                        </div>
                        <div class="form-group">
                        <label class="redial-font-weight-600" style="margin-bottom: 10px;">City</label>
                        <input onkeydown = "return Check(this,event)" type="text" name="city" value="<?php  echo $updaterecord['city'];?>" class="form-control">
                        </div>
                        <div class="form-group">
                        <label class="redial-font-weight-600" style="margin-bottom: 10px;">State</label>
                        <input onkeydown = "return Check(this,event)" type="text" name="state"  value="<?php  echo $updaterecord['state'];?>" class="form-control">
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
                </div>
                
                                            
                                            
                                            
                                           
                <button type="submit" class="btn btn-primary btn-sm ">ADD</button>
                    <a href="<?php  echo base_url().'Product/supplierlist';?>" class="btn btn-primary btn-sm">Cancel</a>
        
                                        </form>

                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        <script src="<?php echo base_url();?>assets/erpjs/add_supplier.js"></script>
                </div>
            </div>
