<?php
include('db.php')
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nhóm 2</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a  href="../index.php"><i class="fa fa-home"></i> Trang Chủ</a>
                    </li>
                    
					</ul>

            </div>

        </nav>
       
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Đặt Lịch <small></small>
                        </h1>
                    </div>
                </div> 
                 
                                 
            <div class="row">
                
                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            THÔNG TIN CÁ NHÂN
                        </div>
                        <div class="panel-body">
						<form name="form" method="post">
                            <div class="form-group">
                                            <label>Tiêu Đề*</label>
                                            <select name="title" class="form-control" required >
												<option value selected ></option>
                                                <option value="DC.">Đám Cưới.</option>
                                              
                                            </select>
                              </div>
							  <div class="form-group">
                                            <label>Tên Chú Rể</label>
                                            <input name="fname" class="form-control" required>
                                            
                               </div>
							   <div class="form-group">
                                            <label>Tên Cô Dâu</label>
                                            <input name="lname" class="form-control" required>
                                            
                               </div>
							   <div class="form-group">
                                            <label>Email</label>
                                            <input name="email" type="email" class="form-control" required>
                                            
                               </div>
							   <!-- <div class="form-group">
                                            <label>Nationality*</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="nation"  value="Sri Lankan" checked="">Sri Lankan
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="nation"  value="Non Sri Lankan ">Non Sri Lankan 
                                            </label>
                         
                                </div>
								
								<div class="form-group">
                                            <label>Passport Country*</label>
                                            <select name="country" class="form-control" required>
												<option value selected ></option>
                                                <?php
												foreach($countries as $key => $value):
												echo '<option value="'.$value.'">'.$value.'</option>'; //close your tags!!
												endforeach;
												?>
                                            </select>
								</div> -->
								<div class="form-group">
                                            <label>Số Điện Thoại</label>
                                            <input name="phone" type ="text" class="form-control" required>
                                            
                               </div>
							   
                        </div>
                        
                    </div>
                </div>
                
                  
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            THÔNG TIN ĐẶT LỊCH
                        </div>
                        <div class="panel-body">
								<div class="form-group">
                                            <label>Loại Hội Trường *</label>
                                            <select name="troom"  class="form-control" required>
												<option value selected ></option>
                                                <option value="Hoi Truong A">Hội Trường A</option>
                                                <option value="Hoi Truong B">Hội Trường B</option>
												<option value="Hoi Truong C">Hội Trường C</option>
												<option value="Hoi Truong D">Hội Trường D</option>
                                            </select>
                              </div>
							  <div class="form-group">
                                            <label>Số Bàn Đặt *</label>
                                            <select name="bed" class="form-control" required>
												<option value selected ></option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
												<option value="200">200</option>
                                                <option value="300">300</option>
												<option value="400">400</option>
                                                
                                             
                                            </select>
                              </div>
							  <!-- <div class="form-group">
                                            <label>Số Bàn Đặt *</label>
                                            <select name="nroom" class="form-control" required>
												<option value selected ></option>
                                                <option value="50">50</option>
                                               <option value="100">100</option>
												<option value="200">200</option>
												<option value="300">300</option>
												<!-- <option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option> -->
                                            <!-- </select>
                              </div> --> 
							 
							 
							  <div class="form-group">
                                            <label>Số Khách Mời</label>
                                            <select name="meal" class="form-control"required>
												<option value selected ></option>
                                                <option value="300">300</option>
                                                <option value="400">400</option>
												<option value="500">500</option>
												<option value="600">600</option>
												
                                                
                                             
                                            </select>
                              </div>
							  <div class="form-group">
                                            <label>Bắt Đầu Ngày</label>
                                            <input name="cin" type ="date" class="form-control">
                                            
                               </div>
							   <div class="form-group">
                                            <label>Kết Thúc Ngày</label>
                                            <input name="cout" type ="date" class="form-control">
                                            
                               </div>
                       </div>
                        
                    </div>
                </div>
				
				
                <div class="col-md-12 col-sm-12">
                    <div class="well">
                        <h4>XÁC THỰC DANH TÍNH</h4>
                        <p>Gõ mã này <?php $Random_code=rand(); echo$Random_code; ?> </p><br />
						<p>Nhập mã ngẫu nhiên<br /></p>
							<input  type="text" name="code1" title="random code" />
							<input type="hidden" name="code" value="<?php echo $Random_code; ?>" />
						<input type="submit" name="submit" class="btn btn-primary">
						<?php
							if(isset($_POST['submit']))
							{
							$code1=$_POST['code1'];
							$code=$_POST['code']; 
							if($code1!="$code")
							{
							$msg="Invalide code"; 
							}
							else
							{
							
									// $con=mysqli_connect("localhost","root","","hotel");
									$check="SELECT * FROM roombook WHERE email = '$_POST[email]'";
									$rs = mysqli_query($con,$check);
									$data = mysqli_fetch_array($rs, MYSQLI_NUM);
									if($data[0] > 1) {
										echo "<script type='text/javascript'> alert('Người dùng đã tồn tại')</script>";
										
									}

									else
									{
										$new ="Not Conform";
										$newUser="INSERT INTO `roombook`(`Title`, `FName`, `LName`, `Email`,  `Phone`, `TRoom`, `Bed`,  `Meal`, `cin`, `cout`,`stat`,`nodays`) VALUES ('$_POST[title]','$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[phone]','$_POST[troom]','$_POST[bed]','$_POST[meal]','$_POST[cin]','$_POST[cout]','$new',datediff('$_POST[cout]','$_POST[cin]'))";
										if (mysqli_query($con,$newUser))
										{
											echo "<script type='text/javascript'> alert('Đặt Lịch Thành Công')</script>";
											
										}
										else
										{
											echo "<script type='text/javascript'> alert('Lỗi khi thêm người dùng trong cơ sở dữ liệu')</script>";
											
										}
									}

							$msg="Your code is correct";
							}
							}
							?>
						</form>
							
                    </div>
                </div>
            </div>
           
                
                </div>
                    
            
				
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
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
