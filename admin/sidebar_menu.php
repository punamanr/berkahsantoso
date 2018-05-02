<!--***** SIDE NAVBAR *****-->
<nav class="side-navbar">
    <div class="sidebar-header d-flex align-items-center">
        <div class="avatar"><img src="img/avatar-default.png" alt="..." class="img-fluid rounded-circle"></div>
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
        <li <?php if( basename($_SERVER['PHP_SELF'], '.php') == 'galery' ) { ?> class="active" <?php } else { ?> <?php }?>> <a href="galery"><i class="icon-picture"></i>Galery</a></li>
        <li <?php if( basename($_SERVER['PHP_SELF'], '.php') == 'portofolio' ) { ?> class="active" <?php } else { ?> <?php }?>> <a href="portofolio"><i class="icon-website"></i>Portofolio</a></li>
        <li <?php if( basename($_SERVER['PHP_SELF'], '.php') == 'email' ) { ?> class="active" <?php } else { ?> <?php }?>> <a href="email"><i class="icon-mail"></i>Email</a></li>
        <li <?php if( basename($_SERVER['PHP_SELF'], '.php') == 'user' ) { ?> class="active" <?php } else { ?> <?php }?>><a href="user"><i class="icon-user"></i> <span>User</span></a></li> 
        <li><a href="#elements" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-globe"></i>UI Elements </a>
            <ul id="elements" class="collapse list-unstyled">
                <li><a href="ui-buttons.html">Buttons</a></li> 
                <li><a href="ui-cards.html">Cards</a></li> 
                <li><a href="ui-progressbars.html">Progress Bar</a></li> 
                <li><a href="ui-timeline.html">Timeline</a></li>  
            </ul>
        </li>
    </ul><span class="heading">Extras</span>
    <ul class="list-unstyled"> 
        <li> <a href="../app/logout"> <i class="icon-close"></i>Logout </a></li>
    </ul>
</nav>