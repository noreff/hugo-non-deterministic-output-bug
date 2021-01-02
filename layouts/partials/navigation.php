<div class="icon-menu responsive-menu-button"></div>
<div class="icon-search responsive-search-button"></div>

<nav role="navigation">
    <ul class="menu-bar">
        <li class="mobile-text"><a href="/">Home</a></li>
        <li><a href="/products">Pricing</a></li>
        <?php if (empty($user->mail)) { ?>
            <li>
                <a href="/login" class="profile-name" rel="modal:open">Login</a><span class="desktop-text">/</span><a href="/register" class="profile-name" rel="modal:open">Register</a>                        </li>
        <?php } else {
            $user_profile_link = '/' . drupal_get_path_alias('user/' . $user->uid);
            ?>
            <li class="rollover"><a href="<?php echo $user_profile_link ?>"><span class="profile-name"><?php echo user_display('title') ?></span> <span class="icon-caret_down"></span></a>
                <ul>
                    <li><?php echo user_display('name') ?></li>
                    <li><a href="<?php echo $user_profile_link ?>" class="menu-profile">Profile</a></li>
                    <li><a href="/user/<?php echo $user->uid . '/f'; ?>" class="menu-favorites">F</a></li>
                    <li><a href="/user/<?php echo $user->uid . '/d'; ?>" class="menu-history">D</a></li>
                    <li><a href="/user/<?php echo $user->uid . '/b'; ?>" class="menu-billing">B</a></li>
                    <li class="last"><a href="/logout">Logout</a></li>
                </ul>
            </li>
        <?php } ?>
    </ul>
</nav>