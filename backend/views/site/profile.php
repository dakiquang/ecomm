<?php

use yii\helpers\Html;
/**
 * @var yii\web\View $this
 */
$this->title = 'My Profile';
?>



<!-- Main content starts -->

<div class="content">

<!-- Sidebar -->
<div class="sidebar">
    <div class="sidebar-dropdown"><a href="#">Navigation</a></div>

    <div class="sidebar-inner">


        <!-- Search form -->
        <form id="sidebar-search">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search">
                <button>
                    <i class="icon-search"></i>
                </button>
            </div>
        </form>

        <!--- Sidebar navigation -->
        <!-- If the main navigation has sub navigation, then add the class "has_submenu" to "li" of main navigation. -->
        <ul class="navi">

            <!-- Use the class nred, ngreen,,, or norange to add background color. You need to use this in <li> tag. -->

            <li><a href="index.html"><i class="icon-desktop"></i> Dashboard</a></li>

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

            <li><a href="charts.html"><i class="icon-bar-chart"></i> Charts</a></li>

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

            <li class="has_submenu current open">
                <a href="#">
                    <i class="icon-file-alt"></i> Pages #2
                    <span class="pull-right">6</span>
                </a>

                <ul>
                    <li><a href="error.html">Error</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="grid.html">Grid</a></li>
                    <li><a href="invoice.html">Invoice</a></li>
                    <li><a href="media.html">Media</a></li>
                    <li class="active"><a href="profile.html">Profile</a></li>
                </ul>
            </li>

            <li><a href="forms.html"><i class="icon-list"></i> Forms</a></li>

            <li><a href="tables.html"><i class="icon-table"></i> Tables</a></li>

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
        <a href="#">Pages #2</a>
        <i class="icon-angle-right"></i>
        <a href="#" class="bread-current">Profile</a>
    </div>

    <!-- Page heading -->
    <h3 class="content-heading">
        <i class="icon-user"></i>
        Barylgin
        <small>Webmaster</small>
    </h3>

    <div class="clearfix"></div>

</div>
<!-- Page heading ends -->


<!-- Matter -->

<div class="matter">
<div class="container">

<div class="row">

<div class="col-md-3">
    <div class="text-center">
        <img class="img-responsive" alt="image" src="img/user-big.jpg">
    </div>
    <div class="list-group">
        <a class="list-group-item" href="#">
            <i class="icon-coffee"></i>
            Portfolio
        </a>
        <a class="list-group-item" href="#">
            <i class="icon-paper-clip"></i>
            Projects
        </a>
        <a class="list-group-item" href="#">
            <i class="icon-picture"></i>
            Gallery
        </a>
    </div>
    <div class="list-group">
        <a class="list-group-item" href="#">
            <i class="icon-share-alt"></i>
            Follow
        </a>
        <a class="list-group-item" href="#">
            <i class="icon-envelope-alt"></i>
            Send Message
        </a>
    </div>
    <div class="list-group">
        <a class="list-group-item" href="#">
            <i class="icon-facebook"></i>
            Facebook
        </a>
        <a class="list-group-item" href="#">
            <i class="icon-twitter"></i>
            Twitter
        </a>
        <a class="list-group-item" href="#">
            <i class="icon-linkedin"></i>
            LinkedIn
        </a>
        <a class="list-group-item" href="#">
            <i class="icon-pinterest"></i>
            Pinterest
        </a>
        <a class="list-group-item" href="#">
            <i class="icon-github"></i>
            Github
        </a>
    </div>
</div>

<div class="col-md-6">
    <h4>Experience</h4>
    <ul class="icons-ul push">
        <li>
            <i class="icon-li icon-arrow-right"></i>
            <strong>Company #1</strong>
            ,
            <br>
            <em>This is the description of the company..</em>
            <br>
            <a href="#">examplecompany.com</a>
        </li>
        <li>
            <i class="icon-li icon-arrow-right"></i>
            <strong>Company #2</strong>
            ,
            <br>
            <em>This is the description of the company..</em>
            <br>
            <a href="#">examplecompany.com</a>
        </li>
        <li>
            <i class="icon-li icon-arrow-right"></i>
            <strong>Company #3</strong>
            ,
            <br>
            <em>This is the description of the company..</em>
            <br>
            <a href="#">examplecompany.com</a>
        </li>
    </ul>
    <h4>About</h4>

    <p class="push">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet
        gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta.
        Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin
        orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat.
        Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus
        laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus
        facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti.
        Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim
        venenatis eget! Nulla quis ligula ipsum. Donec vitae ultrices dolor?</p>
    <h4>
        <i class="icon-book"></i>
        Address
    </h4>
    <address>
        <strong>Company</strong>
        <br>
        Street 000
        <br>
        City, CA 00000
        <br>
        <abbr title="Phone">P:</abbr>
        (000) 000-00000
    </address>
    <h4>Favorite Quote</h4>
    <blockquote>
        <p>This is an awesome quote!</p>
        <small>
            Someone famous
            <cite title="Source Title">Source Title</cite>
        </small>
    </blockquote>
</div>

<div class="col-md-3">
    <h5 class="page-header-sub">Actions</h5>

    <div class="btn-group push">
        <button class="btn btn-success" title="" data-toggle="tooltip" data-original-title="Ask for a quote">
            <i class="icon-plus"></i>
            Hire now!
        </button>
        <button class="btn btn-info" title="" data-toggle="tooltip" data-original-title="Send a message">
            <i class="icon-envelope"></i>
        </button>
    </div>
    <div class="btn-group push">
        <button class="btn btn-danger" title="" data-toggle="tooltip" data-original-title="Add to favorites">
            <i class="icon-star"></i>
        </button>
        <button class="btn btn-warning" title="" data-toggle="tooltip" data-original-title="Follow">
            <i class="icon-share-alt"></i>
        </button>
        <button class="btn btn-primary" title="" data-toggle="tooltip" data-original-title="Share Profile">
            <i class="icon-share"></i>
        </button>
    </div>
    <h5 class="page-header-sub">
        <i class="icon-bolt"></i>
        Current Status
    </h5>

    <div class="alert alert-success">
        <i class="icon-ok-sign"></i>
        Available for hire
    </div>
    <h5 class="page-header-sub">
        <i class="icon-certificate"></i>
        Skills
    </h5>
    <table class="table table-borderless">
        <tbody>
        <tr>
            <td class="cell-small">
                <span class="label label-inverse">HTML</span>
            </td>
            <td>
                <div class="progress progress-striped active progress-mini">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="100"
                         aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                        <span class="sr-only">80% Complete</span>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <span class="label label-inverse">CSS</span>
            </td>
            <td>
                <div class="progress progress-mini">
                    <div class="progress-bar progress-bar-info" style="width: 70%"></div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <span class="label label-inverse">Javascript</span>
            </td>
            <td>
                <div class="progress progress-mini">
                    <div class="progress-bar progress-bar-success" style="width: 100%"></div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <span class="label label-inverse">PHP</span>
            </td>
            <td>
                <div class="progress progress-mini">
                    <div class="progress-bar progress-bar-success" style="width: 100%"></div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <span class="label label-inverse">Photoshop</span>
            </td>
            <td>
                <div class="progress progress-mini">
                    <div class="progress-bar progress-bar-info" style="width: 60%"></div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <span class="label label-inverse">Node.js</span>
            </td>
            <td>
                <div class="progress progress-mini">
                    <div class="progress-bar progress-bar-warning" style="width: 45%"></div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <span class="label label-inverse">Java</span>
            </td>
            <td>
                <div class="progress progress-mini">
                    <div class="progress-bar progress-bar-danger" style="width: 40%"></div>
                </div>
            </td>
        </tr>
        </tbody>
    </table>
    <h5 class="page-header-sub">
        <i class="icon-flag"></i>
        Featured Projects
    </h5>
    <ul class="icons-ul">
        <li>
            <i class="icon-li icon-angle-right"></i>
            <strong>Project #1</strong>
            ,
            <a href="#">exampleproject1.com</a>
        </li>
        <li>
            <i class="icon-li icon-angle-right"></i>
            <strong>Project #2</strong>
            ,
            <a href="#">exampleproject2.com</a>
        </li>
        <li>
            <i class="icon-li icon-angle-right"></i>
            <strong>Project #3</strong>
            ,
            <a href="#">exampleproject3.com</a>
        </li>
        <li>
            <i class="icon-li icon-angle-right"></i>
            <strong>Project #4</strong>
            ,
            <a href="#">exampleproject4.com</a>
        </li>
        <li>
            <i class="icon-li icon-angle-right"></i>
            <strong>Project #5</strong>
            ,
            <a href="#">exampleproject5.com</a>
        </li>
        <li>
            <i class="icon-li icon-angle-right"></i>
            <strong>Project #6</strong>
            ,
            <a href="#">exampleproject6.com</a>
        </li>
    </ul>
</div>

</div>

</div>
</div>

<!-- Matter ends -->

</div><!-- End Main bar -->
</div><!-- Main content ends -->