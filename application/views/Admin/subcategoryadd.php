 
<?php
error_reporting(0);
if ($updaterecord) {
    $action = 'update';
} else {
    $action = 'create';
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
            $success = $this->session->userdata('success');
            if ($success != "") {
                ?>
                <div class="alert alert-success"><?php echo $success; ?></div>
                <?php
            }
            ?>
            <?php
            $failure = $this->session->userdata('failure');
            if ($failure != "") {
                ?>
                <div class="alert alert-success"><?php echo $failure; ?></div>
                <?php
            }
            ?>
        </div>
      
        <div class="container" style="padding: 10px;" >
            <h3> Add New Subcategory</h3>
            <hr>

            <div class="row">

                <div class="col-md-6">
                    <form  id="add_subcats" name="add_subcat" method="post" action="<?php echo base_url(); ?>Product/mastersubcateg_management/<?php echo $action; ?>">
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?php echo $updaterecord['id']; ?>">
                            <label for="category"><!-- Select Category  -->Select<span class="validation-color">*</span></label>
                            <select class="form-control select2" id="category" name="category" style="width: 100%;">
                                <option value="<?php echo $updaterecord['category']; ?>">Select</option>
                                <?php
                                foreach ($record3 as $key => $value) {
                                    # code...
                                    ?>
                                    <option value="<?php echo $value['id']; ?>" selected="<?php if ($value['id'] == $updaterecord['id']) {
                                        echo "selected";
                                    } ?>">    

    <?php echo $value['category_name']; ?>

                                    </option>


<?php } ?>


                            </select>
                            <span class="validation-color" id="err_category"></span>
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label for="subcategory_name"><!-- Subcategory Name  -->Name<span class="validation-color" style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="subcategory_name" id="subcategory_name"  onkeydown = "return Check(this, event)" value="<?php echo $updaterecord['subcategory_name']; ?>"
                                   >
                        </div>


                        <div class="form-group">
                            <label class="redial-font-weight-600" style="margin-bottom:10px;">Status</label>


<?php
if ($action == 'update') {
    ?>
                                <select  name="status" class="form-control" id='k'>
                                    <option value="Active" <?php if ($updaterecord['status'] == 'Active') {
        echo "selected";
    } ?>>Active</option>
                                    <option value="Inactive" <?php if ($updaterecord['status'] == 'Inactive') {
        echo "selected";
    } ?>>Inactive</option>

                                </select>
<?php } else { ?>



                                <select  name="status" class="form-control" id='p'>
                                    <option value="Active" selected="selectd">Active</option>
                                    <option value="Inactive">Inactive</option>

                                </select>
<?php } ?>








                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-sm " style=" text-align:center;float: right;">ADD</button>


                        </div>

                    </form> 
                </div>
            </div>
        </div>

    </div>
</div>


<script src="<?php echo base_url();?>assets/erpjs/add_cat.js"></script>

 
