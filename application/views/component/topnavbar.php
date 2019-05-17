

    <nav class="navbar navbar-expand-lg fixed-top navbar-primary" color-on-scroll="300">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="#">
                    Quaff Media</a>
                    <button class="navbar-toggler navbar-toggler-right navbar-burger" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar"></span>
                <span class="navbar-toggler-bar"></span>
                <span class="navbar-toggler-bar"></span>
            </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav ml-auto">
                <?php
                if (!$this->session->userdata('email')) {
                ?>
                <li class="nav-item">
                        <a href="<?=base_url('/')?>" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void()" class="nav-link">Terms and Service</a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void()" class="nav-link">Privacy Policy</a>
                    </li>
                    <li class="nav-item">
                            <a href="#contact" class="nav-link">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=base_url('/index.php/main/signin')?>" class="nav-link">Login | SignUp</a>
                        </li>

                        <?php
                }else{
                        ?>
                        <li class="nav-item">
                        <a href="<?=base_url('/index.php/main/dashboard')?>" class="nav-link">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?=base_url('/index.php/main/profile')?>" class="nav-link">Build Profile</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?=base_url('/index.php/main/business')?>" class="nav-link">Business Profile</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?=base_url('/index.php/main/community')?>" class="nav-link">Community Profile</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?=base_url('/index.php/main/logout')?>" class="nav-link">Logout</a>
                    </li>
                        <?php
                }
                        ?>
                </ul>
            </div>
        </div>
    </nav>
