<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Chào mừng đến với admin</title>
    <meta name="description" content="Admin">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php"> <i class="index.php"></i>Trang chủ </a>
                    </li>
                    <h3 class="menu-title">Menu</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Quản lý kiểm tra</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="did.php">Kiểm tra</a></li>
                            <li><i class="fa fa-share-square-o"></i><a href="cauhoi.php">Câu hỏi</a></li>
                            <li><i class="fa fa-id-card-o"></i><a href="KiemTra.php">Danh sách bài kiểm tra</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Quản lý học sinh</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="dsHocSinh.php">Danh sách học sinh</a></li>
                            <li><i class="fa fa-table"></i><a href="Ketqua.php">Kết quả</a></li>
                        </ul>
                    </li>
                
                    <h3 class="menu-title">Extras</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Login</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Register</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->
		<?php
		if (isset($_POST["themuser"])) {
			include_once("DataProvider.php");
			$id = $_POST['ID'];
			$name = $_POST['name'];
			$firstname = $_POST['firsname'];
			$lastname = $_POST['lastname'];
			$age = $_POST['age'];
			$email = $_POST['email'];
			$address  = $_POST['address'];
			$face = $_POST['face'];
			$google  = $_POST['google'];
			$password = $_POST['password'];
			$roles = $_POST['roles'];



			//$file_name = $_FILES['file']['name'];
			//$file_tem_loc = $_FILES['file']['tmp_name'];
			//$bookpic = "../img/".$file_name; 	
			//move_uploaded_file($file_tem_loc, $bookpic);

			include_once( "DataProvider.php" );

			//$sql = "INSERT INTO user(ID, Name, FirstName, LastName,Age, Email, Address, Password) VALUES('$id','$name ',' $firstname ',' $lastname',' $age ',' $email ',' $address ',' $password ')";

			$ketqua = DataProvider::ExecuteQuery("INSERT INTO user (ID,Name, FirstName, LastName, Age, Email, Address, Id_Facebook, Id_Google, Password, roles) VALUES ('$id', '$name', '$firstname', '$lastname', '$age', '$email', '$address', '$face', '$google', '$password', '$roles');");
			if ($ketqua == false) {
				echo '<script>alert("Thêm mới thất bại");</script>';
			} else {
				echo '<script>alert("Thêm mới thành công");</script>';
				//header('Location: dsHocSinh.php');
			}
		//}
		?>
						<?php
		}
		?>
		<div class="rows">
          <div>
            <form  style="padding-left: 26%;" method="post" enctype="multipart/form-data" name="themHS" action="ThemHS.php">
              <fieldset style="width:600px;">
              <legend>Nhập thông tin người dùng</legend>
              <table width="100%" border="0">
			  <tr>
								<td width="48%" style="color:#666">ID</td>
								<td width="52%"><input type="text" name="ID" /></td>
							</tr>
							<tr>
								<td width="48%" style="color:#666">Name</td>
								<td width="52%"><input type="text" name="name" /></td>
							</tr>
							<td width="48%" style="color:#666">First Name</td>
							<td><input type="text" name="firsname" /></td>
							</tr>
							<tr>
								<td width="48%" style="color:#666">Lastname</td>
								<td><input type="text" name="lastname" /></td>
							</tr>
							<tr>
								<td width="48%" style="color:#666">Age</td>
								<td><input type="text" name="age" /></td>
							</tr>
							<tr>
								<td width="48%" style="color:#666">Email</td>
								<td><input type="text" name="email" /></td>
							</tr>
							<tr>
								<td width="48%" style="color:#666">Facebook</td>
								<td><input type="text" name="face" /></td>
							</tr>
							<tr>
								<td width="48%" style="color:#666">Google</td>
								<td><input type="text" name="google" /></td>
							</tr>
							<tr>
								<td width="48%" style="color:#666">Address</td>
								<td><input type="text" name="address" /></td>
							</tr>
							<tr>
								<td width="48%" style="color:#666">Password</td>
								<td><input type="password" name="password" /></td>
							</tr>
							<tr>
								<td width="48%" style="color:#666">Roles</td>
								<td><input type="text" name="roles" /></td>
							</tr>

						</table>
						<table width="100%" border="0" style="margin-top:10px">
							<tr>
								<td align="right"><input type="submit" name="themuser" value="Thêm" class="register" /></td>
							</tr>
						</table>
				</form>
				<br />
				<!-- <script type="text/javascript">
					window.onload = function() {
						document.getElementById("password1").onchange = validatePassword;
						document.getElementById("password2").onchange = validatePassword;
					}

					function validatePassword() {
						var pass2 = document.getElementById("password2").value;
						var pass1 = document.getElementById("password1").value;
						if (pass1 != pass2)
							document.getElementById("password2").setCustomValidity("Passwords Don't Match");
						else
							document.getElementById("password2").setCustomValidity('');
						//empty string means no validation error
					}
				</script> -->

				
				<script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


</body>

</html>
