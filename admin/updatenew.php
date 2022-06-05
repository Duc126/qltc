<?php
include ("db.php");
if(count($_POST)>0) {
mysqli_query($con,"UPDATE new set  fname='" . $_POST['fname'] . "', noidung='" . $_POST['noidung'] . "', thongtin='" . $_POST['thongtin'] . "' ");
$message = "<script type='text/javascript'> alert('Update Thành Công')</script>";
}
$result = mysqli_query($con,"SELECT * FROM new WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("location:index.php");
}
?>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ADMIN </title>

    <link href="assets/css/bootstrap.css" rel="stylesheet" />

    <link href="assets/css/font-awesome.css" rel="stylesheet" />

    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />

    <link href="assets/css/custom-styles.css" rel="stylesheet" />

    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php"> <?php echo $_SESSION["user"]; ?> </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="usersetting.php"><i class="fa fa-user fa-fw"></i> THÔNG TIN NGƯỜI DÙNG</a>
                        </li>
                        <li><a href="settings.php"><i class="fa fa-gear fa-fw"></i> CÀI ĐẶT</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> ĐĂNG XUẤT</a>
                        </li>
                    </ul>

                </li>

            </ul>
        </nav>

        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu" href="home.php"><i class="fa fa-dashboard"></i> TÌNH TRẠNG</a>
                    </li>
                    <li>
                        <a href="messages.php"><i class="fa fa-desktop"></i> TIN TỨC</a>
                    </li>
                    <li>
                        <a href="roombook.php"><i class="fa fa-bar-chart-o"></i>PHÒNG KHÁCH ĐẶT</a>
                    </li>
                    <li>
                        <a href="payment.php"><i class="fa fa-qrcode"></i> THANH TOÁN</a>

                    </li>
                    <li>
                        <a href="TT.php"><i class="fa fa-qrcode"></i> THÊM THÔNG BÁO</a>
                    </li>
                    <li>
                        <a href="profit.php"><i class="fa fa-qrcode"></i> THỐNG KÊ</a>
                    </li>
                    <li>
                        <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> ĐĂNG XUẤT</a>
                    </li>




                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Thêm <small>Tin Tức </small>
                        </h1>
                    </div>
                </div>

<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">

</div>
<div class=" form-group ">

<div class=" form-group ">
Name: <br>
<input type="text" name="fname" class="txtField form-control" value="<?php echo $row['fname']; ?>">
</div>
<div class=" form-group ">
Nội Dung :<br>
<input type="text" name="noidung" class="txtField form-control" value="<?php echo $row['noidung']; ?>">
</div>
<div class=" form-group  ">
Thông Báo<br>
<textarea name="thongtin" class="form-control" value="NO" placeholder="Nhập nội dung *" style="width: 100%; height: 150px;" required=""></textarea>
<!-- <input type="text" name="thongtin" class="txtField form-control" value="<?php echo $row['thongtin']; ?>"> -->
</div>
<div class=" form-group ">
<input type="submit" class="btn btn-primary" name="submit" value="Update" class="buttom">

</div>
</form>
</body>
</html>