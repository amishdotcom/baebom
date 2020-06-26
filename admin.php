<?php

@session_start ();
@ob_start ();
@ob_implicit_flush ( 0 );

@error_reporting ( E_ALL ^ E_NOTICE );
@ini_set ( 'display_errors', true );
@ini_set ( 'html_errors', false );
@ini_set ( 'error_reporting', E_ALL ^ E_NOTICE );

define ( 'ROOT_DIR', dirname ( __FILE__ ) );

define ( 'INCLUDE_DIR', ROOT_DIR . '/includes' );

define ( 'ADMIN_DIR', ROOT_DIR . '/admin' );

@include (INCLUDE_DIR . '/config.inc.php');

require_once INCLUDE_DIR . '/class/_class_mysql.php';

require_once INCLUDE_DIR . '/db.php';

include_once(ROOT_DIR . "/admin/functions.php");

define ( 'NINACODER', true );

$PHP_SELF = $_SERVER['PHP_SELF'];

$_TIME = date ( "Y-m-d H:i:s", time () );

$user_group = get_vars( "usergroup");

if( !$user_group ) {

    $user_group = array ();

    $db->query( "SELECT * FROM ninacoder_usergroups ORDER BY id ASC");

    while ( $row = $db->get_row() ) {

        $user_group[$row['id']] = array ();

        foreach ( $row as $key =>$value ) {

            $user_group[$row['id']][$key] = stripslashes($value);

        }
    }

    set_vars( "usergroup", $user_group );

    $db->free();

}

if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'logout') {

    $member_id = array ();

    set_cookie( "user_id", "", 0 );

    set_cookie( "login_pass", "", 0 );

    $_SESSION['user_id'] = 0;

    $_SESSION['login_pass'] = "";

    @session_destroy();

    @session_unset();

    Header("Location: ?");

    exit;
}

include_once (ROOT_DIR . "/includes/member.php");

if($logged) {

    if($member_id['user_group'] != 1){

        $member_id = array ();

        set_cookie( "user_id", "", 0 );

        set_cookie( "login_pass", "", 0 );

        $_SESSION['user_id'] = 0;

        $_SESSION['login_pass'] = "";

        @session_destroy();

        @session_unset();

        $logged = FALSE;

        header("Location: /" . $config['admin_path']);

    }

    $menu_bar = array(
        $menu_bar[] = array(
                    "icon" => "fa fa-dashboard fa-fw",
                    "text" => "Dashboard",
                    "link" => ""
                    )
        );
        $menu_bar[] = array(
                    "icon" => "fa fa-cog fa-fw",
                    "text" => "System Settings",
                    "link" => "config"
                    );
        $menu_bar[] = array(
            "icon" => "fa fa-plus fa-fw",
            "text" => "Users Submit",
            "link" => "submit"
        );
        $menu_bar[] = array(
                    "icon" => "fa fa-music fa-fw",
                    "text" => "Lyrics",
                    "link" => "lyrics"
                    );
        $menu_bar[] =  array(
                    "icon" => "fa fa-user fa-fw",
                    "text" => "Users",
                    "link" => "users"
                    );
        /*$menu_bar[] = array(
                    "icon" => "fa fa-database fa-fw",
                    "text" => "Backup & Restore",
                    "link" => "database"
                    );*/
    
    if(!isset($do) && isset($_REQUEST['do'])) $do = $_REQUEST['do'];
    
    for($i = 0; $i< count($menu_bar); $i++){

        if($menu_bar[$i]['link'] == $do) {
            $acitve_menu = "active";
        }else{
            $acitve_menu = "";
        }
        
        if(!$menu_bar[$i]['link']) {
            $menu_li .= "<li class=\"nav-item {$acitve_menu}\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Dashboard\">
          <a class=\"nav-link\" href=\"{$PHP_SELF}\">
            <i class=\"{$menu_bar[$i]['icon']}\"></i>
            <span class=\"nav-link-text\">{$menu_bar[$i]['text']}</span>
          </a>
        </li>";
        }else{
			$menu_li .= "<li class=\"nav-item {$acitve_menu}\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Dashboard\">
          <a class=\"nav-link\" href=\"{$PHP_SELF}?do={$menu_bar[$i]['link']}\">
            <i class=\"{$menu_bar[$i]['icon']}\"></i>
            <span class=\"nav-link-text\">{$menu_bar[$i]['text']}</span>
          </a>
        </li>";
        }
        
    }
    
    if(!isset($do) && isset($_REQUEST['do'])) $do = $_REQUEST['do'];

    if ( ! $do ) {
    
        include ( ADMIN_DIR . '/modules/main.php');

    } elseif ( @file_exists( ADMIN_DIR . '/modules/' . $do . '.php' ) ) {
        
        include ( ADMIN_DIR . '/modules/' . $do . '.php');

    } else {
        
        $db->close ();

        die("No permission!");
    }

    if($do == "dumper"){

        $db->close ();

        die();

    } 

    $html =  <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin Panel</title>

    <link rel="apple-touch-icon" sizes="57x57" href="/admin/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/admin/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/admin/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/admin/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/admin/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/admin/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/admin/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/admin/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/admin/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/admin/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/admin/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/admin/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/admin/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/admin/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/admin/images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Bootstrap core CSS-->
    <link href="/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="/admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="/admin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="/admin/css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <a class="navbar-brand" href="{$config['admin_path']}"><i class="fa fa-fw fa-sitemap"></i> Admin Panel</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                {$menu_li}
            </ul>
            <ul class="navbar-nav sidenav-toggler">
                <li class="nav-item">
                    <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" data-target="#logoutModalLabel">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="content-wrapper">
        <div class="container-fluid">
            {$content}
        </div>
        <!-- /.container-fluid-->
        <!-- /.content-wrapper-->
        <footer class="sticky-footer">
            <div class="container">
                <div class="text-center">
                    <small>Copyright © <a href="https://www.cybertronics.org.in/">Cybertronics</a> 2019 - 2020</small>
                </div>
            </div>
        </footer>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModalLabel" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="logoutModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="{$config['admin_path']}?action=logout">Logout</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript-->
        <script src="/admin/vendor/jquery/jquery.min.js"></script>
        <script src="/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Core plugin JavaScript-->
        <script src="/admin/vendor/jquery-easing/jquery.easing.min.js"></script>
        <!-- Page level plugin JavaScript-->
        <script src="/admin/vendor/chart.js/Chart.min.js"></script>
        <script src="/admin/vendor/datatables/jquery.dataTables.js"></script>
        <script src="/admin/vendor/datatables/dataTables.bootstrap4.js"></script>
        <!-- Custom scripts for all pages-->
        <script src="/admin/js/sb-admin.js"></script>
        <!-- Custom scripts for this page-->
        <script src="/admin/js/sb-admin-datatables.js"></script>
        {$addon_script}
        {$msg}
    </div>
</body>
</html>
HTML;
}else {

$html =  <<<HTML
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin Panel Login</title>

    <link rel="apple-touch-icon" sizes="57x57" href="/admin/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/admin/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/admin/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/admin/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/admin/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/admin/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/admin/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/admin/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/admin/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/admin/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/admin/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/admin/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/admin/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/admin/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/admin/images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Bootstrap core CSS-->
    <link href="/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="/admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="/admin/css/sb-admin.css" rel="stylesheet">
</head>
<body class="bg-dark">
    <div class="container">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header">Login</div>
            <div class="card-body">
                <form method="POST" action="">
                    <div class="form-group">
                        <label>Username</label>
                        <input class="form-control" name="username" type="username" value="admin" placeholder="Enter Username">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" name="password" type="password" value="admin" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block" type="submit">Login</button>
                </form>
                <!-- <div class="text-center" style="margin-top: 10px">
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div> -->
            </div>
        </div>
    </div>
    <footer class="sticky-footer" style="width: 100%;background: #343a40;color: #6c757d;">
        <div class="container">
            <div class="text-center">
                <small>Copyright © <a style="color: #6c757d;" href="https://www.cybertronics.org.in/">Cybertronics</a> 2019 - 2020</small>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JavaScript-->
    <script src="/admin/vendor/jquery/jquery.min.js"></script>
    <script src="/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="/admin/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>
</html>
HTML;
}

echo $html;

$db->close ();

?>
