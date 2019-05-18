<?php include 'components/header.php'?>
<?php include 'components/sidebar.php'?>
<div class="main-panel">
    <?php include 'components/navbar_before.php'?>
    <div class="content">
        <div class="row col-md-12">
            <ul class="nav nav-tabs ml-auto mr-auto" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#all">All</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#invited">Invited</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#applied">Applied</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#approved">Approved</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#submitted">Submitted</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#completed">Completed</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content col-md-12">
                <!-- 1 -->
                <div id="all" class="container tab-pane active"><br>
                    <h3>Live Campaigns!</h3>
                    <div class="row">
                        <?php
if (sizeof($live_campaigns)) {
    foreach ($live_campaigns as $l) {
        ?>
                        <div class="col-md-12">
                            <div class="card card-user">
                                <div class="card-body custom_body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="<?=base_url('public/uploads/')?>/<?=$l->image;?>" height="100"
                                                width="150" />
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-6"><b>Name:</b>&nbsp;&nbsp;&nbsp;<?=$l->name?></div>
                                                <div class="col-md-6"><b>Details:</b>&nbsp;&nbsp;<?=$l->description?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6"><b>Platform:</b>&nbsp;&nbsp;<?=$l->platform?>
                                                </div>
                                                <div class="col-md-6"><b>Exp_date:</b>&nbsp;&nbsp;<?=$l->exp_date?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <font size="5">Fee:</font>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    } else {
                        ?>
                        <div class="alert alert-danger col-md-12">No Live Campaigns</div>
                        <?php
                    }
                    ?>
                    </div>
                </div>


                <!-- 2 -->
                <div id="invited" class="container tab-pane"><br>
                    <h3>Invited Campaigns</h3>
                    <div class="row">
                        <?php
if (sizeof($invited_campaigns)) {
    foreach ($invited_campaigns as $l) {
        ?>
                        <div class="col-md-12">
                            <div class="card card-user">
                                <div class="card-body custom_body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="<?=base_url('public/uploads/')?>/<?=$l->image;?>" height="100"
                                                width="150" />
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-6"><b>Name:</b>&nbsp;&nbsp;&nbsp;<?=$l->name?></div>
                                                <div class="col-md-6"><b>Details:</b>&nbsp;&nbsp;<?=$l->description?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6"><b>Platform:</b>&nbsp;&nbsp;<?=$l->platform?>
                                                </div>
                                                <div class="col-md-6"><b>Exp_date:</b>&nbsp;&nbsp;<?=$l->exp_date?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <font size="5">Fee:</font>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    } else {
                        ?>
                        <div class="alert alert-danger col-md-12">No Invited Campaigns</div>
                        <?php
                    }
                    ?>
                    </div>
                </div>
                <!-- 3 -->
                <div id="applied" class="container tab-pane"><br>
                    <h3>Applied Campaigns</h3>
                    <div class="row">
                        <?php
if (sizeof($applied_campaigns)) {
    foreach ($applied_campaigns as $l) {
        ?>
                        <div class="col-md-12">
                            <div class="card card-user">
                                <div class="card-body custom_body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="<?=base_url('public/uploads/')?>/<?=$l->image;?>" height="100"
                                                width="150" />
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-6"><b>Name:</b>&nbsp;&nbsp;&nbsp;<?=$l->name?></div>
                                                <div class="col-md-6"><b>Details:</b>&nbsp;&nbsp;<?=$l->description?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6"><b>Platform:</b>&nbsp;&nbsp;<?=$l->platform?>
                                                </div>
                                                <div class="col-md-6"><b>Exp_date:</b>&nbsp;&nbsp;<?=$l->exp_date?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <font size="5">Fee:</font>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    } else {
                        ?>
                        <div class="alert alert-danger col-md-12">No Applied Campaigns</div>
                        <?php
                    }
                    ?>
                    </div>
                </div>
                    <!-- 4 -->
                <div id="approved" class="container tab-pane"><br>
                    <h3>Approved Campaigns</h3>
                    <div class="row">
                        <?php
                        
if (sizeof($approved_campaigns) != 0) {
    foreach ($approved_campaigns as $l) {
        ?>
                        <div class="col-md-12">
                            <div class="card card-user">
                                <div class="card-body custom_body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="<?=base_url('public/uploads/')?>/<?=$l->image;?>" height="100"
                                                width="150" />
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-6"><b>Name:</b>&nbsp;&nbsp;&nbsp;<?=$l->name?></div>
                                                <div class="col-md-6"><b>Details:</b>&nbsp;&nbsp;<?=$l->description?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6"><b>Platform:</b>&nbsp;&nbsp;<?=$l->platform?>
                                                </div>
                                                <div class="col-md-6"><b>Exp_date:</b>&nbsp;&nbsp;<?=$l->exp_date?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <font size="5">Fee:</font>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    } else {
                        ?>
                        <div class="alert alert-danger col-md-12">No Approved Campaigns</div>
                        <?php
                    }
                    ?>
                    </div>
                </div>

                 <!-- 5 -->
                 <div id="submitted" class="container tab-pane"><br>
                    <h3>Submitted Campaigns</h3>
                    <div class="row">
                        <?php
                        
if (sizeof($submitted_campaign) != 0) {
    foreach ($submitted_campaign as $l) {
        ?>
                        <div class="col-md-12">
                            <div class="card card-user">
                                <div class="card-body custom_body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="<?=base_url('public/uploads/')?>/<?=$l->image;?>" height="100"
                                                width="150" />
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-6"><b>Name:</b>&nbsp;&nbsp;&nbsp;<?=$l->name?></div>
                                                <div class="col-md-6"><b>Details:</b>&nbsp;&nbsp;<?=$l->description?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6"><b>Platform:</b>&nbsp;&nbsp;<?=$l->platform?>
                                                </div>
                                                <div class="col-md-6"><b>Exp_date:</b>&nbsp;&nbsp;<?=$l->exp_date?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <font size="5">Fee:</font>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    } else {
                        ?>
                        <div class="alert alert-danger col-md-12">No Submitted Campaigns</div>
                        <?php
                    }
                    ?>
                    </div>
                </div>

                <!-- 6 -->
                <div id="completed" class="container tab-pane"><br>
                    <h3>Completed Campaigns</h3>
                    <div class="row">
                        <?php
                        
if (sizeof($completed_campaigns) != 0) {
    foreach ($completed_campaigns as $l) {
        ?>
                        <div class="col-md-12">
                            <div class="card card-user">
                                <div class="card-body custom_body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="<?=base_url('public/uploads/')?>/<?=$l->image;?>" height="100"
                                                width="150" />
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-6"><b>Name:</b>&nbsp;&nbsp;&nbsp;<?=$l->name?></div>
                                                <div class="col-md-6"><b>Details:</b>&nbsp;&nbsp;<?=$l->description?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6"><b>Platform:</b>&nbsp;&nbsp;<?=$l->platform?>
                                                </div>
                                                <div class="col-md-6"><b>Exp_date:</b>&nbsp;&nbsp;<?=$l->exp_date?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <font size="5">Fee:</font>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    } else {
                        ?>
                        <div class="alert alert-danger col-md-12">No Submitted Campaigns</div>
                        <?php
                    }
                    ?>
                    </div>
                </div>


            </div>
        </div>
        <?php include 'components/footer.php'?>