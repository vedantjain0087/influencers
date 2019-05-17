<?php include 'component/header.php'?>
<div class="main">
    <div class="section">
        <div class="container">
        <br>
            <div class="animated fadeInRight">
<div class="row">
    <div class="col-lg-7">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Basic form
                    <small>Simple login form example</small>
                </h5>
                <div ibox-tools></div>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-sm-6 b-r"><h3 class="m-t-none m-b">Sign in</h3>

                        <p style="color:red;font-weight:bold">
                        <?php
                        $message = $this->session->flashdata('login_error');
                        if(isset($message)){
                            echo($message);
                        }else{
                        $this->session->unset_userdata('login_error'); 
                        }
                        ?>
                        <br></p>

                        <form method="post" action="<?= base_url('index.php/main/login')?>" role="form">
                            <div class="form-group"><label>Email</label> <input type="email" name="email" placeholder="Enter email" class="form-control"></div>
                            <div class="form-group"><label>Password</label> <input type="password" name="pass" placeholder="Password" class="form-control"></div>
                            <div>

                                <input name="submit" class="btn btn-sm btn-primary pull-right m-t-n-xs" value="Log in" type="submit">
                                <label> <input icheck type="checkbox" ng-model="main.unCheck"> Remember me </label>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-6"><h4>Not a member?</h4>

                        <p>You can create an account:</p>

                        <p class="text-center" style="font-size:100px;">
                            <a href="<?= base_url('index.php/main/signup')?>"><i class="fa fa-sign-in big-icon"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="col-lg-5">
        <img src="<?=base_url('public/img/untitled-1.gif')?>" height="300">
        </div>
 
    </div>
            </div>
            </div>
            </div>
            </div>

    <?php include 'component/footer.php'?>