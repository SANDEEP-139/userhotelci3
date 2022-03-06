 
   
<div class="container">
<div class="row">
        <div class="col-md-12">
            <?php
            $success=$this->session->userdata('success');
            if ($success != "") {   
            ?>
            <div class="alert alert-success" style="position: relative; left: 22px;"><?php  echo $success;?></div>
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
                                <div class="card redial-border-light redial-shadow mb-4">
                                    <div class="card-body">
                                                
                  <ul class="list-inline mb-0">
                    <li id="dropzone" class="list-inline-item mr-3 redial-relative">
                    <div class="row">
               <div class="col-md-5 col-sm-5 col-xs-6">
          <a href="<?php  echo base_url().'Product/updateproductlist';?>" class="btn btn-primary btn-xs text-uppercase"> Add Product</a>
                          </div>
                                               
                                                
                                                
                      </div> 
                </li>

              </ul>
                            
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
        <th>Srno</th>
        <th>Item code</th>
        <th>Item name</th>
        <th>barcode</th>
        <th>fabric category</th>
        <th>fabric subcategory</th>
        <th>fabric type</th>
        <th>select print type</th>
        <th>select color</th>
        <th>price</th>
        <th>quantity</th>
        <th>about the item</th>
        <th>thread count</th>
        <th>Construction</th>
        <th>gram</th>
        <th>Floornumber</th>
        <th>Racknumber</th>
        <th>fabric</th>
        <th>weave</th>
        <th>upload</th>
        <th>Status</th>
        
        <th>Actions</th>
                </tr>
        </thead>
        <tbody>

<?php  
$i = 1;
         foreach($record as $user){ ?>

            <tr>
    <td> <?php  echo $i;?></td>
    <td><?php  echo  $user['Item_code']?></td>
    <td> <?php  echo $user['Item_name']?></td>
    <td><a href="<?php echo base_url(); ?>generate/generate_barcode.php?id=<?php echo $user['Item_code']; ?>&&name=<?php echo $user['Item_name']; ?>"><i class="fa fa-download" aria-hidden="true"></i></a></td>
    <td><?php  echo  $user['fabric_category']?></td>
    <td> <?php  echo $user['fabric_subcategory']?></td>
    <td><?php  echo  $user['fabric_type']?></td>
    <td> <?php  echo $user['select_print_type']?></td>
    <td><?php  echo  $user['select_color']?></td>
    <td> <?php  echo $user['price']?></td>
    <td><?php  echo  $user['quantity']?></td>
    <td> <?php  echo $user['about_the_item']?></td>
    <td><?php  echo  $user['thread_count']?></td>
    <td> <?php  echo $user['construction']?></td>
    <td><?php  echo  $user['gram']?></td>
    <td><?php  echo  $user['floor_number']; ?></td>
    <td><?php  echo  $user['rack_number'];?></td>
    <td> <?php  echo $user['fabric']?></td>
    <td><?php  echo  $user['weave']?></td>
    <td><img src="<?php echo base_url();?>/uploads/<?php  echo $user['uploadfile'];?>" height="55px" width="100px"/></td>
<td> 
        <?php
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
             <a href="<?php  echo base_url().'Product/updateproductlist/'.$user['id'];?>"> <i class="fa fa-edit"></i></a>
            </div>  
           <div class="btn-group">
             <a href="<?php echo base_url(); ?>Product/updateproductlist/<?php echo $user['id']; ?>/view">View</a>
            </div>
            <div class="btn-group">
              <a href="<?php  echo base_url().'Product/product_management/delete/'.$user['id'];?>
                " onclick="return confirm('Are you sure you want to delete this item?');" >  <i class="fa fa-trash"></i></a>
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
                  url: '<?php echo base_url();?>Product/getproductactive',
                  data: { title: 'Active',cat_id: cat_id},
                  method: "POST",
                  success: function(data) {
                   
                     location.reload();
                   
                  }             
              });
          } else {
                    $.ajax({
                       url: '<?php echo base_url();?>Product/getproductactive',
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
                                                           
                                                
                                                
                        