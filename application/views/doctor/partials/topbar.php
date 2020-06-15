<div class="navbar-custom">
    <ul class="list-unstyled topbar-right-menu float-right mb-0">
        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" href="pages-starter.html#" role="button" aria-haspopup="false" aria-expanded="false">
                <span class="account-user-avatar"> 
                    <img src="<?= base_url('assets/admin/images/default.png') ?>" alt="user-image" class="rounded-circle">
                </span>
                <span>
                    <span class="account-user-name"><?= $admin['r_a_email'] ?></span>
                    <span class="account-position">Admin</span>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                <!-- item-->
                <div class=" dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Welcome !</h6>
                </div>

                <!-- item-->
                <a href="<?= base_url('admin/logout') ?>" class="dropdown-item notify-item">
                    <i class="mdi mdi-logout mr-1"></i>
                    <span>Logout</span>
                </a>

            </div>
        </li>

    </ul>
</div>