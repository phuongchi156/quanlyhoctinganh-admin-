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

   
    <div class="">
        
        <h1><font color="blue"> Sửa câu hỏi </font> </h1>
        
         <?php
         $ma = null;
                 if(isset($_POST["QuestionEdit"])){
                  $ma = $_POST["QuestionEdit"];
                  echo $ma;
                 }
                     
        
                        include_once( "DataProvider.php" );
                        $dsQuestion = DataProvider::ExecuteQuery("SELECT * FROM question WHERE ID = " .$ma);
                        if($dsQuestion != false)
                        {
                            while ($row = mysqli_fetch_array($dsQuestion)){
                              $ma = $row[ "ID" ];
                              $question = $row[ "Question" ];
                             // $mark = $row[ "Mark" ];
                              $type = $row[ "Type" ];
                              $translate = $row[ "Translate" ];
                              $answer = $row[ "Answer" ];
                              $a = $row[ "option_A" ];
                              $b = $row[ "option_B" ];
                              $c = $row[ "option_C" ];
                              $d = $row[ "option_D" ];
                              $dateCreate = $row[ "dateCreate" ];
                              $dateUpdate = $row[ "dateUpdate" ];
                             // $id_Questions = $row["ID_Question"];
                            }
                          }
                              ?>


<?php
                 if(isset($_POST["btnThemMoi"])){
                 include_once("DataProvider.php");
                $ma = $_POST['txtID'];
                $question = $_POST['txtQuestion'];
              //  $mark = $_POST['txtMark'];
                $type = $_POST['txtType'];
                $translate = $_POST['txtTranslate'];
                $answer  = $_POST['txtAnswer'];
                $a = $_POST['txtA'];
                $b = $_POST['txtB'];
                $c  = $_POST['txtC'];
                $d = $_POST['txtD'];
                $dateCreate = $_POST['txtDateCreate'];
                $dateUpdate  = $_POST['txtDateUpdate'];
               // $id_Questions = $_POST['txtID_Question'];
                 }

        
                //$ma = $_POST["QuestionEdit"];

                include_once( "DataProvider.php" );
                //$sql = " UPDATE question SET Question = ' $question ',Mark = '$mark ',TypeQ = ' $type ', TranslateQ = ' $translate ',Answer = ' $answer ', option_A = '$a ',option_B= ' $b ',opton_C = '$c', dateUpdate = ' $dateCreate', dateUpdate = ' $dateUpdate ', ID_Question = '$maquestion 'WHERE ID = '.$ma";
                 DataProvider::ExecuteQuery(" UPDATE question SET Question = ' $question ',Type = ' $type ', Translate = ' $translate ',Answer = ' $answer ', option_A = '$a ',option_B= ' $b ',opton_C = '$c', dateUpdate = ' $dateCreate', dateUpdate = ' $dateUpdate ' WHERE ID = $ma");
        // if($ketqua== false){
         //    echo '<script>alert("Sửa thất bại");</script>';
        // }
        // else{
          //   echo '<script>alert("Sửa thành công");</script>';
       //  }
      // echo '<script>alert("đã cập nhật");</script>';
                    ?>

                              

<div class="rows">
          <div>
            <form  style="padding-left: 26%;" method="post" enctype="multipart/form-data" name="form1" action="editCauHoi.php">
              <fieldset style="width:600px;">
              <legend>Câu hỏi</legend>
              <table width="100%" border="0">
              <tr>
                  <td width="50%">ID</td>
                  <td width="50%"><input type="text" name="txtID" value="<?php echo($ma);?>"/></td>
                </tr>
                <tr>
                  <td width="50%">Câu hỏi</td>
                  <td width="50%"><input type="text" name="txtQuestion" value="<?php echo($question);?>"/></td>
                </tr>
                <!-- <tr>
                  <td>Điểm</td>
                  <td><input type="text" name="txtMark" value="<?php echo($mark);?>"/></td>
                </tr> -->
                <tr>
                  <td>Loại</td>
                  <td><input type="text" name="txtType" value="<?php echo($type);?>"/></td>
                </tr>
                <tr>
                  <td>Đáp án</td>
                  <td><input type="text" name="txtAnswer" value="<?php echo($answer);?>"/></td>
                </tr>
                <tr>
                  <td>Dịch</td>
                  <td><input type="text" name="txtTranslate" value="<?php echo($translate);?>"/></td>
                </tr>
                <tr>
                <td>A</td>
                  <td><input type="text" name="txtA" value="<?php echo($a);?>"/></td>
                </tr>
                </tr>
                <tr>
                  <td>B</td>
                  <td><input type="text" name="txtB" value="<?php echo($b);?>"/></td>
                </tr>
                <tr>
                  <td>C</td>
                  <td><input type="text" name="txtC" value="<?php echo($c);?>"/></td>
                </tr>
                <tr>
                  <td>D</td>
                  <td><input type="text" name="txtD" value="<?php echo($d);?>"/></td>
                </tr>
                <tr>
                  <td>Ngày tạo</td>
                  <td><input type="date" name="txtDateCreate" value="<?php echo($dateCreate);?>"/></td>
                </tr>
                <tr>
                  <td>Ngày cập nhật</td>
                  <td><input type="date" name="txtDateUpdate" value="<?php echo($dateUpdate);?>"/></td>
                </tr>
                <tr>
                  <td align="right"><input type="submit" name="btnThemMoi" value="Cập nhật"/></td>
                  <!-- <td><input name="btnLamLai" type="reset" value="Làm lại"/></td> -->
                </tr>
              </table>
            </form>
          </div>
</div>


              

              </tbody>
            </table>
          </div>
        </div></div>

<script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>                                 