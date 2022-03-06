<?php
//error_reporting(0);
if ($userrecord) {
    $action = 'update';
} else {
    $action = 'create';
}
?>

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
            <div class="card redial-border-light redial-shadow mb-4">
                <div class="card-body">

                    <form   method ="post"   action="<?php echo base_url() . 'Admin/usermanagement/' . $action; ?>">
                        <div class="row">

                            <div class="col-md-6">
                                <div class ="form-group">
                                    <label for="Name"><!--  Profile Name  -->Name<span class="validation-color" style="color: red;">*</span></label>
                                    <input type="hidden" name="hidden_id" value="<?php echo $userrecord['user_id']; ?>">
                                    <input type="text" name="name" value="<?php echo $userrecord['name']; ?>" class="form-control">

                                </div>
                                <div class ="form-group">
                                    <label for="Email"><!-- Profile Email  -->Email<span class="validation-color" style="color: red;">*</span></label>     
                                    <input type="text" name="admin_email" value="<?php echo $userrecord['admin_email']; ?>" class="form-control" disabled>

                                </div>
                                
                                <div class ="form-group">
                                    <label for="Contact"><!-- Profile Contact  -->Contact<span class="validation-color" style="color: red;">*</span></label>     
                                    <input type="text" name="mobilenumber" value="<?php echo $userrecord['mobilenumber']; ?>" class="form-control">
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
    </div>
</div>
</div>
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
    <head>
        <style>
            #passmatch{
                color:red;
            }
            </style>
    </head>
<div id="content">
    <div class="row mb-4">
        <div class="col-12 mb-4 mb-xl-0">
            <div class="card redial-border-light redial-shadow mb-4">
                <div class="card-body">

                    <form   method ="post"   action="<?php echo base_url();?>Admin/changePassword">
                            <div class="row">
                            <div class="col-md-6">
                                <div class ="form-group">
                                    <label for="Name"><!--  Profile Name  -->Old password<span class="validation-color" style="color: red;">*</span></label>
                                    <input type="hidden" name="hidden_id" value="">
                                    <input type="password" name="oldpassword"  id="oldpassword " value="" class="form-control">

                                </div>
                                 <div class ="form-group">
                                    <label for="New  password"><!--  Profile Name  -->New  password<span class="validation-color" style="color: red;">*</span></label>
                                   
                                    <input type="password" name="newpassword" id="newpassword" onkeyup="checkpass()" value="" class="form-control">

                                </div>
                                
                                <div class ="form-group">
                                    <label for="Password"><!-- Profile Email  -->confirm password<span class="validation-color" style="color: red;">*</span></label>     
                                    <input type="password" name="confirmpassword" id="confirmpassword" onkeyup="checkpass()" value="" class="form-control">
                                    <span id="passmatch"> </span>
                                </div>


                                <div class ="form-group">
                                    <button type="submit" id="btnSubmit" class="btn btn-primary btn-sm ">Submit</button>


                                </div>
                                </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

        
        <script>
    function checkpass() {
    //alert($("#newpassword").val()); return false;
        var newpassword = document.getElementById('newpassword').value; 
       // alert(newpassword); return false;
        var confirmpassword = document.getElementById('confirmpassword').value; 
      if (newpassword == confirmpassword) {
           // alert("matched");
         
            console.log('matched');
            $('#passmatch').html(' new password and confirm password is matched');
        }
        else if (newpassword != confirmpassword) {
         // alert(' new password is confirm password  did not matched');
         //console.log(' did not matched');
                  $('#passmatch').html('new password and confirm password is not matched');
        }
    }

</script>

















