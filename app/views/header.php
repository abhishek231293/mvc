<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?=(isset($this->title)) ? $this->title : 'MVC'; ?></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo _ROOTPATH;?>public/css/bootstrap.css">

    <link rel="stylesheet" href="<?php echo _ROOTPATH;?>public/css/viewport-bug-workaround.css">

    <!-- <link rel="stylesheet" href="<?php echo _ROOTPATH;?>public/css/default.css"> -->
    <link rel="stylesheet" href="<?php echo _ROOTPATH;?>public/css/custom.css">

    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/themes/sunny/jquery-ui.css" />
    <link rel="stylesheet" href="<?php echo _ROOTPATH;?>public/css/carousel.css">

    <!-- Sweet Alert Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/sweetalert2/4.0.4/sweetalert2.min.css">

    <!-- Fontawesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo _ROOTPATH;?>public/js/custom.js"></script>

    <script type="text/javascript" src="<?php echo _ROOTPATH;?>public/js/ie-emulation-modes-warning.js"></script>
    
    <script src="<?php echo _ROOTPATH;?>public/js/angular/angular.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.3.2/angular-ui-router.js"></script>
    <script src="<?php echo _ROOTPATH;?>public/js/module/app.js" type='text/javascript'></script>
    <script src="<?php echo _ROOTPATH;?>public/js/module/config.js" type='text/javascript'></script>
    <script src="<?php echo _ROOTPATH;?>public/js/angular/underscore-min.js"></script>

   
    <?php 
    if (isset($this->js)) 
    {
        foreach ($this->js as $js)
        {
            echo '<script type="text/javascript" src="'._ROOTPATH.'views/'.$js.'"></script>';
        }
    }
    ?>
</head>
<body>

<?php Session::init(); ?>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Demo</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <?php if (Session::get('loggedIn') == false):?>
                <li><a href="index">Signup</a></li>
                <?php endif; ?>
                <?php if (Session::get('loggedIn') == true):?>
                <li><a href="dashboard">Dashboard</a></li>
                <li><a href="dashboard/logout">Logout</a></li>
                <?php else: ?>
                <li><a href="login">Login</a></li>
                <?php endif; ?>
            </ul>
            <?php if (Session::get('loggedIn') == true):?>
                <form class="navbar-form navbar-right">
                    <input type="text" class="form-control" placeholder="Search...">
                </form>
            <?php endif; ?>
        </div>
    </div>
</nav>

<?php if (Session::get('loggedIn') == true):?>
<div class="container-fluid">
    <div class="row">

        <?php $this->controller->sideBarList();?>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

        <h3 class="page-header"><?php echo $_SESSION['userDetail'][0]['name']; ?></h3>
<?php endif; ?>


