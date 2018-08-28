<div id="dating" class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand" href="#"><?php echo $sitename; ?></a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse navbar-menubuilder">
                <ul class="nav navbar-nav navbar-left">
                        <li <?php if(isset($page) && $page === 'home'){?> class="active" <?php } ?>>
                                <a href="account.php" title="Go to Home">
                                    <span class="glyphicon glyphicon-home"></span>&nbsp;Your Account</a>
                            </li>
                            <li>
                                <a href="friends.php" title="Go to Friends">
                                    <span class="glyphicon glyphicon-th"></span>&nbsp;Friends</a>
                            </li>
                            <li>
                                    <a href="search.php" title="Search">
                                        <span class="glyphicon glyphicon-search"></span>&nbsp;Search</a>
                                </li>
                            <li>
                                <a href="messages.php" title="Go to Messages">
                                    <span class="glyphicon glyphicon-envelope"></span>&nbsp;Messages</a>
                            </li>
                            <?php if(isset($page) && $page === 'viewing' && isset($_GET['view']) && isset($_GET['id']) && $_GET['id'] == $_SESSION['id']){?> 
                            <li class="active">
                                <a href="#" title="You are currently viewing your profile!">
                                    <span class="glyphicon glyphicon-user"></span>&nbsp;Your Profile</a>
                            </li>
                            <?php
                        }
                        ?>
                            <?php if(isset($page) && $page === 'viewing' && isset($_GET['view']) && isset($_GET['id']) && $_GET['id'] != $_SESSION['id']){?> 
                            <li class="active">
                                <a href="#" title="Your currently viewing someones profile">
                                    <span class="glyphicon glyphicon-user"></span>&nbsp;Viewing Profile</a>
                            </li>
                            <?php
                        }
                        ?>
                        <li <?php if(isset($page) && $page === 'settings'){?> class="active" <?php } ?>>
                                <a href="settings.php" title="Go to Settings">
                                    <span class="glyphicon glyphicon-cog"></span>&nbsp;Settings</a>
                            </li>
                            <li>
                                <a href="logout.php" title="Logout from your account">
                                    <span class="glyphicon glyphicon-off"></span>&nbsp;Logout</a>
                            </li>
                </ul>
            </div>
        </div>
    </div>