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
        <li <?php if($menu == 'Content') { ?> class="active" <?php } else { ?> <?php }?>><a href="#contents" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Content </a>
            <ul id="contents" class="collapse list-unstyled">
                <li <?php if( basename($_SERVER['PHP_SELF'], '.php') == 'services' ) { ?> class="active" <?php } else { ?> <?php }?>><a href="services">Services</a></li> 
                <li><a href="email.html">Success Story</a></li> 
                <li><a href="media.html">Articles </a></li> 
                <li><a href="invoice.html">Galery</a></li> 
            </ul>
        </li>
        <li <?php if( basename($_SERVER['PHP_SELF'], '.php') == 'user' ) { ?> class="active" <?php } else { ?> <?php }?>><a href="user"><i class="icon-user"></i> <span>User</span></a></li>
        <li><a href="#apps" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Apps </a>
            <ul id="apps" class="collapse list-unstyled">
                <li><a href="calendar.html">Calendar</a></li> 
                <li><a href="email.html">Email</a></li> 
                <li><a href="media.html">Media</a></li> 
                <li><a href="invoice.html">Invoice</a></li> 
            </ul>
        </li>
        <li> <a href="chart.html"> <i class="fa fa-bar-chart"></i>Chart </a></li>
        <li><a href="#forms" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-building-o"></i>Forms </a>
            <ul id="forms" class="collapse list-unstyled">
                <li><a href="basic-form.html">Basic Form</a></li> 
                <li><a href="form-layouts.html">Form Layouts</a></li> 
            </ul>
        </li>
        <li> <a href="maps.html"> <i class="fa fa-map-o"></i>Maps </a></li>
        <li><a href="#pages" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-file-o"></i>Pages </a>
            <ul id="pages" class="collapse list-unstyled">
                <li><a href="faq.html">FAQ</a></li> 
                <li><a href="empty.html">Empty</a></li> 
                <li><a href="gallery.html">Gallery</a></li> 
                <li><a href="login.html">Log In</a></li> 
                <li><a href="register.html">Register</a></li> 
                <li><a href="search-result.html">Search Result</a></li> 
                <li><a href="404.html">404</a></li> 
            </ul>
        </li>
        <li> <a href="tables.html"> <i class="icon-grid"></i>Tables </a></li> 
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
        <li> <a href="#"> <i class="icon-picture"></i>Demo </a></li>
    </ul>
</nav>