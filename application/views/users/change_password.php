
<div class="row justify-content-center">
    <div class="col-6">
        <h1><?php echo $title ?></h1>
        <?php echo form_open('users/changePassword', array('id' => 'passwordForm'))?>
            <div class="form-group">
                <input type="password" name="password"  id="txtPassword" class="form-control" placeholder="Old Password" />
                <?php echo form_error('oldpass', '<div class="error">', '</div>')?>
            </div>
            <div class="form-group">
                <input type="password" name="confirmPassword" id="txtConfirmPassword" class="form-control" placeholder="New Password" />
                <?php echo form_error('newpass', '<div class="error">', '</div>')?>
            </div>
            
            <div class="form-group">
                <button type="submit"   id="btnSubmit"  class="btn btn-success">Change Password</button>
            </div>
        <?php echo form_close(); ?>
    </div>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("#btnSubmit").click(function () {
            var password = $("#txtPassword").val();
            var confirmPassword = $("#txtConfirmPassword").val();
            if (password != confirmPassword) {
                alert("Passwords do not match.");
                return false;
            }
            return true;
        });
    });
</script>