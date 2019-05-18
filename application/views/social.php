<?php include 'components/header.php'?>
<?php include 'components/sidebar.php'?>
<div class="main-panel">
    <?php include 'components/navbar_before.php'?>
    <div class="content">
        <div class="row col-md-12">
            <ul class="nav nav-tabs ml-auto mr-auto" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#explore">Explore</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#connections">Connections</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content col-md-12">
                <!-- 1 -->
                <div id="explore" class="container tab-pane active"><br>
                    <h3>Explore Connections</h3>
                    <div class="row">
                        <?php
                    if (sizeof($explores)) {
                        $went_inside_loop = false;
                        foreach ($explores as $l) {
                            ?>
                        <?php
                            $found = false;
                            foreach ($connections as $c) {
                                if($c->user1 == $l->email || $c->user2 == $l->email){
                                    $found = true;
                                }
                            }
                            if (!sizeof($connections)) {
                                $found = false;
                            }
                            if(!$found){
                                $went_inside_loop = true;
                                ?>
                        <div class="col-md-12">
                            <div class="card card-user">
                                <div class="card-body custom_body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="<?=base_url('public/uploads/')?>/<?=$l->profile_picture?>"
                                                height="100" width="150" />
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <b>Name: </b> &nbsp;&nbsp;&nbsp;<?=$l->fullname?>
                                            </div>
                                            <div class="row">
                                                <b>Desciption: </b>
                                            </div>
                                            <div class="row">
                                                <b>Collaboration: </b>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6"><b>Platforms:</b>&nbsp;&nbsp;<?=$l->primary_foi?>
                                                    ,<?=$l->secondary_foi_1?>,
                                                    <?=$l->secondary_foi_2?></div>
                                                <div class="col-md-6"><b>Location :</b> <?=$l->city?> , <?=$l->state?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <button type="button" onclick="add_connection('<?=$l->email?>', this)"
                                                class="btn btn-primary">Connect+</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                
            }
                    } if (!$went_inside_loop) {
                        ?>
                        <div class="alert alert-danger col-md-12">No Users to explore</div>
                        <?php
                    }
                    ?>
                    </div>
                </div>

                <!-- 2 -->
                <div id="connections" class="container tab-pane"><br>
                    <h3>Your Connections</h3>
                    <div class="row">
                        <?php
                    if (sizeof($connections)) {
                        foreach ($connections as $c) {
                            ?>
                        <?php
                        if (sizeof($explores)) {

                            foreach ($explores as $l) {
                                if($l->email == $c->user1 || $l->email == $c->user2){

                                ?>
                        <div class="col-md-12">
                            <div class="card card-user">
                                <div class="card-body custom_body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="<?=base_url('public/uploads/')?>/<?=$l->profile_picture?>"
                                                height="100" width="150" />
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <b>Name: </b> &nbsp;&nbsp;&nbsp;<?=$l->fullname?>
                                            </div>
                                            <div class="row">
                                                <b>Desciption: </b>
                                            </div>
                                            <div class="row">
                                                <b>Collaboration: </b>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6"><b>Platforms:</b>&nbsp;&nbsp;<?=$l->primary_foi?>
                                                    ,<?=$l->secondary_foi_1?>,
                                                    <?=$l->secondary_foi_2?></div>
                                                <div class="col-md-6"><b>Location :</b> <?=$l->city?> , <?=$l->state?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                         }
                        }
                    
                }
            }
                    } else {
                        ?>
                        <div class="alert alert-danger col-md-12">No Users to explore</div>
                        <?php
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'components/footer.php'?>