<?php include 'components/header.php'?>
<?php include 'components/sidebar.php'?>
<div class="main-panel">
    <?php include 'components/navbar_before.php'?>
    <div class="content">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-user">
                    <div class="image">
                        <img src="<?=base_url('public/assets/img/damir-bosnjak.jpg')?>" alt="...">
                    </div>
                    <div class="card-body">
                        <div class="author">
                            <a href="#">
                                <img class="avatar border-gray" src="<?=base_url('public/assets/img/mike.jpg')?>" alt="...">
                                <h5 class="title">Chet Faker</h5>
                            </a>
                            <p class="description">
                                @chetfaker
                            </p>
                        </div>
                        <p class="description text-center">
                            "I like the way you work it
                            <br> No diggity
                            <br> I wanna bag it up"
                        </p>
                    </div>
                    <div class="card-footer">
                        <hr>
                        <div class="button-container">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-6 ml-auto">
                                    <h5>12
                                        <br>
                                        <small>Files</small>
                                    </h5>
                                </div>
                                <div class="col-lg-4 col-md-6 col-6 ml-auto mr-auto">
                                    <h5>2GB
                                        <br>
                                        <small>Used</small>
                                    </h5>
                                </div>
                                <div class="col-lg-3 mr-auto">
                                    <h5>24,6$
                                        <br>
                                        <small>Spent</small>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card card-user">
                    <div class="card-header">
                        <h5 class="card-title">Edit Profile</h5>
                    </div>
                    <div class="card-body">
                        <form method="post" action="<?=base_url('index.php/main/update_profile')?>" >
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>FullName</label>
                                        <input type="text" name="fullname" class="form-control" value="<?=$user_profile[0]->fullname?>" placeholder="Fullname">
                                    </div>
                                </div>
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="email" class="form-control" value="<?=$user_profile[0]->email?>" disabled="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>Mobile</label>
                                        <input type="text" name="mobile" value="<?=$user_profile[0]->mobile?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4 px-1">
                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="text" name="city" class="form-control" value="<?=$user_profile[0]->city?>" placeholder="City">
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label>State</label>
                                        <input type="text" name="state" class="form-control" value="<?=$user_profile[0]->state?>" placeholder="State">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>Primary (Field of interest)</label>
                                        <input type="text" name="primary_foi" value="<?=$user_profile[0]->primary_foi?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4 px-1">
                                    <div class="form-group">
                                        <label>Secondary 1 (Field of interest)</label>
                                        <input type="text" name="secondary_foi_1" class="form-control" value="<?=$user_profile[0]->secondary_foi_1?>" placeholder="City">
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label>Secondary 2 (Field of interest)</label>
                                        <input type="text" name="secondary_foi_2" class="form-control" value="<?=$user_profile[0]->secondary_foi_2?>" placeholder="State">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>About Me</label>
                                        <textarea name="description" class="form-control textarea"><?=$user_profile[0]->description?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="update ml-auto mr-auto">
                                    <input type="submit" name="submit" class="btn btn-primary btn-round" value="Update Profile">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'components/footer.php'?>