
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
<!DOCTYPE html>
<html>
<head>

  <style>
    .error{
      color: red;
    }
  </style>
  
</head>
<body>

<div class="container" style="padding: 10px;" >
  <h3> Add category</h3>
  <hr>
  <form   method ="post"  id="Addcategory" action="<?php  echo base_url();?>Product/mastercategory_management/<?php  echo $action;?>">
  <div class="row">

<div class="col-md-6">
  <div class ="form-group">
    <label for="category_name"><!-- Subcategory Name  -->Name<span class="validation-color" style="color: red;">*</span></label>
    <input type="hidden" name="id" value="<?php  echo $updaterecord['id'];?>">
    <input type="text" name="category_name"   onkeydown = "return Check(this,event)" value="<?php  echo $updaterecord['category_name'];?>" class="form-control">
    
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
  <div class ="form-group">
 <button type="submit" class="btn btn-primary btn-sm" style="text-align: center; float: right;">ADD</button>
    </form>
  </div>
  
</div>

</div>

</div>





<script src="<?php echo base_url();?>assets/erpjs/add_cat.js"></script>


</body>
</html>