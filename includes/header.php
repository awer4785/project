<?php require_once 'php_action/core.php'; ?>

<!DOCTYPE html>
<html>
<head>

	<title>ระบบสต๊อก</title>

	<!-- bootstrap -->
	<link rel="stylesheet" href="assests/bootstrap/css/bootstrap.min.css">
	<!-- bootstrap theme-->
	<link rel="stylesheet" href="assests/bootstrap/css/bootstrap-theme.min.css">
	<!-- font awesome -->
	<link rel="stylesheet" href="assests/font-awesome/css/font-awesome.min.css">
  <!-- custom css -->
  <link rel="stylesheet" href="custom/css/custom.css">
  <!--Chosen-->
  <!--<link rel="stylesheet" href="assests/plugins/chosen/chosen.min.css">-->

	<!-- DataTables -->
  <link rel="stylesheet" href="assests/plugins/datatables/jquery.dataTables.min.css">

  <!-- file input -->
  <link rel="stylesheet" href="assests/plugins/fileinput/css/fileinput.min.css">

  <!-- jquery -->
	<script src="assests/jquery/jquery.min.js"></script>
  <script src="assests/jquery/jquery.js"></script>
  
  <!-- jquery ui -->  
  <link rel="stylesheet" href="assests/jquery-ui/jquery-ui.min.css">
  <script src="assests/jquery-ui/jquery-ui.min.js"></script>

  <!-- bootstrap js -->
	<script src="assests/bootstrap/js/bootstrap.min.js"></script>
 
  
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
  <link href="https://raw.githack.com/ttskch/select2-bootstrap4-theme/master/dist/select2-bootstrap4.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
 
  
<link rel="icon" href="assests\images\b.ico" type="image/x-icon">
<link rel="shortcut icon" href="assests\images\b.ico" type="image/x-icon">

</head>
<body>


	<nav class="navbar navbar-default navbar-static-top">
		<div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- <a class="navbar-brand" href="#">Brand</a> -->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">      

      <ul class="nav navbar-nav navbar-right">        

      	<li id="navDashboard"><a href="index.php"><i class="glyphicon glyphicon-list-alt"></i> หน้าหลัก</a></li> 
        
        <li class="dropdown" id="navSale">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="glyphicon glyphicon-shopping-cart"></i> ขายสินค้า <span class="caret"></span></a>
          <ul class="dropdown-menu">            
            <li id="topNavAddOrder"><a href="orders.php?o=add"> <i class="glyphicon glyphicon-plus"></i> เพิ่มการขาย</a></li>            
            <li id="topNavManageOrder"><a href="orders.php?o=manord"> <i class="glyphicon glyphicon-time"></i> ประวัติการขาย</a></li>            
          </ul>
        </li> 

        <li class="dropdown" id="navBuy">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="glyphicon glyphicon-plus-sign"></i> ซื้อสินค้า <span class="caret"></span></a>
          <ul class="dropdown-menu">            
            <li id="topNavAddBuy"><a href="buy.php?o=add"> <i class="glyphicon glyphicon-plus"></i> เพิ่มการซื้อ</a></li> 
            <li id="topNavAddNewBuy"><a href="buy.php?o=addNew"> <i class="	glyphicon glyphicon-circle-arrow-right"></i> เพิ่มสินค้าใหม่</a></li>           
            <li id="topNavManageBuy"><a href="buy.php?o=manord"> <i class="glyphicon glyphicon-time"></i> ประวัติการซื้อ</a></li>            
          </ul>
        </li> 

        <li id="navType"><a href="type.php"> <i class="glyphicon glyphicon-th-list"></i> ประเภทสินค้า</a></li>        

        <li id="navProduct"><a href="product.php"> <i class="glyphicon glyphicon-inbox"></i> รายการสินค้า</a></li>
        
        <li class="dropdown" id="navReport">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="	glyphicon glyphicon-file"></i> รายงาน <span class="caret"></span></a>
          
          <ul class="dropdown-menu">            
            <li id="topNavDailyReport"><a href="Dailyreport.php"> <i class="glyphicon glyphicon-dashboard"></i> รายงานประจำวัน</a></li> 
            <li id="topNavReport"><a href="report.php"> <i class="glyphicon glyphicon-calendar"></i> รายงานย้อนหลัง</a></li>                     
          </ul>
        </li> 

        <li class="dropdown" id="navSetting">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="glyphicon glyphicon-user"></i> <span class="caret"></span></a>
          <ul class="dropdown-menu">                            
            <li id="topNavLogout"><a href="logout.php"> <i class="glyphicon glyphicon-log-out"></i> ออกจากระบบ</a></li>            
          </ul>
        </li>        
               
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
	</nav>

	<div class="container">