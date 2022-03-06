<?php
//print_r($updaterecord);die;
//error_reporting(0);
if($updaterecord){
  $action='update';
}else{
  $action='create';
}
?>
<head><script src="//cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script></head>
<style>
    .error{
color: red;
    }
</style>

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
<form name="frm" id="addproduct" method="post" action="<?php  echo base_url()?>Product/product_management/<?php echo $action;?>"
enctype="multipart/form-data">
<div class="row">
<div class="col-md-4 col-sm-4 col-xs-12">
<div class="form-group">
<label class="redial-font-weight-600" style="margin-bottom: 10px;">Category</label>
 <select class="form-control "  name="fabric_category" onchange="test(this.value);" style="width: 100%;">
 <?php foreach ($record as $value){?>
  <option <?php if(!empty($updaterecord)){if($updaterecord['id']==$value['id']){echo "selected";}} ?> value="<?php  echo $value['id'];?>">
  <?php  echo $value['category_name'];?></option>

<?php }?>                                               </select>
</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12">
<div class="form-group">
<label class="redial-font-weight-600" style="margin-bottom: 10px;">Sub category</label>
<select  name="fabric_subcategory" id="fabric_subcategory" class="form-control">
    <option>Select</option>
 <?php foreach ($record3 as $key=>$value){

?>

<option <?php if(!empty($updaterecord)){if($updaterecord['id']==$value['id']){echo "selected";}} ?> value='<?php  echo $value['id'];?>'>
  <?php  echo $value['subcategory_name'];?></option>

<?php }?> 
</select>
</div>
</div>

</div>

<div class="row">
<div class="col-md-6 col-sm-6 col-xs-12">


<div class="form-group">
     <label class="redial-font-weight-600" style="margin-bottom: 10px;">Item code</label>
<input type="hidden" name="id" value="<?php  echo $updaterecord['id']; ?>">
<input type="text" name="Item_code" <?php if(!empty($pagestatus)){if($pagestatus=='view'){echo 'readonly' ;}} ?> value="<?php  echo $updaterecord['Item_code'];?>" class="form-control">
</div>
<div class="form-group">
<label class="redial-font-weight-600" style="margin-bottom: 10px;">Item name</label>
<input type="text"  name="Item_name" <?php if(!empty($pagestatus)){if($pagestatus=='view'){echo 'readonly' ;}} ?> value="<?php echo $updaterecord['Item_name']; ?>" class="form-control">
</div>
         
<div class="form-group">
<label class="redial-font-weight-600" style="margin-bottom: 10px;">Fabric type</label>
<select onchange="change_fabric(this);"  name="fabric_type" <?php if(!empty($pagestatus)){if($pagestatus=='view'){echo 'readonly' ;}} ?> class="form-control">
  <option value="">Select</option>
<option <?php if(!empty($updaterecord)){if($updaterecord['fabric_type']=='Solid'){echo "selected";}} ?>value="Solid">Solid</option>
<option <?php if(!empty($updaterecord)){if($updaterecord['fabric_type']=='Print'){echo "selected";}} ?> value="Print">Print</option>
                 
 </select>
</div>
<div class="form-group print_type" style="display: none;">
<label class="redial-font-weight-600" style="margin-bottom: 10px;">Print type</label>
 <select  name="select_print_type" <?php if(!empty($pagestatus)){if($pagestatus=='view'){echo 'readonly' ;}} ?> class="form-control">
<option>--Select--</option>

<?php foreach ($record2 as $key=>$value){

?>

<option <?php if(!empty($updaterecord)){if($updaterecord['select_print_type']==$value['id']){echo "selected";}} ?> value='<?php  echo $value['id'];?>'>
  <?php  echo $value['printtype_name'];?></option>

<?php }?>                  
 </select>
  </div>

<div class="form-group color_type" style="display: none;">
<label class="redial-font-weight-600" style="margin-bottom: 10px;">Select color</label>
<select  name=" select_color" <?php if(!empty($pagestatus)){if($pagestatus=='view'){echo 'readonly' ;}} ?> class="form-control">
<option>--Select--</option>

<?php foreach ($record4 as $key=>$value){

?>

<option <?php if(!empty($updaterecord)){if($updaterecord['select_color']==$value['id']){echo "selected";}} ?> value='<?php  echo $value['id'];?>'>
  <?php  echo $value['color_type'];?></option>

<?php }?>                  
 </select>
</div>
            <div class="form-group">
            <label class="redial-font-weight-600" style="margin-bottom: 10px;">Price</label>
            <input type="number"  name="price" <?php if(!empty($pagestatus)){if($pagestatus=='view'){echo 'readonly' ;}} ?> value="<?php  echo $updaterecord['price'];?>" value="" class="form-control">
            </div>
            <div class="form-group">
            <label class="redial-font-weight-600" style="margin-bottom: 10px;">Weaves</label>
            <input  name="weave" <?php if(!empty($pagestatus)){if($pagestatus=='view'){echo 'readonly' ;}} ?>  value="<?php  echo $updaterecord['weave'];?>" value="" class="form-control">
             
            </div>
            <div class="form-group">
            <label class="redial-font-weight-600" style="margin-bottom: 10px;">Quantity</label>
            <input type="number" <?php if(!empty($pagestatus)){if($pagestatus=='view'){echo 'readonly' ;}} ?>  name="quantity" value="<?php  echo $updaterecord['quantity'];?>" class="form-control">
            </div>

                  
<div class="form-group">
                    <label class="redial-font-weight-600" style="margin-bottom: 10px;">Fabric width</label>
                    <input type="number" <?php if(!empty($pagestatus)){if($pagestatus=='view'){echo 'readonly' ;}} ?> name="fabric" value="<?php echo $updaterecord['fabric'];?>" class="form-control">
                    </div>
                      <div class="form-group">
                <label>Product Image </label>
                  <input type="file" <?php if(!empty($pagestatus)){if($pagestatus=='view'){echo 'readonly' ;}} ?> class="" id="uploadfile" name="uploadfile" />
                 
                  <input type="hidden" class="" id="update_uploadfile" name="update_uploadfile"  value="<?php  echo $updaterecord['uploadfile'];?>">
                  <img src="<?php echo base_url();?>uploads/<?php  echo $updaterecord['uploadfile'];?>" alt="photo" style="border-radius: 50%; width:50px; height: 50px;">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    
                    <div class="form-group">
                    <label class="redial-font-weight-600" style="margin-bottom: 10px;">About the item</label>
                 <textarea class="ckeditor" id="about_the_item" name="about_the_item"><?php  echo $updaterecord['about_the_item'];?></textarea>
                    </div>
          <div class="form-group">

                   
<div class="col-md-6" >
    <label class="redial-font-weight-600 "  style="margin-bottom: 10px;">Thread count</label>
    <input type="number"  name="thread_count" <?php if(!empty($pagestatus)){if($pagestatus=='view'){echo 'readonly' ;}} ?> value="<?php  echo $updaterecord['thread_count'];?>" class="form-control" >
        
        </div>
        
        <div class="col-md-6">
            <label class="redial-font-weight-600"  style="margin-bottom: 10px;">&nbsp;</label>
                    <input type="number" <?php if(!empty($pagestatus)){if($pagestatus=='view'){echo 'readonly' ;}} ?>  name="thread_count" value="<?php  echo $updaterecord['thread_count'];?>" class="form-control" >
        
        </div>
                    </div>


                    <div class="form-group">
                         

       <div class="col-md-6" >
           <label class="redial-font-weight-600"  style="margin-bottom: 10px;">Construction count</label> 
            <input type="number"  name="construction" <?php if(!empty($pagestatus)){if($pagestatus=='view'){echo 'readonly' ;}} ?> value="<?php  echo $updaterecord['construction'];?>" class="form-control" >

        </div>


        <div class="col-md-6">
            <label class="redial-font-weight-600" style="margin-bottom: 10px;" >&nbsp;</label> 
            <input type="number"  name="construction" <?php if(!empty($pagestatus)){if($pagestatus=='view'){echo 'readonly' ;}} ?> value="<?php  echo $updaterecord['construction'];?>" class="form-control" >

          </div>
     
              
 
                
</div>
                    <div class="form-group">
                    <label class="redial-font-weight-600" style="margin-bottom: 10px;">Gram</label>
                    <input type="number"  name="gram" <?php if(!empty($pagestatus)){if($pagestatus=='view'){echo 'readonly' ;}} ?> value="<?php echo $updaterecord['gram'];?>" class="form-control">
                    </div>
                    <div class="form-group">
                    <label class="redial-font-weight-600" style="margin-bottom: 10px;">Floor number</label>
                    <input type="number"  name="floor_number" <?php if(!empty($pagestatus)){if($pagestatus=='view'){echo 'readonly' ;}} ?> value="<?php echo $updaterecord['floor_number'];?>" class="form-control">
                    </div>
                    <div class="form-group">
                    <label class="redial-font-weight-600" style="margin-bottom: 10px;">Rack number</label>
                    <input type="number"  name="rack_number" <?php if(!empty($pagestatus)){if($pagestatus=='view'){echo 'readonly' ;}} ?> value="<?php echo $updaterecord['rack_number'];?>" class="form-control">
                    </div>
                </div>
            </div>
                
                                        
                                        
               
          
              
    <div class="form-group">
  <label class="redial-font-weight-600" style="margin-bottom: 10px;">Status</label>


<?php 
if($action=='update'){
?>
<select  name="status"  id='k'>
<option value="Active" <?php if($updaterecord['status']=='Active'){echo "selected";} ?>>Active</option>
<option value="Inactive" <?php if($updaterecord['status']=='Inactive'){echo "selected";} ?>>Inactive</option>

</select>
<?php }else{?>



<select  name="status"  id='p'>
<option value="Active" selected="selectd">Active</option>
<option value="Inactive">Inactive</option>

</select>
<?php }?>







               
                </div>
           <?php  if($pagestatus!='view'){
                                                    ?>
     <button type="submit" class="btn btn-primary btn-sm ">ADD</button>
           <?php } ?>
                <a href="<?php  echo base_url().'Product/productlist';?>" class="btn btn-primary btn-sm">Cancel</a>
    
                                    </form>
                            </div>
                            </div>
                                    
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                               



<script src="<?php echo base_url();?>assets/erpjs/add_product.js"></script>

<script>

function test(x){
var category_name= x;
jQuery.ajax({
type: "POST",
url: "<?php echo base_url();?>" + "Product/getproduct/"+category_name,
data: {},
success: function(response) {


$('#fabric_subcategory').html(response);

}

});
//ajax se data send kroge ctroller ki kisi function pr
}




</script>
<script type="text/javascript"> 
function change_fabric($this)
{
  if($($this).val() == 'Solid')
  {
    $('.print_type').hide();
    $('.color_type').show();
  }else{
    $('.print_type').show();
    $('.color_type').hide();
  }
}

</script>

<script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
</script>