<?php include 'component/header.php'?>

<div class="main">
    <div class="section">
        <div class="container">
            <div class="col-md-8 ml-auto mr-auto text-center">
            <h2 class="title"><strong>Set a password for your account</strong></h2>
                <br>
                <form action="<?=base_url('index.php/main/create_password')?>" method="post" role="form" class="form-inline">
                    <div class="form-group">
                        <input type="password" placeholder="Password" name="set_password" id="set_password" class="form-control"></div>
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    <div class="form-group">
                        <input type="password" onkeyup="check_confirm()" placeholder="Confirm-Password" name="set_cpassword" id="set_cpassword" class="form-control"></div>
                        <input type="hidden" name="set_pass_email" id="set_pass_email">
                        &nbsp;
                    &nbsp;
                    &nbsp;
                    <button id="set_password_btn"class="btn btn-white" type="submit" disabled>Ok</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'component/footer.php'?>
