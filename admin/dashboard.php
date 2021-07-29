<?php
	session_start();
	if(!isset($_SESSION['dangnhap'])){
		header('Location: index.php');
	} 
	if(isset($_GET['login'])){
 	$dangxuat = $_GET['login'];
	 }else{
	 	$dangxuat = '';
	 }
	 if($dangxuat=='dangxuat'){
	 	session_destroy();
	 	header('Location: index.php');
	 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome Admin</title>
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
	<h2 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">Welcome Admin : <?php echo $_SESSION['dangnhap'] ?> <br><a href="?login=dangxuat">Đăng xuất</a></h2>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	    	<li class="nav-item active">
	        <a class="nav-link" href="dashboard.php">Trang chủ</a>
	      	</li>
	      	<li class="nav-item">
	        <a class="nav-link" href="xulydonhang.php">Đơn hàng </a>
	      	</li>
	      	<li class="nav-item">
	        <a class="nav-link" href="xulydanhmuc.php">Danh mục sản phẩm</a>
	     	 </li>
	      	<li class="nav-item">
	        <a class="nav-link" href="xulysanpham.php">Sản phẩm</a>
	      	</li>
	        <li class="nav-item">
	        <a class="nav-link" href="xulydanhmucbaiviet.php">Danh mục tin tức</a>
	      	</li>
	        <li class="nav-item">
	        <a class="nav-link" href="xulybaiviet.php">Bài viết</a>
	      	</li>
	       	<li class="nav-item">
	        <a class="nav-link" href="xulykhachhang.php">Khách hàng</a>
	      	</li>
	      
	    </ul>
	  </div>
	</nav>

</body>
</html>