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

                            <div align="center">
            <form action="Ketqua.php" method="get">
                Tìm kiếm kết quả theo id người dùng: <input type="text" name="search" />
                <input type="submit" name="ok" value="search" />
            </form>
        </div>
        <?php
            if (isset($_REQUEST['ok'])) 
            {
                $search = addslashes($_GET['search']);
     
                if (empty($search)) {
                    echo "Yêu cầu nhập dữ liệu";
                } 
                else
                {
                    include_once( "DataProvider.php" );
                   // $user = DataProvider::ExecuteQuery("SELECT Name, Age FROM user WHERE ID LIKE '$ID_user'");
                    $timkiem = DataProvider::ExecuteQuery("SELECT * FROM history WHERE ID_User LIKE '$search'");
                    if($timkiem != false){
                      // echo "$timkiem ket qua tra ve voi tu khoa <b>$search</b>";
 
                        //echo '<table border="1" cellspacing="0" cellpadding="10">';
                        echo' <div class="card-body">';
                        echo ' <table class="table table-striped">';
                           echo '<thead>';
                              echo '  <tr>';
                           //  echo '   <th scope="col">STT</th>';
                              echo  '<th scope="col">ID</th>';
                                echo '<th scope="col">Tên</th>';
                                echo '<th scope="col">Tuổi</th>';
                                //echo '<th scope="col">ID_questions</th>';
                                echo '<th scope="col">Số câu đúng</th>';
                                echo '<th scope="col">Số câu sai</th>';
                                echo '<th scope="col">Câu hỏi</th>';
                                echo '<th scope="col">A</th>';
                                echo '<th scope="col">B</th>';
                                echo '<th scope="col">C</th>';
                                echo '<th scope="col">D</th>';
                                echo '<th scope="col">Đáp án</th>';
                                echo '<th scope="col">Chosen</th>';
                                echo '<th scope="col">Ngày</th>';
                                echo '</tr>';
                            echo '</thead>';
                        while ($row = mysqli_fetch_array($timkiem)){

                            $ma = $row[ "ID" ];
                            $ID_user = $row[ "ID_User" ];
                            $Id_questions = $row[ "ID_Questions" ];
                            $question = $row[ "ID_question" ];
                            $chosen = $row[ "chosen" ];
                            $date = $row[ "date" ];
                            $user = DataProvider::ExecuteQuery("SELECT Name, Age FROM user WHERE ID LIKE '$ID_user'");
                            if($user != false){
                                while ($row = mysqli_fetch_array($user)){
                                    $username = $row[ "Name" ];
                                    $userage = $row[ "Age" ];
                                }
                            }
                            $pQUestions = DataProvider::ExecuteQuery("SELECT total_success, total_fail FROM questionss WHERE ID LIKE '$Id_questions'");
                            if($pQUestions != false){
                                while ($row = mysqli_fetch_array($pQUestions)){
                                    $dung = $row[ "total_success" ];
                                    $sai = $row[ "total_fail" ];
                                }
                            }
                            $ques = DataProvider::ExecuteQuery("SELECT Question, Answer, option_A, option_B,option_C,option_D FROM question WHERE ID LIKE '$question'");
                           // $ques = DataProvider::ExecuteQuery("SELECT Question, Answer, option_A, option_B,option_C,option_D FROM question WHERE ID LIKE 1");
                            if($ques != false){
                                while ($row = mysqli_fetch_array($ques)){
                                    $cauhoi = $row[ "Question" ];
                                    $dapan = $row[ "Answer" ];
                                    $a = $row["option_A"];
                                    $b = $row["option_B"];
                                    $c = $row["option_C"];
                                    $d = $row["option_D"];
                                }
                            }
                            ?>
                                                                  <td><?php echo($ma);?>
                                                              </td>
                                                              <td><?php echo($username);?>
                                                              <td>
                                                                  <?php echo($userage); ?>
                                                              </td>
                                                              <td>
                                                              <?php echo($dung); ?>
                                                              </td>
                                                              <td>
                                                              <?php echo($sai); ?>
                                                              </td>
                                                              <td>
                                                              <?php echo($cauhoi); ?>
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
                                                              <?php echo($d); ?>
                                                              </td>
                                                              <td>
                                                              <?php echo($dapan); ?>
                                                              </td>
                                                              <td>
                                                              <?php echo($chosen); ?>
                                                              </td>
                                                              <td>
                                                              <?php echo($date); ?>
                                                              </td>
                                </tr>
                            <?php
 
                    }
                    echo '</table>';
                    echo '</div>';
                } 
                else {
                    echo "Khong tim thay ket qua!";
                }
            }
        }
        ?>                               <div class="card-header">
        <strong class="card-title">Danh sách lịch sử làm bài</strong>
    </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                        <th scope="col">STT</th>
						                <th scope="col">ID</th>
                                        <th scope="col">ID_User</th>
                                        <th scope="col">Tên User</th>
                                        <th scope="col">Tuổi User</th>
                                        <th scope="col">Số câu đúng</th>
                                        <th scope="col">Số câu sai</th>
                                        <th scope="col">ID_Question</th>
                                        <th scope="col">Question</th>
                                        <th scope="col">Đáp án đúng</th>
                                        <th scope="col">Chosen</th>
                                        <th scope="col">Ngày</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $stt = 1;
                                        ?>
                                                        <?php
                                                          include_once( "DataProvider.php" );
                                                          $dshistory = DataProvider::ExecuteQuery("SELECT * FROM history");
                                                          if($dshistory != false)
                                                          {
                                                              while ($row = mysqli_fetch_array($dshistory)){
                                                                $ma = $row[ "ID" ];
                                                                $ID_user = $row[ "ID_User" ];
                                                                $Id_questions = $row[ "ID_Questions" ];
                                                                $question = $row[ "ID_question" ];
                                                                $chosen = $row[ "chosen" ];
                                                                $date = $row[ "date" ];
                                                                $user = DataProvider::ExecuteQuery("SELECT Name, Age FROM user WHERE ID LIKE '$ID_user'");
                                                                if($user != false){
                                                                    while ($row = mysqli_fetch_array($user)){
                                                                        $username = $row[ "Name" ];
                                                                        $userage = $row[ "Age" ];
                                                                    }
                                                                }
                                                                $pQUestions = DataProvider::ExecuteQuery("SELECT total_success, total_fail FROM questionss WHERE ID LIKE '$Id_questions'");
                                                                if($pQUestions != false){
                                                                    while ($row = mysqli_fetch_array($pQUestions)){
                                                                        $dung = $row[ "total_success" ];
                                                                        $sai = $row[ "total_fail" ];
                                                                    }
                                                                }
                                                                $ques = DataProvider::ExecuteQuery("SELECT Question, Answer FROM question WHERE ID LIKE '$question'");
                                                              // $ques = DataProvider::ExecuteQuery("SELECT Question, Answer FROM question WHERE ID LIKE 1");
                                                                if($ques != false){
                                                                    while ($row = mysqli_fetch_array($ques)){
                                                                        $cauhoi = $row[ "Question" ];
                                                                        $dapan = $row[ "Answer" ];
                                                                    }
                                                                }
                                                               // $c = $row[ "Id_Google" ];

                                                               // }
                                                               // 
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
                                                              <td><?php echo($ID_user);?>
                                                              </td>
                                                              <td><?php echo($username);?>
                                                              <td>
                                                                  <?php echo($userage); ?>
                                                              </td>
                                                              <td>
                                                              <?php echo($dung); ?>
                                                              </td>
                                                              <td>
                                                              <?php echo($sai); ?>
                                                              </td>
                                                              <td>
                                                              <?php echo($question); ?>
                                                              </td>
                                                              <td>
                                                              <?php echo($cauhoi); ?>
                                                              </td>
                                                              <td>
                                                              <?php echo($dapan); ?>
                                                              </td>
                                                              <td>
                                                              <?php echo($chosen); ?>
                                                              </td>
                                                              <td>
                                                              <?php echo($date); ?>
                                                              </td>
                                                                        <td>
                                                                            <form name="form1" method="post" action="xoaUser.php">
                                                                                <input type="hidden" name="UserDelete" value="<?php echo($ma); ?>">
                                                                                <input type="submit" name="btnXoa" value="Xóa">
                                                                            </form>
                                                                        </td>
                                                                  </td>
                                                                  </tr>
                                                                  <?php
                                                              }
                                                          }
                                                        ?>
                                           
                                    </tbody>
                                </table>
                            </div>
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


</body>

</html>
