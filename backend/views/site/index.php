<?php
use yii\helpers\Html;
/**
 * @var yii\web\View $this
 */
$this->title = 'MegaSale Administration';
?>
<div class="site-index">

    <div class="body-content">

<!-- Main content starts -->

<div class="content">

<!-- Sidebar -->
<div class="sidebar">
    <div class="sidebar-dropdown"><a href="#">Navigation</a></div>

    <div class="sidebar-inner">


        <!-- sidebar shortcuts -->
        <div class="sidebar-shortcuts" class="sidebar-shortcuts-large">
            <button class="btn btn-success">
                <i class="icon-signal"></i>
            </button>
            <button class="btn btn-info">
                <i class="icon-pencil"></i>
            </button>
            <button class="btn btn-warning">
                <i class="icon-group"></i>
            </button>
            <button class="btn btn-danger">
                <i class="icon-cogs"></i>
            </button>
        </div>

        <!--- Sidebar navigation -->
        <!-- If the main navigation has sub navigation, then add the class "has_submenu" to "li" of main navigation. -->
        <ul class="navi">

            <!-- Use the class nred, ngreen,,, or norange to add background color. You need to use this in <li> tag. -->

            <li class="current"><a href="#"><i class="icon-desktop"></i> Dashboard</a></li>

            <!-- Menu with sub menu -->
            <li class="has_submenu">
                <a href="#">
                    <!-- Menu name with icon -->
                    <i class="icon-th"></i> Widgets
                    <!-- Icon for dropdown -->
                    <span class="pull-right">2</span>
                </a>

                <ul>
                    <li><a href="widgets1.html">Widgets #1</a></li>
                    <li><a href="widgets2.html">Widgets #2</a></li>
                </ul>
            </li>

            <li><a href="charts.php"><i class="icon-bar-chart"></i> Charts</a></li>

            <li><a href="ui.html"><i class="icon-sitemap"></i> UI Elements</a></li>

            <li class="has_submenu">
                <a href="#">
                    <i class="icon-file-alt"></i> Pages #1
                    <span class="pull-right">7</span>
                </a>

                <ul>
                    <li><a href="calendar.html">Calendar</a></li>
                    <li><a href="post.html">Make Post</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="register.html">Register</a></li>
                    <li><a href="statement.html">Statement</a></li>
                    <li><a href="error-log.html">Error Log</a></li>
                    <li><a href="support.html">Support</a></li>
                </ul>
            </li>

            <li class="has_submenu">
                <a href="#">
                    <i class="icon-file-alt"></i> Pages #2
                    <span class="pull-right">6</span>
                </a>

                <ul>
                    <li><?= Html::a('Error','error') ?></li>
                    <li><?= Html::a('Gallery','gallery') ?></li>
                    <li><?= Html::a('Grid','grid') ?></li>
                    <li><?= Html::a('Invoice','invoice') ?></li>
                    <li><?= Html::a('Media','media') ?></li>
                    <li><?= Html::a('Profile','profile') ?></li>    
                </ul>
            </li>

            <li><?= Html::a('<i class="icon-list"></i> Forms', 'forms') ?></li>

            <li><?= Html::a('<i class="icon-table"></i> Tables','tables','')?></li>

        </ul>


    </div>

</div>

<!-- Sidebar ends -->
    
    
<!-- Main bar -->
<div class="mainbar">

<!-- Page heading -->
<div class="page-head">
    <!-- Breadcrumb -->
    <div class="bread-crumb">
        <a href="index.html"><i class="icon-home"></i></a>
        <!-- Divider -->
        <i class="icon-angle-right"></i>
        <a href="#" class="bread-current">Dashboard</a>
    </div>
    <!-- Page heading -->
    <div class="clearfix"></div>

</div>
<!-- Page heading ends -->


<!-- Matter -->

<div class="matter">
<div class="container">

<!-- Today status. jQuery Sparkline plugin used. -->

<div class="row">
    <div class="col-md-12">

    <!-- Navigation Dashboard starts -->
        <ul class="nav-dash">
            <li>
                 <?= Html::a('<i class="icon-user"></i>', array('/Site/MyProfile'), array('data-toggle'=>'tooltip', 'data-original-title' =>'Users' )) ?>
            </li>
            <li>
                <a title="" data-toggle="tooltip" href="statement.html" data-original-title="Comments">
                    <i class="icon-comments"></i>
                    <span class="badge badge-success">3</span>
                </a>
            </li>
            <li>
                <a title="" data-toggle="tooltip" href="calendar.html" data-original-title="Calendar">
                    <i class="icon-calendar"></i>
                    <span class="badge badge-inverse">5</span>
                </a>
            </li>
            <li>
                <a title="" data-toggle="tooltip" href="gallery.html" data-original-title="Photos">
                    <i class="icon-camera-retro"></i>
                </a>
            </li>
            <li>
                <a title="" data-toggle="tooltip" href="charts.html" data-original-title="Charts">
                    <i class="icon-bar-chart"></i>
                </a>
            </li>
            <li>
                <a title="" data-toggle="tooltip" href="tables.html" data-original-title="Tables">
                    <i class="icon-table"></i>
                    <span class="badge badge-warning">1</span>
                </a>
            </li>
            <li>
                <a title="" data-toggle="tooltip" href="forms.html" data-original-title="Forms">
                    <i class="icon-tasks"></i>
                </a>
            </li>
            <li>
                <a title="" data-toggle="tooltip" href="ui.html" data-original-title="Settings">
                    <i class="icon-cogs"></i>
                </a>
            </li>
        </ul>
    <!-- Navigation Dashboard ends  -->

    <!-- Statistics starts -->

        <div class="row">
            <!-- stats -->
            <div class="well-container">
                <div class="well wblue">
                    <div class="well-icon">
                        <i class="icon-cog"></i>
                    </div>
                    <div class="well-data">
                        <span class="well-data-number">8.000</span>
                        <div class="well-content">Total Users</div>
                    </div>
                </div>
                <div class="well wviolet">
                    <div class="well-icon">
                        <i class="icon-shopping-cart"></i>
                    </div>
                    <div class="well-data">
                        <span class="well-data-number">$8434</span>
                        <div class="well-content">Total Sales</div>
                    </div>
                </div>
                <div class="well wyellow">
                    <div class="well-icon">
                        <i class="icon-fire"></i>
                    </div>
                    <div class="well-data">
                        <span class="well-data-number">+95%</span>
                        <div class="well-content">Popularity</div>
                    </div>
                </div>
                <div class="well wred">
                    <div class="well-icon">
                        <i class="icon-cog"></i>
                    </div>
                    <div class="well-data">
                        <span class="well-data-number">3433</span>
                        <div class="well-content">Subscribers</div>
                    </div>
                </div>
                <div class="well wlime">
                    <div class="well-icon">
                        <i class="icon-credit-card"></i>
                    </div>
                    <div class="well-data">
                        <span class="well-data-number">$13433</span>
                        <div class="well-content">Total Profit</div>
                    </div>
                </div>
                <div class="well worange">
                    <div class="well-icon">
                        <i class="icon-asterisk"></i>
                    </div>
                    <div class="well-data">
                        <span class="well-data-number">143433</span>
                        <div class="well-content">Total Downloads</div>
                    </div>
                </div>
                <div class="well wpink">
                    <div class="well-icon">
                        <i class="icon-bar-chart"></i>
                    </div>
                    <div class="well-data">
                        <span class="well-data-number">0.3%</span>
                        <div class="well-content">Server Downtime</div>
                    </div>
                </div>
                <div class="well wgray">
                    <div class="well-icon">
                        <i class="icon-file-text"></i>
                    </div>
                    <div class="well-data">
                        <span class="well-data-number">3433</span>
                        <div class="well-content">Total Tickets</div>
                    </div>
                </div>
            </div>
            <!-- Statistics ends -->
    
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div><!-- end body-content -->
</div><!-- end site-index -->
