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


                            <div class="card-header">
                                <strong class="card-title">Danh sách học sinh</strong>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                        <th scope="col">STT</th>
						                <th scope="col">ID</th>
						                <th scope="col">Name</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Age</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">FaceBook</th>
                                        <th scope="col">google</th>
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
                                                          $dsuser = DataProvider::ExecuteQuery("SELECT * FROM user");
                                                          if($dsuser != false)
                                                          {
                                                              while ($row = mysqli_fetch_array($dsuser)){
                                                                $ma = $row[ "ID" ];
                                                                $question1 = $row[ "Name" ];
                                                                $mark = $row[ "FirstName" ];
                                                                $type = $row[ "LastName" ];
                                                                $translate = $row[ "Age" ];
                                                                $answer = $row[ "Email" ];
                                                                $a = $row[ "Address" ];
                                                                $b = $row[ "Id_Facebook" ];
                                                                $c = $row[ "Id_Google" ];
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
                                                              <td><?php echo($question1);?>
                                                              </td>
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
                                                              <?php echo($a); ?>
                                                              </td>
                                                              <td>
                                                              <?php echo($b); ?>
                                                              </td>
                                                              <td>
                                                              <?php echo($c); ?>
                                                              </td>
                                                                        <td>
                                                                            <form name="form1" method="post" action="xoaUser.php">
                                                                                <input type="hidden" name="UserDelete" value="<?php echo($ma); ?>">
                                                                                <input type="submit" name="btnXoa" value="Xóa">
                                                                            </form>
                                                                        </td>
                                                                  </td>
                                                                        <td>
                                                                            <form name="form1" method="post" action="editUser.php">
                                                                                <input type="hidden" name="UserEdit" value="<?php echo($ma); ?>">
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
  <h2> <a href="ThemHS.php"> Thêm mới người dùng </a></h2>
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


</body>

</html>
