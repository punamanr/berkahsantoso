<!--***** SIDE NAVBAR *****-->
<nav class="side-navbar">
    <div class="sidebar-header d-flex align-items-center">
        <div class="avatar"><img src="img//admin-bs.png" alt="..." class="img-fluid rounded-circle"></div>
        <div class="title">
            <h1 class="h4"><?php echo $user; ?></h1>
        </div>
    </div>
    <hr>
    <!-- Sidebar Navidation Menus-->
    <ul class="list-unstyled">
        <li <?php if( basename($_SERVER['PHP_SELF'], '.php') == 'index' ) { ?> class="active" <?php } else { ?> <?php }?>> <a href="home"><i class="icon-home"></i>Home</a></li>
        <li <?php if( basename($_SERVER['PHP_SELF'], '.php') == 'services' ) { ?> class="active" <?php } else { ?> <?php }?>> <a href="services"><i class="icon-interface-windows"></i>Jasa Layanan</a></li>
        <li <?php if( basename($_SERVER['PHP_SELF'], '.php') == 'articles' ) { ?> class="active" <?php } else { ?> <?php }?>> <a href="articles"><i class="icon-padnote"></i>Artikel</a></li>
        <!--li <?php if( basename($_SERVER['PHP_SELF'], '.php') == 'gallery' ) { ?> class="active" <?php } else { ?> <?php }?>> <a href="gallery"><i class="icon-picture"></i>Gallery</a></li-->
        <li <?php if( basename($_SERVER['PHP_SELF'], '.php') == 'portofolio' ) { ?> class="active" <?php } else { ?> <?php }?>> <a href="portofolio"><i class="icon-website"></i>Portofolio</a></li>
        <li <?php if( basename($_SERVER['PHP_SELF'], '.php') == 'email' ) { ?> class="active" <?php } else { ?> <?php }?>> <a href="email"><i class="icon-mail"></i>Email - Kontak</a></li>
        <li <?php if( basename($_SERVER['PHP_SELF'], '.php') == 'user' ) { ?> class="active" <?php } else { ?> <?php }?>><a href="user"><i class="icon-user"></i> <span>User</span></a></li> 
    </ul><span class="heading">Extras</span>
    <ul class="list-unstyled"> 
        <li> <a href="../app/logout"> <i class="icon-close"></i>Logout </a></li>
    </ul>
</nav>