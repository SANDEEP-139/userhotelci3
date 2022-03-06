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
<h3>Taxes</h3>

<div class="col-12 mb-4 mb-xl-0">
                                <div class="card redial-border-light redial-shadow mb-4">
                                    <div class="card-body">
                                                
                                                <form   method ="post"  id="addtax" action="<?php  echo base_url();?>Product/Tax/<?php  echo $action;?>">
  <div class="row">
    <div class="col-md-6">
      <div class ="form-group">
        <label for="tax_name"><!-- Tax Name  --> Tax name<span class="validation-color" style="color: red;">*</span></label>
        <input type="hidden" name="id" value="<?php  echo $updaterecord['id'];?>">
        <input type="text" name="tax_name" id="tax_name"  onkeydown = "return Check(this,event)" value="<?php  echo $updaterecord['tax_name'];?>" class="form-control" trim>
        
      </div>
         <div class ="form-group">
        <label for="tax_percentage"><!-- Tax percentage  -->Tax percentage <span class="validation-color" style="color: red;">*</span></label>
       
        <input type="text" name="tax_percentage" id="tax_percentage" onkeydown = "return Check(this,event)" value="<?php  echo $updaterecord['tax_percentage'];?>" class="form-control" trim>
        
      </div>



	  
            <div class="form-group">
      <label class="redial-font-weight-600" style="margin-bottom:10px;">Status</label>


<?php 
if($action=='update'){
?>
<select  name="status" class="form-control" id='k'>
  <option value="Active" <?php if($updaterecord['status']=='Active'){echo "selected";} ?>>Active</option>
  <option></option>
  <option value="Inactive" <?php if($updaterecord['status']=='Inactive'){echo "selected";} ?>>Inactive</option>

</select>
<?php }else{?>




 
<div class ="form-group">
<select  name="status" class="form-control select" id='p'>
  <option value="Active" selected="selectd">Active</option>
  <option value="Inactive">Inactive</option>
       </select> 
      </div>
 



<?php }?>







                   
                    </div>
    
      <div class ="form-group">
     <button type="submit" class="btn btn-primary btn-sm ">ADD</button>
        
        
      </div>
      
    </div>
    
  </div>
  </form>

                            
                                    </div>    
                                </div>
                            </div>
							                   













				   
                    <div class="col-12 col-sm-12">
                        <div class="row">
                            <div class="col-12 col-md-12 mb-4">
                                <div class="card redial-border-light redial-shadow">
                                    <div class="card-body" style="overflow: visible;">
                                    

                                        
                                    </div>
                                    <div>
                                                
<div class="card-body">
			<table id="" class="display table table-bordered" cellspacing="0" style="width:100%">
<thead>
	<tr>
		
	                  <th> s no</th>
		<th>tax Name</th>
                                    <th>tax percentage</th>
		<th>Status</th>
		<th>Actions</th>
	</tr>
</thead>
<tbody>
											
   <?php 

   $i=1;  
   foreach($record as $user){ ?>                  
             <tr>

     <td> <?php  echo $i;?></td>
     <td><?php  echo  $user['tax_name']?></td>
        <td><?php  echo  $user['tax_percentage']?></td>
<td>  <?php
        if($user['status'] == 'Active')
          {
            $checked = 'checked';
          }else
          {
            $checked = '';
          }?>
        <div class="custom-control custom-checkbox">
        
          <input cat_id_attr="<?php  echo $user['id']?>"   type="checkbox" <?php echo $checked;?> class="statuscheck custom-control-input" id="status_<?php  echo $user['id']?>">
          <label class="custom-control-label" for="status_<?php  echo $user['id']?>">&nbsp;</label>
        </div>
      </td>
        
       
        
            <td>
            <div class="btn-group">
               <a href="<?php  echo base_url().'Product/taxlist/'.$user['id'];?>"> <i class="fa fa-edit"></i></a>
            </div>    
            <div class="btn-group">
               <a href="<?php  echo base_url().'Product/Tax/delete/'.$user['id'];?>"> <i class="fa fa-trash"></i>
            </div>
            </td>
        </tr>
		<?php $i++;} ?>
      </tbody>
</table>

</div>           

</div>
</div>
</div>
</div>  


</div>
</div>
</div>
</div>
</div>



</div>


    <script>
       $(document).ready(function(){


       
$(".statuscheck").click(function () {
 var a = confirm('Are you sure you want to status changed success?');

if(a==true){
 var cat_id = $(this).attr('cat_id_attr');

          if ($(this).is(":checked")) {
              $.ajax({
                  url: '<?php echo base_url();?>Product/taxactive',
                  data: { title: 'Active',cat_id: cat_id},
                  method: "POST",
                  success: function(data) {
                   
                     location.reload();
                   
                  }             
              });
          } else {
                    $.ajax({
                       url: '<?php echo base_url();?>Product/taxactive',
                          data: { title: 'Inactive',cat_id: cat_id },
                          method: "POST",
                          success: function(data) {
                              location.reload();
                              //alert('Status changed');
                          }             
                      });
                  }
}else{
  
  //alert(alert($(this).is(":checked")));
}
//return false;

              });
      });

        </script>
        
        
        
           <script>
 $("#addtax").validate({
  
    rules: {
      tax_name:"required",
      tax_percentage:"required",
     
    },
   messages:{
    tax_name:"Please enter Tax  name",
    tax_percentage:"Please enter Tax percentage",
    
   }
    
  });
</script>

        <script>

    function Check($this,evt)
    {
        if(evt.keyCode == 32)
        {
           
            var checkdata = $($this).val();
             if(checkdata.length==0){
                  alert("Space not allowed");
                 return false;
             }
        }
        return true;
    }
    </script>
