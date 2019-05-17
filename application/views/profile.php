<?php include 'component/header.php'?>

<div class="main">
    <div class="section">
        <div class="container row">
            <div class="col-md-7">
                <br>
            <img class="col-md-12" src="<?=base_url('public/img/professional-brand.jpg')?>">
            </div>
            <div class="col-md-5">
            <h2 style="font-weight: 700;"><strong>Build Your Profile</strong></h2>
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
                    $stats = $d->stats;
                    $age = $d->age;
                    $location = $d->location;
                }
            }
            else{
                    $stats = "";
                    $age = "";
                    $location = "";
            }
           
            ?>
            <form method="post" action="<?= base_url('index.php/main/send_dashboard_data')?>" role="form">
                            <div class="form-group"><label>Audience Stats</label> <input value="<?= $stats ?>" type="text" name="stats" placeholder="Enter Stats" class="form-control"></div>
                            <div class="form-group"><label>Age</label> <input value="<?= $age?>" type="text" name="age" placeholder="Enter Age" class="form-control"></div>
                            <div class="form-group"><label>Location</label> <input value="<?= $location?>" itype="text" name="location" placeholder="Enter Location" class="form-control"></div>
                            <div>
                                <input name="submit" class="btn btn-sm btn-primary pull-right m-t-n-xs" value="Build" type="submit">
                            </div>
                        </form>
            </div>
        </div>
    </div>
</div>
<?php include 'component/footer.php'?>
