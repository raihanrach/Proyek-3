<!-- LEFT SIDEBAR -->
<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>

            <ul class="nav">
                <br>
                <div class="sidebar-heading text-center">
                    <div class="profile-main">
                        <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-circle" alt="Avatar">
                        <h3 class="name"><?= $user['name']; ?></h3>
                        <!-- <span class="online-status status-available">Available</span> -->
                    </div>
                    </i> <span class="active">Administrator</span>
                </div>
                <li>
                    <!-- <br> -->
                    <a href="<?= base_url('home'); ?>" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a>
                </li>
                <br>
                <div class="sidebar-heading text-center">
                    </i> <span class="active">User</span>
                </div>
                <li><a href="<?= base_url('profile'); ?>" class=""><i class="lnr lnr-user"></i> <span>Profile Masjid</span></a></li>
                <li>
                    <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-picture"></i> <span>Gallery</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="subPages" class="collapse ">
                        <ul class="nav">
                            <li><a href="<?= base_url('foto_kegiatan'); ?>" class="">Foto</a></li>
                            <li><a href="page-login.html" class="">Video</a></li>
                            <li><a href="page-lockscreen.html" class="">Pamflet</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="<?= base_url('contact'); ?>" class=""><i class="lnr lnr-phone-handset"></i> <span>Contact</span></a></li>
                <!-- <li><a href="notifications.html" class=""><i class="lnr lnr-alarm"></i> <span>Notifications</span></a></li> -->
                <!-- <li>
                            <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Pages</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                            <div id="subPages" class="collapse ">
                                <ul class="nav">
                                    <li><a href="page-profile.html" class="">Profile</a></li>
                                    <li><a href="page-login.html" class="">Login</a></li>
                                    <li><a href="page-lockscreen.html" class="">Lockscreen</a></li>
                                </ul>
                            </div>
                        </li> -->
                <!-- <li><a href="tables.html" class=""><i class="lnr lnr-dice"></i> <span>Tables</span></a></li>
                        <li><a href="typography.html" class=""><i class="lnr lnr-text-format"></i> <span>Typography</span></a></li>
                        <li><a href="icons.html" class=""><i class="lnr lnr-linearicons"></i> <span>Icons</span></a></li> -->
            </ul>
        </nav>
    </div>
</div>
<!-- END LEFT SIDEBAR -->