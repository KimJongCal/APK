            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                &nbsp;
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        &nbsp;
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        &nbsp;
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        &nbsp;
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            &nbsp;
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?=$this->session->userdata('name')?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    &nbsp;
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?=$this->session->userdata('name')?></a>
                                                    </h5>
                                                    <span class="email"><?=$this->session->userdata('username')?></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="<?=base_url('index.php/Auth/Logout')?>">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>