<?php include 'component/header.php'?>

<div class="main">
    <div class="section">
        <div class="container row">
            <div class="col-md-7">
                <br>
            <img class="col-md-12" src="<?=base_url('public/img/social-media-community-cohesion.jpg')?>">
            </div>
            <div class="col-md-5">
            <h2 style="font-weight: 700;"><strong>Build Community</strong></h2>
            <br>
            <p style="color:red;font-weight:bold">
                        <?php
                        $message = $this->session->flashdata('save_error');
                        if(isset($message)){
                            echo($message);
                        }else{
                        $this->session->unset_userdata('save_error'); 
                        }
                        ?>
            </p>
            <p style="color:green;font-weight:bold">
                        <?php
                        $message = $this->session->flashdata('save_success');
                        if(isset($message)){
                            echo($message);
                        }else{
                        $this->session->unset_userdata('save_success'); 
                        }
                        ?>
            </p>
            <br>
            <?php
            if($data){
                foreach ($data as $d){
                    $look_for_mentor = $d->look_for_mentor;
                    $discussion = $d->discussion;
                }
            }
            else{
                    $look_for_mentor = "";
                    $discussion = "";
            }
           
            ?>
            <form method="post" action="<?= base_url('index.php/main/send_community_data')?>" role="form">
                            <div class="form-group"><label>Looking for mentor</label> <input value="<?= $look_for_mentor ?>" type="text" id="look_for_mentor" name="look_for_mentor" placeholder="Enter Here" class="form-control"></div>
                            <div class="form-group"><label>Discussion</label> <input value="<?= $discussion ?>" type="text" name="discussion" placeholder="Enter Here" class="form-control"></div>
                            <div>
                                <input name="submit" class="btn btn-sm btn-primary pull-right m-t-n-xs" value="Build" type="submit">
                            </div>
                        </form>
            </div>
        </div>
    </div>
</div>
<?php include 'component/footer.php'?>
