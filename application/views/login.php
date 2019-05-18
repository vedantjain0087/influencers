<?php include 'components/header.php'?>
<?php include 'components/sidebar.php'?>
<div class="main-panel">
    <?php include 'components/navbar_before.php'?>

    <div class="content">
        <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Login</h5>
                <?php
                if ($this->session->flashdata('login_message')) {
                ?>
                <div class="alert alert-danger">
                  <?=$this->session->flashdata('login_message');?>
                </div>
                <?php
              $this->session->unset_userdata('login_message');
              }
              ?>
              </div>
              <div class="card-body">
                <form method="post" action="<?=base_url('index.php/main/login')?>">
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Username/Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Username/Email">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto" style="margin-top:30px;">
                      <input type="submit" value="Login" name="submit" class="btn btn-primary btn-round">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
            <div class="col-md-2"></div>
        </div>
    </div>

</div>
<?php include 'components/footer.php'?>