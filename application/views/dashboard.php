<?php include 'component/header.php'?>
<div class="main">
   <div class="section">
      <div class="container">
         <div class="col-md-8 ml-auto mr-auto text-center">
            <h2 class="title"><strong>Welcome To Dashboard</strong></h2>
            <br>
         </div>
      </div>
      <div class="container row ml-auto mr-auto text-center">
         <div class="col-lg-3 col-md-6">
            <div class="social-box facebook">
               <i class="fa fa-facebook"></i>
               <ul>
                  <li>
                     <sctrong>
                     <span class="count">40</span> k</strong>
                     <span>friends</span>
                  </li>
                  <li>
                     <sctrong>
                     <span class="count">450</span></strong>
                     <span>feeds</span>
                  </li>
               </ul>
            </div>
            <!--/social-box-->
         </div>
         <!--/.col-->
         <div class="col-lg-3 col-md-6">
            <div class="social-box twitter">
               <i class="fa fa-twitter"></i>
               <ul>
                  <li>
                     <sctrong>
                     <span class="count">30</span> k</strong>
                     <span>friends</span>
                  </li>
                  <li>
                     <sctrong>
                     <span class="count">450</span></strong>
                     <span>tweets</span>
                  </li>
               </ul>
            </div>
            <!--/social-box-->
         </div>
         <!--/.col-->
         <div class="col-lg-3 col-md-6">
            <div class="social-box linkedin">
               <i class="fa fa-linkedin"></i>
               <ul>
                  <li>
                     <sctrong>
                     <span class="count">40</span> +</strong>
                     <span>contacts</span>
                  </li>
                  <li>
                     <sctrong>
                     <span class="count">250</span></strong>
                     <span>feeds</span>
                  </li>
               </ul>
            </div>
            <!--/social-box-->
         </div>
         <!--/.col-->
         <div class="col-lg-3 col-md-6">
            <div class="social-box google-plus">
               <i class="fa fa-instagram"></i>
               <ul>
                  <li>
                     <sctrong>
                     <span class="count">94</span> k</strong>
                     <span>followers</span>
                  </li>
                  <li>
                     <sctrong>
                     <span class="count">92</span></strong>
                     <span>circles</span>
                  </li>
               </ul>
            </div>
            <!--/social-box-->
         </div>
         <!--/.col-->
      </div>
      <br>
      <br>
      <br>
      <div class="section section-dark ml-auto mr-auto text-center" style="padding:5px;color:white;">
         <div class="tim-title">
            <h3>Let us know your social presence</h3>
         </div>
      </div>
      <br>
      <br>
      <div class="col-md-12 ml-auto mr-auto text-center">
         <?php
            $m = $this->session->flashdata('insert_success');
            if($m){
            ?>
         <div class="alert alert-success">
            <div class="container">
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <i class="nc-icon nc-simple-remove"></i>
               </button>
               <span><?= $m?></span>
            </div>
         </div>
         <?php
            }else{
            $this->session->unset_userdata('insert_success'); 
            }
            ?>
         <?php
            if($data){
                foreach ($data as $d){
                    $f_fb = $d->f_fb;
                    $f_instagram = $d->f_instagram;
                    $f_twitter = $d->f_twitter;
                }
            }
            else{
                    $f_fb = "";
                    $f_instagram = "";
                    $f_twitter = "";
            }
            
            ?>

               <?php
            if($user_data){
                foreach ($user_data as $d){
                    $profile_url = $d->profile_url;
                }
            }
            else{
                    $profile_url = "";
            }
            
            ?>
         <div class="nav-tabs-navigation">
            <div class="nav-tabs-wrapper">
               <ul id="tabs" class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                     <a class="nav-link active" data-toggle="tab" href="#fb" role="tab">Facebook</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" data-toggle="tab" href="#insta" role="tab">Instagram</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" data-toggle="tab" href="#twitter" role="tab">Twitter</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" data-toggle="tab" href="#linkedin" role="tab">LinkedIn</a>
                  </li>
               </ul>
            </div>
         </div>
         <div id="my-tab-content" class="tab-content text-center">
            <div class="tab-pane active" id="fb" role="tabpanel">
               <p>
               <form method="post" action="<?=base_url('index.php/main/f_fb')?>">
                  <div class="row">
                     <div class="col-md-3"></div>
                     <input type="text" value="<?= $f_fb ?>" class="form-control col-md-4" name="f_fb" id="f_fb" placeholder="Facebook Followers"/>
                     <div class="col-md-1"></div>
                     <input class="col-md-1 btn btn-primary" type="submit" value="Ok"/>
                     <div class="col-md-3"></div>
                  </div>
               </form>
               </p>
            </div>
            <div class="tab-pane" id="twitter" role="tabpanel">
               <p>
               <form method="post" action="<?=base_url('index.php/main/f_twitter')?>">
                  <div class="row">
                     <div class="col-md-3"></div>
                     <input type="text" value="<?= $f_twitter ?>" class="form-control col-md-4" name="f_twitter" id="f_twitter" placeholder="Twitter Followers"/>
                     <div class="col-md-1"></div>
                     <input class="col-md-1 btn btn-primary" type="submit" value="Ok"/>
                     <div class="col-md-3"></div>
                  </div>
               </form>
               </p>
            </div>
            <div class="tab-pane" id="insta" role="tabpanel">
               <p>
               <form method="post" action="<?=base_url('index.php/main/f_insta')?>">
                  <div class="row">
                     <div class="col-md-3"></div>
                     <input type="text" value="<?= $f_instagram ?>" class="form-control col-md-4" name="f_insta" id="f_insta" placeholder="Instagram Followers"/>
                     <div class="col-md-1"></div>
                     <input class="col-md-1 btn btn-primary" type="submit" value="Ok"/>
                     <div class="col-md-3"></div>
                  </div>
               </form>
               </p>
            </div>
            <div class="tab-pane" id="linkedin" role="tabpanel">
               <p>
               <form method="post" action="<?=base_url('index.php/main/f_linkedin')?>">
                  <div class="row">
                     <div class="col-md-3"></div>
                     <input type="text" class="form-control col-md-4" name="f_linkedin" id="f_linkedin" placeholder="LinkedIn Followers"/>
                     <div class="col-md-1"></div>
                     <input class="col-md-1 btn btn-primary" type="submit" value="Ok"/>
                     <div class="col-md-3"></div>
                  </div>
               </form>
               </p>
            </div>
         </div>
      </div>
      <br>
      <hr>
      <div class="container">
         <div class="col-md-8 ml-auto mr-auto text-center">
            <h2 class="title"><strong>Your Plan Details</strong></h2>
            Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.
            <br>
         </div>
      </div>
      <div class="container">
         <div class="col-md-8 ml-auto mr-auto text-center">
            <h2 class="title"><strong>Do you wish to get a profile domain?</strong></h2>
            No
            &nbsp;
            &nbsp;
            &nbsp;
            <label class="switch">
            <?php
         if ($profile_url == NULL or $profile_url == ""){
            $m = "";
         }else{
            $m = "checked='checked'";
         }
         ?>
            <input id="profile_switch" type="checkbox" <?=$m ?>>
            <span class="slider round"></span>
            </label>
            YES
            <br>
         </div>
         <?php
         if ($profile_url == NULL or $profile_url == ""){
            $m = "display:none";
         }else{
            $m = "";
            
         }
         ?>
         <div id="profile_url_box" style="<?= $m?>" class="col-md-4 ml-auto mr-auto text-center">
         <input type="text" value="<?= $profile_url?>" onkeyup="check_profile()" class="form-control" id="profile_url" placeholder="Choose your URL"/>
         <br>
         <button type="button" onclick="submit_profile_url()" class="btn btn-primary">Ok</button>
         </div>
      </div>
   </div>
</div>
<?php include 'component/footer.php'?>
