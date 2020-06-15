<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="slimscroll-menu" id="left-side-menu-container">

        <!-- LOGO -->
        <a href="<?= base_url() ?>" class="logo text-center">
            <span style="color: #fff;font-size: 25px;text-transform: uppercase;">
                rifugio
            </span>
        </a>

        <!--- Sidemenu -->
        <ul class="metismenu side-nav">

            <li class="side-nav-item">
                <a href="<?= base_url('admin') ?>" class="side-nav-link">
                    <i class="dripicons-meter"></i>
                    <span> Dashboard </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="javascript: void(0);" class="side-nav-link">
                    <i class="dripicons-browser"></i>
                    <span> Layouts </span>
                    <span class="menu-arrow"></span>
                </a>
                <ul class="side-nav-second-level" aria-expanded="false">
                    <li>
                        <a href="<?= base_url('admin/navs') ?>">Navs</a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/sub-menu') ?>">Sub Menu</a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/sliders') ?>">Sliders</a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/banners') ?>">Homepage Banners</a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/popup') ?>">Popup Message</a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/contact') ?>">Contact Details</a>
                    </li>
                </ul>
            </li>

            <li class="side-nav-item">
                <a href="javascript: void(0);" class="side-nav-link">
                    <i class="mdi mdi-note-text"></i>
                    <span> Inventory </span>
                    <span class="menu-arrow"></span>
                </a>
                <ul class="side-nav-second-level" aria-expanded="false">
                    <li>
                        <a href="<?= base_url('admin/products') ?>">Products</a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/categories') ?>">Categories</a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/brands') ?>">Brands</a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/trashedproducts') ?>">Trashed Products</a>
                    </li>
                </ul>
            </li>

            <li class="side-nav-item">
                <a href="javascript: void(0);" class="side-nav-link">
                    <i class="dripicons-user-group"></i>
                    <span> Users </span>
                    <span class="menu-arrow"></span>
                </a>
                <ul class="side-nav-second-level" aria-expanded="false">
                    <li>
                        <a href="<?= base_url('admin/users') ?>">Active Users</a>
                    </li>
                </ul>
            </li>

            <li class="side-nav-item">
                <a href="javascript: void(0);" class="side-nav-link">
                    <i class="mdi mdi-notebook"></i>
                    <span> Transactions </span>
                    <span class="menu-arrow"></span>
                </a>
                <ul class="side-nav-second-level" aria-expanded="false">
                    <li>
                        <a href="<?= base_url('admin/transactions') ?>">Transactions Record</a>
                    </li>
                </ul>
            </li>

            <li class="side-nav-item">
                <a href="<?= base_url('admin/mails') ?>" class="side-nav-link">
                    <i class="dripicons-meter"></i>
                    <span> Mails </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="<?= base_url('admin/analytics') ?>" class="side-nav-link">
                    <i class="mdi mdi-notebook"></i>
                    <span> Analytics </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="<?= base_url('admin/feedbacks') ?>" class="side-nav-link">
                    <i class="mdi mdi-comment"></i>
                    <span> Feedbacks </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="<?= base_url('admin/pages') ?>" class="side-nav-link">
                    <i class="mdi mdi-note-text"></i>
                    <span> Pages </span>
                </a>
            </li>

            <!-- <li class="side-nav-item">
                <a href="javascript: void(0);" class="side-nav-link">
                    <i class="mdi mdi-note-text"></i>
                    <span> Careers </span>
                    <span class="menu-arrow"></span>
                </a>
                <ul class="side-nav-second-level" aria-expanded="false">
                    <li>
                        <a href="<?= base_url('admin/openings') ?>">Openings</a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/applications') ?>">Applications</a>
                    </li>
                </ul>
            </li> -->
        </ul>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->