<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/all.css"/>

<style type="text/css">
 body {
        background: #163040;
        color: #ffffff;
      }
      
      #wrapper {
        padding-left: 0;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
      }
      
      #wrapper.toggled {
        padding-left: 150px;
      }
      
      #sidebar-wrapper {
        position: fixed;
        left: 224px;
        z-index: 1000;
        overflow-y: auto;
        margin-left: -345px;
        width: 0;
        height: 100%;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
        border-radius: 0 50% 50% 0;
        height: 249px;
        overflow: hidden;
        top: 20%;
        box-shadow: inset -1px 0px 100px 2px rgba(0, 0, 0, .4), 1px 0px 100px 1px rgba(255, 255, 255, .02);
      }
      
      #wrapper.toggled #sidebar-wrapper {
        width: 240px;
      }
      
      #page-content-wrapper {
        padding: 15px;
        width: 100%;
      }
      
      #wrapper.toggled #page-content-wrapper {
        position: absolute;
        margin-right: -250px;
      }
      /* Sidebar Styles */
      
      .sidebar-nav {
        position: absolute;
        top: 22px;
        margin: 0;
        padding: 0;
        width: 234px;
        list-style: none;
        padding-left: 128px;
      }
      
      .sidebar-nav li {
        line-height: 40px;
        margin-left: 20px;
      }
      
      .sidebar-nav li a {
        display: block;
        width: 246%;
        margin-left: -30px;
        padding-left: 37px;
      }
      
      .sidebar-nav li:nth-child(1) a {}
      
      .sidebar-nav li:nth-child(2) a {
        padding-left: 62px;
      }
      
      .sidebar-nav li:nth-child(3) a {
        padding-left: 72px;
      }
      
      .sidebar-nav li:nth-child(4) a {
        padding-left: 62px;
      }
      
      .sidebar-nav li:nth-child(5) a {}
      
      .sidebar-nav li a {
        display: block;
        color: #999999;
        text-decoration: none;
      }
      
      .sidebar-nav li a:hover {
        background: rgba(255, 255, 255, 0.2);
        color: #fff;
        text-decoration: none;
      }
      
      .sidebar-nav li a:active,
      .sidebar-nav li a:focus {
        text-decoration: none;
      }
      
      .sidebar-nav > .sidebar-brand {
        height: 65px;
        font-size: 18px;
        line-height: 60px;
      }
      
      .sidebar-nav > .sidebar-brand a {
        color: #999999;
      }
      
      .sidebar-nav > .sidebar-brand a:hover {
        background: none;
        color: #fff;
      }
      
      @media (min-width: 768px) {
        #wrapper {
          padding-left: 250px;
        }
        #wrapper.toggled {
          padding-left: 0;
        }
        #sidebar-wrapper {
          width: 250px;
        }
        #wrapper.toggled #sidebar-wrapper {
          width: 0;
        }
        #page-content-wrapper {
          padding: 20px;
        }
        #wrapper.toggled #page-content-wrapper {
          position: relative;
          margin-right: 0;
        }
      }
</style>
</head>
<body>

	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button aria-controls="navbar" aria-expanded="false" class="navbar-toggle collapsed" data-target="#navbar" data-toggle="collapse" type="button"><span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button> <a class="navbar-brand" href="#menu-toggle" id="menu-toggle"><span aria-hidden="true" class="glyphicon glyphicon-list"></span></a>
    </div>
    <div class="navbar-collapse collapse" id="navbar">
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="#"><span aria-hidden="true" class="glyphicon glyphicon-home"></span> Home</a>
        </li>
        <li>
          <a href="#"><span aria-hidden="true" class="glyphicon glyphicon-question-sign"></span> Messages</a>
        </li>
        <li>
          <a href="#"><span aria-hidden="true" class="glyphicon glyphicon-question-sign"></span> Help</a>
        </li>
        <li>
          <a href="#"><span aria-hidden="true" class="glyphicon glyphicon-off"></span> Log Out</a>
        </li>
      </ul>
      <form action="#" class="navbar-form navbar-right" method="get">
        <div class="input-group">
          <input class="form-control" id="query" name="search" placeholder="Search..." type="text" value="">
          <div class="input-group-btn">
            <button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-search"></span></button>
          </div>
        </div>
      </form>
    </div>
  </div>
</nav>
<div class="toggled" id="wrapper">
  <div class="container-fluid">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <li>
          <a href="#"><span aria-hidden="true" class="glyphicon glyphicon-calendar"></span></a>
        </li>
        <li>
          <a href="#"><span aria-hidden="true" class="glyphicon glyphicon-time"></span></a>
        </li>
        <li>
          <a href="#"><span aria-hidden="true" class="glyphicon glyphicon-dashboard"></span></a>
        </li>
        <li>
          <a href="#"><span aria-hidden="true" class="glyphicon glyphicon-user"></span></a>
        </li>
        <li>
          <a href="#"><span aria-hidden="true" class="glyphicon glyphicon-cog"></span></a>
        </li>
      </ul>
    </div>
    <!-- /#sidebar-wrapper -->
    <!-- Page Content -->
    <div id="page-content-wrapper">
      <div class="container-fluid"></div>
    </div>
    <!-- /#page-content-wrapper -->
  </div>
</div>

















<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>

<script type="text/javascript">
	   $(document).ready(function() {

          $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
          });

        });
</script>
</body>
</html>