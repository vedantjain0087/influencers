<?php include 'component/header.php'?>

<div class="main">
    <div class="section">
        <div class="container row">
            <div class="col-md-5">
                <br>
            <img class="col-md-12" src="<?=base_url('public/img/socialtakeover1.png')?>">
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5">
            <h2 style="font-weight: 700;"><strong>Business Profile</strong></h2>
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
                    $company = $d->company;
                    $supporting_creative = $d->supporting_creative;
                    $work_with = $d->work_with;
                    $collaboration_terms = $d->collaboration_terms;
                }
            }
            else{
                    $company = "";
                    $supporting_creative = "";
                    $work_with = "";
                    $collaboration_terms = "";
            }
           
            ?>
            <form method="post" action="<?= base_url('index.php/main/send_business_data')?>" role="form">
                            <div class="form-group"><label>Sector / company's worked with in past</label> <input value="<?= $company?>" id="company" type="text" name="company" placeholder="Enter Here" class="form-control"></div>
                            <div class="form-group"><label>Supporting Creatives</label> <input value="<?= $supporting_creative?>" type="text" name="supporting_creative" placeholder="Enter Supporting Creative" class="form-control"></div>
                            <div class="form-group"><label>Sector / Company's looking to work with</label> <input value="<?= $work_with?>" type="text" id="work_with" name="work_with" placeholder="Enter Here" class="form-control"></div>
                            <div class="form-group"><label>Collaboration Terms (if any)</label> <input value="<?= $collaboration_terms?>" type="text" name="collaboration_terms" placeholder="Enter Collaboration Terms" class="form-control"></div>
                            <div>

                                <input name="submit" class="btn btn-sm btn-primary pull-right m-t-n-xs" value="Build" type="submit">
                            </div>
                        </form>
            </div>
        </div>
    </div>
</div>
<?php include 'component/footer.php'?>
