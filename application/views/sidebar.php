        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="<?=base_url('index.php/Dashboard')?>">Dashboard</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?=base_url('index.php/Arduino')?>">
                                <i class="fas fa-table"></i>Arduino</a>
                        </li>
                        <li>
                            <a href="<?=base_url('index.php/Users')?>">
                                <i class="fas fa-users"></i>Users</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>