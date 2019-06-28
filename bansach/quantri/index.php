<?php 
session_start(); 
$p = isset ($_GET['p'])?$_GET['p']:'';  //dùng để quyết định trang nào nhúng vào vùng chính của layout
require_once "../class/quantri.php";
$qt = new quantritin;
$qt->checkLogin();
?>
<!DOCTYPE html>
<html>
<head>
	
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Quản trị website bán sách</title>
    <!-- Favicon-->
	<!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>
	<script src="plugins/ckfinder/ckfinder.js">	</script>
	
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
	
	<script type="text/javascript">
		function selectFileWithCKFinder( elementId ) {
		   CKFinder.popup( {
				chooseFiles: true, width: 800, height: 600,
				onInit: function( finder ) {
					finder.on( 'files:choose', function( evt ) {
						var file = evt.data.files.first();
						var output = document.getElementById( elementId );
						output.value = file.getUrl();
					});
				finder.on( 'file:choose:resizedImage', function( evt ) {
					 var output = document.getElementById( elementId );
					 output.value = evt.data.resizedUrl;
				});
				}
		   });
		}
	</script>

	
</head>
<body class="theme-red">
    
    <div class="overlay"></div>
    
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">QUẢN TRỊ WEBSITE BÁN SÁCH</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?=$_SESSION['login_hoten']?></div>
                    <div class="email"><?=$_SESSION['login_email']?></div>
                    
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <?php require "menu.php"; ?>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>
    
    </section>

    <section class="content">
        <?php 
		switch ($p)
		{
			case "theloai_ds": require "theloai_ds.php"; break;
			case "theloai_them": require "theloai_them.php"; break;
			case "theloai_sua": require "theloai_sua.php"; break;
			
			case "loaitin_ds": require "loaitin_ds.php"; break;
			case "loaitin_them": require "loaitin_them.php"; break;
			case "loaitin_sua": require "loaitin_sua.php"; break;
				
			case "tin_ds": require "tin_ds.php"; break;
			case "tin_them": require "tin_them.php"; break;
			case "tin_sua": require "tin_sua.php"; break;
				
			case "users_ds": require "users_ds.php"; break;
    		case "users_them": require "users_them.php"; break;
			case "users_sua": require "users_sua.php"; break;
				
			case "tags_ds": require "tags_ds.php"; break;
			case "tags_them": require "tags_them.php"; break;
			case "tags_sua": require "tags_sua.php"; break;

			case "ykien_ds": require "ykien_ds.php"; break;
			case "ykien_them": require "ykien_them.php"; break;
			case "ykien_sua": require "ykien_sua.php"; break;
			default: require "dashboard.php"; 
		}//switch
		?>

    </section>

    

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <!--<script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>-->

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>