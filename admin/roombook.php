<?php
session_start();
if (!isset($_SESSION["user"])) {
	header("location:index.php");
}
?>

<?php
if (!isset($_GET["rid"])) {

	header("location:index.php");
} else {
	$curdate = date("Y/m/d");
	include('db.php');
	$id = $_GET['rid'];


	$sql = "Select * from roombook where id = '$id'";
	$re = mysqli_query($con, $sql);
	while ($row = mysqli_fetch_array($re)) {
		$title = $row['Title'];
		$fname = $row['FName'];
		$lname = $row['LName'];
		$email = $row['Email'];
		// $nat = $row['National'];
		// $country = $row['Country'];
		$Phone = $row['Phone'];
		$troom = $row['TRoom'];
		
		$bed = $row['Bed'];
		
		$meal = $row['Meal'];
		$cin = $row['cin'];
		$cout = $row['cout'];
		$sta = $row['stat'];
		$days = $row['nodays'];
	}
}



?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Đặt Phòng </title>
	<!-- Bootstrap Styles-->
	<link href="assets/css/bootstrap.css" rel="stylesheet" />
	<!-- FontAwesome Styles-->
	<link href="assets/css/font-awesome.css" rel="stylesheet" />
	<!-- Morris Chart Styles-->
	<link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
	<!-- Custom Styles-->
	<link href="assets/css/custom-styles.css" rel="stylesheet" />
	<!-- Google Fonts-->
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
						<li><a href="usersetting.php"><i class="fa fa-user fa-fw"></i>Thông Tin Người Dùng</a>
						</li>
						<li><a href="settings.php"><i class="fa fa-gear fa-fw"></i>Cài Đặt</a>
						</li>
						<li class="divider"></li>
						<li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Đăng Xuất</a>
						</li>
					</ul>
					<!-- /.dropdown-user -->
				</li>
				<!-- /.dropdown -->
			</ul>
		</nav>
		<!--/. NAV TOP  -->
		<nav class="navbar-default navbar-side" role="navigation">
			<div class="sidebar-collapse">
				<ul class="nav" id="main-menu">

					<li>
						<a href="home.php"><i class="fa fa-dashboard"></i> TÌNH TRẠNG</a>
					</li>
					<li>
						<a href="messages.php"><i class="fa fa-desktop"></i> TIN TỨC</a>
					</li>
					<li>
						<a class="active-menu" href="roombook.php"><i class="fa fa-bar-chart-o"></i> PHÒNG KHÁCH ĐẶT</a>
					</li>
					<li>
						<a href="payment.php"><i class="fa fa-qrcode"></i> Thanh Toán</a>
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
							ĐẶT LỊCH<small> <?php echo  $curdate; ?> </small>
						</h1>
					</div>


					<div class="col-md-8 col-sm-8">
						<div class="panel panel-info">
							<div class="panel-heading">
								Đặt Lịch Conformation
							</div>
							<div class="panel-body">

								<div class="table-responsive">
									<table class="table">
										<tr>
											<th>MIÊU TẢ</th>
											<th>THÔNG TIN</th>

										</tr>
										<tr>
											<th>Tên Cặp Đôi</th>
											<th><?php echo $title . $fname . $lname; ?> </th>

										</tr>
										<tr>
											<th>Email</th>
											<th><?php echo $email; ?> </th>

										</tr>
									
										<tr>
											<th>Số Điện Thoại</th>
											<th><?php echo $Phone; ?></th>

										</tr>
										<tr>
											<th>Hội Trường </th>
											<th><?php echo $troom; ?></th>

										</tr>
										<tr>
											<th>Số Bàn Đặt </th>
											<th><?php echo $bed; ?></th>

										</tr>
										<tr>
											<th>Số Khách Mời </th>
											<th><?php echo $meal; ?></th>

										</tr>
										
										<tr>
											<th>Ngày Bắt Đầu </th>
											<th><?php echo $cin; ?></th>

										</tr>
										<tr>
											<th>Ngày Kết Thúc</th>
											<th><?php echo $cout; ?></th>

										</tr>
										<tr>
											<th>Số Ngày</th>
											<th><?php echo $days; ?></th>

										</tr>
										<tr>
											<th>Trạng Thái</th>
											<th><?php echo $sta; ?></th>

										</tr>





									</table>
								</div>



							</div>
							<div class="panel-footer">
								<form method="post">
									<div class="form-group">
										<label>Chọn Trạng Thái</label>
										<select name="conf" class="form-control">
											<option value selected> </option>
											<option value="Conform">Conform</option>


										</select>
									</div>
									<input type="submit" name="co" value="Conform" class="btn btn-success">

								</form>
							</div>
						</div>
					</div>

					<?php
					$rsql = "select * from room";
					$rre = mysqli_query($con, $rsql);
					$r = 0;
					$sc = 0;
					$gh = 0;
					$sr = 0;
					$dr = 0;
					while ($rrow = mysqli_fetch_array($rre)) {
						$r = $r + 1;
						$s = $rrow['type'];
						$p = $rrow['place'];
						if ($s == "Hoi Truong A") {
							$sc = $sc + 1;
						}

						if ($s == "Hoi Truong B") {
							$gh = $gh + 1;
						}
						if ($s == "Hoi Truong C") {
							$sr = $sr + 1;
						}
						if ($s == "Hoi Truong D") {
							$dr = $dr + 1;
						}
					}
					?>

					<?php
					$csql = "select * from payment";
					$cre = mysqli_query($con, $csql);
					$cr = 0;
					$csc = 0;
					$cgh = 0;
					$csr = 0;
					$cdr = 0;
					while ($crow = mysqli_fetch_array($cre)) {
						$cr = $cr + 1;
						$cs = $crow['troom'];

						if ($cs == "Hoi Truong A") {
							$csc = $csc + 1;
						}

						if ($cs == "Hoi Truong B") {
							$cgh = $cgh + 1;
						}
						if ($cs == "Hoi Truong C") {
							$csr = $csr + 1;
						}
						if ($cs == "Hoi Truong D") {
							$cdr = $cdr + 1;
						}
					}

					?>
					<div class="col-md-4 col-sm-4">
						<div class="panel panel-default">
							<div class="panel-heading">
								Chi tiết hội trường trống
							</div>
							<div class="panel-body">
								<table width="200px">

									<tr>
										<td><b>Hội Trường A </b></td>
										<td><button type="button" class="btn btn-primary btn-circle"><?php
																										$f1 = $sc - $csc;
																										if ($f1 <= 0) {
																											$f1 = "NO";
																											echo $f1;
																										} else {
																											echo $f1;
																										}


																										?> </button></td>
									</tr>
									<tr>
										<td><b>Hội Trường B</b> </td>
										<td><button type="button" class="btn btn-primary btn-circle">
											<?php
												$f2 =  $gh - $cgh;
												if ($f2 <= 0) {
												$f2 = "NO";
												echo $f2;
												} else {
												echo $f2;
											}

										?> </button></td>
									</tr>
									<tr>
										<td><b>Hội Trường c </b></td>
										<td><button type="button" class="btn btn-primary btn-circle"><?php
																										$f3 = $sr - $csr;
																										if ($f3 <= 0) {
																											$f3 = "NO";
																											echo $f3;
																										} else {
																											echo $f3;
																										}

																										?> </button></td>
									</tr>
									<tr>
										<td><b>Hội Trường D</b> </td>
										<td><button type="button" class="btn btn-primary btn-circle"><?php

																										$f4 = $dr - $cdr;
																										if ($f4 <= 0) {
																											$f4 = "NO";
																											echo $f4;
																										} else {
																											echo $f4;
																										}
																										?> </button></td>
									</tr>
									<tr>
										<td><b>TỔNG </b> </td>
										<td> <button type="button" class="btn btn-danger btn-circle"><?php

																										$f5 = $r - $cr;
																										if ($f5 <= 0) {
																											$f5 = "NO";
																											echo $f5;
																										} else {
																											echo $f5;
																										}
																										?> </button></td>
									</tr>
								</table>





							</div>
							<div class="panel-footer">

							</div>
						</div>
					</div>
				</div>
				<!-- /. ROW  -->

			</div>
			<!-- /. ROW  -->




		</div>
		<!-- /. PAGE INNER  -->
	</div>
	<!-- /. PAGE WRAPPER  -->
	</div>
	<!-- /. WRAPPER  -->
	<!-- JS Scripts-->
	<!-- jQuery Js -->
	<script src="assets/js/jquery-1.10.2.js"></script>
	<!-- Bootstrap Js -->
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- Metis Menu Js -->
	<script src="assets/js/jquery.metisMenu.js"></script>
	<!-- Morris Chart Js -->
	<script src="assets/js/morris/raphael-2.1.0.min.js"></script>
	<script src="assets/js/morris/morris.js"></script>
	<!-- Custom Js -->
	<script src="assets/js/custom-scripts.js"></script>


</body>

</html>

<?php
if (isset($_POST['co'])) {
	$st = $_POST['conf'];



	if ($st == "Conform") {
		$urb = "UPDATE `roombook` SET `stat`='$st' WHERE id = '$id'";

		if ($f1 == "NO") {
			echo "<script type='text/javascript'> alert('Xin Lỗi! Hội Trường A Hiện Tại Không Có Sẵn ')</script>";
		} else if ($f2 == "NO") {
			echo "<script type='text/javascript'> alert('Xin Lỗi! Hội Trường B Hiện Tại Không Có Sẵn')</script>";
		} else if ($f3 == "NO") {
			echo "<script type='text/javascript'> alert('Xin Lỗi! Hội Trường C Hiện Tại Không Có Sẵn')</script>";
		} else if ($f4 == "NO") {
			echo "<script type='text/javascript'> alert('Xin Lỗi! Hội Trường D Hiện Tại Không Có Sẵn')</script>";
		} else if (mysqli_query($con, $urb)) {
			//echo "<script type='text/javascript'> alert('Guest Room booking is conform')</script>";
			//echo "<script type='text/javascript'> window.location='home.php'</script>";
			$type_of_room = 0;
			if ($troom == "Hoi Truong A") {
				$type_of_room = 80000;
			} else if ($troom == "Hoi Truong B") {
				$type_of_room = 60000;
			} else if ($troom == "Hoi Truong C") {
				$type_of_room = 45000;
			} else if ($troom == "Hoi Truong D") {
				$type_of_room = 30000;
			}




			if ($bed == "50") {
				$type_of_bed = $type_of_room * 30 / 100;
			} else if ($bed == "100") {
				$type_of_bed = $type_of_room * 40 / 100;
			} else if ($bed == "200") {
				$type_of_bed = $type_of_room * 50 / 100;
			} else if ($bed == "300") {
				$type_of_bed = $type_of_room * 60 / 100;
			} else if ($bed == "400") {
				$type_of_bed = $type_of_room * 80 / 100;
			}


			if ($meal == "300") {
				$type_of_meal = $type_of_bed * 11;
			} else if ($meal == "400") {
				$type_of_meal = $type_of_bed * 12;
			} else if ($meal == "500") {
				$type_of_meal = $type_of_bed * 13;
			} else if ($meal == "600") {
				$type_of_meal = $type_of_bed * 14;
			}


			$ttot = $type_of_room * $days * $nroom;
			$mepr = $type_of_meal * $days;
			$btot = $type_of_bed * $days;

			$fintot = $ttot + $mepr + $btot;

			//echo "<script type='text/javascript'> alert('$count_date')</script>";
			$psql = "INSERT INTO `payment`(`id`, `title`, `fname`, `lname`, `troom`, `tbed`, `nroom`, `cin`, `cout`, `ttot`,`meal`, `mepr`, `btot`,`fintot`,`noofdays`) VALUES ('$id','$title','$fname','$lname','$troom','$bed','$nroom','$cin','$cout','$ttot','$meal','$mepr','$btot','$fintot','$days')";

			if (mysqli_query($con, $psql)) {
				$notfree = "NotFree";
				$rpsql = "UPDATE `room` SET `place`='$notfree',`cusid`='$id' where bedding ='$bed' and type='$troom' ";
				if (mysqli_query($con, $rpsql)) {
					echo "<script type='text/javascript'> alert('Phê Duyệt Thành Công')</script>";
					echo "<script type='text/javascript'> window.location='roombook.php'</script>";
				}
			}
		}
	}
}




?>