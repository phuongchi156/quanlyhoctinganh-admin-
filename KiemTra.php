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
		
			
	<div><h2>Danh sách bài làm kiểm tra</h2></div>
	<div class="rows">
		<div class="p-5"> 
				<table class="table table-center table-dard mt-9 ">
					  <thead class="thead-dark">
						<tr>
						<th scope="col">STT</th>
                        <th scope="col">Mã bài kiểm tra</th>
						<th scope="col">Mã người dùng</th>
						<th scope="col">Tổng câu đúng</th>
						<th scope="col">Tổng câu sai</th>
                        <th scope="col">Ngày làm bài</th>
                        <th scope="col">Delete</th>
						<th scope="col">Edit</th>
						</tr>
					  </thead>
					  <tbody>
					  <?php
		$stt = 1;
		?>
						<?php
						  include_once( "DataProvider.php" );
						  $dsquestion = DataProvider::ExecuteQuery("SELECT * FROM questions");
						  if($dsquestion != false)
						  {
							  while ($row = mysqli_fetch_array($dsquestion)){
								$ma = $row[ "ID" ];
								//$question1 = $row[ "ID_Question" ];
								$mark = $row[ "ID_User" ];
								$type = $row[ "total_success" ];
								$translate = $row[ "total_fail" ];
								$answer = $row[ "date" ];
								?>
								  <tr>
								  <td>
								<?php
									echo( $stt );
									$stt++;
									?>
								</td>
								  <td><?php echo($ma);?>
							  </td>
							  <!-- <td><?php echo($question1);?>
							  </td> -->
							  <td><?php echo($mark);?>
							  <td>
								  <?php echo($type); ?>
							  </td>
							  <td>
							  <?php echo($translate); ?>
							  </td>
							  <td>
							  <?php echo($answer); ?>
							  </td>
										<td>
											<form name="form1" method="post" action="xlXoaKT.php">
												<input type="hidden" name="QuestionsDelete" value="<?php echo($ma); ?>">
												<input type="submit" name="btnXoa" value="Xóa">
											</form>
										</td>
								  </td>
										<td>
											<form name="form1" method="post" action="">
												<input type="hidden" name="QuestionsEdit" value="<?php echo($ma); ?>">
												<input type="submit" name="btnXoa" value="Sửa">
											</form>
										</td>
								  </tr>
								  <?php
							  }
						  }
						?>
		   
					  </tbody>
					</table>
			</div>
			</div>
			</div>
		<?php

		?>
		<h2><a href="themkt.php"> Thêm Bài kiểm tra mới </a></h2>
        


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


</body>

</html>
