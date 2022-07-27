<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
<nav id="navbar" class="navbar nav-menu">
            <ul>
                <li><a href="index.php #hero" class="nav-link scrollto"><i class="iconify" data-icon="simple-icons:homeassistant" data-width="35" data-height="35">></i> <span>Home</span></a></li>
                <li><a href="index.php #about" class="nav-link scrollto"><i class="iconify" data-icon="carbon:user-profile" data-width="35" data-height="35"></i> <span>About</span></a></li>
                <li><a href="index.php #resume" class="nav-link scrollto"><i class="iconify" data-icon="carbon:document-attachment" data-width="35" data-height="35"></i> <span>Resume</span></a></li>
                <li><a href="index.php #contact" class="nav-link scrollto"><i  class="iconify" data-icon="ep:message-box" data-width="35" data-height="35"></i> <span>Contact</span></a></li>
                <li><a href="blogs.php" class="nav-link scrollto"><i class="iconify" class="iconify" data-icon="fluent:document-edit-16-regular" data-width="35" data-height="35"></i> <span>Blogs</span></a></li>
                
           
           
                <?php if(!isset($_SESSION['ticket'])) { ?>
                    <li><a href="login.php" class="nav-link scrollto"><i  class="iconify" data-icon="bi:shield-lock-fill" data-width="35" data-height="35"></i> <span>Login</span></a></li>
                <li><a href="register_page.php" class="nav-link scrollto"><i class="iconify" data-icon="akar-icons:person-add" data-width="35" data-height="35"></i> <span>Sign up</span></a></li>
                
                
                <?php } else{ ?>

                    <li><a href="dashboard.php" class="nav-link scroll"><i  class="iconify" data-icon="bi:file-earmark-person" data-width="35" data-height="35"></i> <span>Profile</span></a></li>
                    <li><a href="logout.php" class="nav-link scroll"><i class="iconify" data-icon="mdi:exit-run" data-width="35" data-height="35"></i> <span>Logout</span></a></li>
                </ul>
                <?php } ?>

        </nav>